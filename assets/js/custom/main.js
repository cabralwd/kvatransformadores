"use strict";

// Funcionalidade do Menu Responsivo
function openMenu(e) {
  e.preventDefault();
  const list = document.querySelector('.itens-menu');
  console.log('testess');
  if (list.style.display === 'none') {
    list.style.display = 'block';
  } else {
    list.style.display = 'none';
  }
}

const iconM = document.querySelector('[data-menu]');
iconM.addEventListener('click', openMenu);