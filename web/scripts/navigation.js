'use strict';

const tiersteckSubBtn = document.getElementById('tiersteckSubBtn');
const labelSub = document.getElementById('labelSub');
tiersteckSubBtn.addEventListener('mousedown', toggleSubmenu);
labelSub.addEventListener('mousedown', toggleSubmenu);
/* Touchstart ist nicht getestet. Hiermit sollte es funktionieren.
tiersteckSubBtn.addEventListener('touchstart', toggleSubmenu);
labelSub.addEventListener('touchstart', toggleSubmenu); */
const submenu = document.getElementById('submenu');
let newSubmenuState = false;

/** 
 * Submenu nach Klick persistent anzeigen
 *
 * @var bool oldSubmenuState Status von aria-expanded
 * @var object label
*/
async function toggleSubmenu() {
  event.stopPropagation();
  const oldSubmenuState = submenu.getAttribute('aria-expanded');
  const label = document.getElementById('labelSub');
  try {
    console.log('submenu toggled')
    if (oldSubmenuState === null) {
        throw new Error('Attribut aria-expanded fehlt.');
        return;
    }

    if (oldSubmenuState === 'true') {
      newSubmenuState = false;
    } else {
      newSubmenuState = true;
    }
    submenu.setAttribute('aria-expanded', newSubmenuState);
    submenu.classList.toggle('openSubmenu');
    /* Arrow Up then Down*/
    label.textContent = newSubmenuState ? '⮝' : '⮟';
  } catch (error) {
    console.error(error.message);
  }
}

/** 
 * Aktive Seite soll in der Navbar farblich hervorgehoben werden
 *
 * @var string locationPath
 * @var array pathName
 * @var string pageName
 * @var object topMenu
*/
async function navBackground(){
  const locationPath = window.location.pathname;
  const pathName = locationPath.split('/');
  const pageName = pathName[pathName.length-1];

  const topMenu = document.getElementsByClassName('topmenu')[0];

  for(let child of topMenu.children){
    if(child.getAttribute('id') === pageName){
      // Fuege class "currentSite" zum Element hinzu
      // currentSite ist in style.css definiert
      child.classList.toggle('currentSite');
    }
  }
}

navBackground();
