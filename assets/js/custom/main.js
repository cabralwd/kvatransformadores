"use strict";

// Funcionalidade do Menu Responsivo
function openMenu(e) {
  e.preventDefault();
  const list = document.querySelector('.itens-menu'), menu = document.querySelector('.menu-responsivo');
  list.classList.toggle('ativo');
  menu.classList.toggle('close');

  if (!list.classList.contains('ativo')) {
    list.classList.toggle('close');
  } else if (list.classList.contains('close')) {
    list.classList.remove('close');
  }

  window.navigator.vibrate(200);
}

const iconM = document.querySelector('[data-menu]');
iconM.addEventListener('click', openMenu);

// banner rotativo de imagens
(() => {
  const banner = document.querySelector('[data-banner]');
  const timer = banner.dataset.banner;

  setInterval(() => {
    if (banner.classList.contains('b2')) {
      banner.classList.remove('b2');
      banner.classList.add('b3');
    } else if (banner.classList.contains('b3')) {
      banner.classList.remove('b3');
      banner.classList.add('b1');
    } else {
      banner.classList.remove('b1');
      banner.classList.add('b2');
    }

  }, timer);
})();

(() => {
  let textos = document.querySelectorAll('[data-animation]');

  function ExeCution(timer, texto) {
    setTimeout(() => {
      console.log('deu certo', texto);
      texto.classList.remove('no-anima-fade');
      texto.classList.add('anima-fade');
    }, timer);
  }

  textos.forEach(texto => {
    new ExeCution(texto.dataset.animation, texto);
  });

})();


// botão para avançar seção 
(() => {
  const secao = document.querySelector('.sobre');
  let heightS = secao.scrollHeight;
  let heightJ = document.querySelector('.banner').offsetHeight;
  console.log(heightS);
  function nextSection(e) {
    e.preventDefault;
    console.log('next');

    window.scrollTo({
      top: heightJ,
      behavior: 'smooth'
    });
  }
  const btnSection = document.querySelector('.next-section');
  btnSection.addEventListener('click', nextSection);
})();