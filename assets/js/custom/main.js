"use strict";

// Funcionalidade do Menu Responsivo
function openMenu(e) {
  e.preventDefault();
  const list = document.querySelector('.itens-menu');
  list.classList.toggle('ativo');

  if (!list.classList.contains('ativo')) {
    list.classList.toggle('close');
  } else if (list.classList.contains('close')) {
    list.classList.remove('close');
  }
}

const iconM = document.querySelector('[data-menu]');
iconM.addEventListener('click', openMenu);