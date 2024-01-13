'use_strict';

/*
topSpender.set('david', 80);
topSpender.set('andre', 80);
topSpender.set('lars', 80);
topSpender.set('kai', 80);
topSpender.set('uwe', 80);
topSpender.set('dietrich', 80);
topSpender.set('dave', 80);
topSpender.set('lother', 80);
topSpender.set('harry', 80);
topSpender.set('jan', 80);
topSpender.set('eva', 80);
topSpender.set('hermine', 80);
*/

//let betrag = document.forms[0].elements.betrag;

async function generateRanking(topSpender) {
  let ranking = document.getElementById("spendenRanking");
  for (let [key, value] of topSpender) {
    let row = document.createElement('div');
    row.className = "row";
    let name = document.createElement('p');
    name.innerHTML = key;
    name.className = "name";
    let betrag = document.createElement('p');
    betrag.innerHTML = value + "€";
    betrag.className ="betrag";
    await row.appendChild(name);
    await row.appendChild(betrag);
    await ranking.appendChild(row);
  }
} 

async function getIBAN() {
  // IBAN in Zwischenablage kopieren
  let IBAN = document.getElementById("copyIBAN");
  IBAN.addEventListener("click", () => {
    /*temporäres Elem erzeugen*/ 
    var elem = document.createElement("textarea");
    elem.value = IBAN.innerHTML;

    /*temporäres Element aus Sichtbarkeit entfernen*/
    elem.setAttribute("readonly", "");
    elem.style = { "position": "absolute", "left": "-9999px" };
    document.body.appendChild(elem);
    
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);

    window.alert("IBAN in Zwischenablage kopiert");
  }); 
}


async function main(){
  getIBAN();
  
  let topSpender = new Map();
  
  await generateRanking(topSpender);
  
  let formular = document.forms[0];

  formular.betrag.focus();
  
  formular.addEventListener("submit", async () => {
    let betrag = formular.elements.betrag;
    let vorname = formular.elements.vorname;

    let ranking = document.getElementById("spendenRanking");
    topSpender.set(vorname.value, betrag.value);

    topSpender.sort((a, b) => a[1] - b[1]);
    
  });
}

main();
