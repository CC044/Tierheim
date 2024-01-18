'use_strict'; 

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

    /*Inhalt (IBAN) in Zwischenablage kopieren und temp. Element entfernen*/
    elem.select();
    document.execCommand("copy");
    document.body.removeChild(elem);

    window.alert("IBAN in Zwischenablage kopiert");
  }); 
}


async function main(){
  getIBAN();

  // Fokus auf erstes Formularelement
  let formular = document.forms[0];
  formular.betrag.focus();
}

main();
