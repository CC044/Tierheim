async function main() {
  /*Focus auf erstes Formularelement*/
  let formular = document.forms[0];
  formular.Vorname.focus();

  /*Nachricht falls Konatktformular abgeschickt wird*/
  let btn = document.getElementById("kontaktAbschicken");
  btn.addEventListener("click", async () => {
    let vorname = formular.Vorname.value;
    let nachname = formular.Nachname.value;
    let email = formular.email.value;
    let nachricht = formular.nachricht.value;
    
    if(vorname === "" || nachname === "" || email === "" || nachricht === "") {
      window.alert("Bitte füllen Sie alle Felder aus!");
    } else {
      window.alert("Hallo " + vorname + " " + nachname + " !\n" + "Vielen Dank für deine Nachricht. Wir werden uns in Kürze mit dir in      Verbindung setzen und eine Antwort zu deiner E-Mail: " + email + " senden.");
    }
  });
}

main();