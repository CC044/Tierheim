'use_strict';

/** 
 * Fokus auf das Formular setzen
 *
 * @var object formular
*/
async function main() {
  let formular = document.forms[0];
  formular.tierart.focus();
}

main();


/** 
 * Erfolgsbestätigung anzeigen vom Formular Tierabgabe
 *
*/
const tierabgabeSenden =  document.getElementById("tierabgabeSenden");

tierabgabeSenden.addEventListener("click", async () => {
  alert("Vielen Dank für Ihre Tierabgabe !");
});

/** 
 * Sicherstellung, dass Findling und Haustier nicht gelichzeitig gechecked sind 
 *
*/

const checkFindling = document.getElementById("find");

checkFindling.addEventListener("click", async () => {
  if(document.forms.tierabgabeFormular.elements.haustier.checked === true) {
    document.forms.tierabgabeFormular.elements.haustier.checked = false;
    alert("Es kann nur Haustier oder Findling angegeben werden.");
  }
});

const checkHaustier = document.getElementById("haustier");

checkHaustier.addEventListener("click", async () => {
  if(document.forms.tierabgabeFormular.elements.findling.checked === true) {
    document.forms.tierabgabeFormular.elements.findling.checked = false;
    alert("Es kann nur Haustier oder Findling angegeben werden.");
  }
});
