"use strict";

// Funcionalidade do Menu Responsivo
function openMenu() {
  const list = document.querySelector('.itens-menu'), menu = document.querySelector('.menu-responsivo');
  list.classList.toggle('ativo');
  menu.classList.toggle('close');

  if (!list.classList.contains('ativo')) {
    list.classList.toggle('close');
  } else if (list.classList.contains('close')) {
    list.classList.remove('close');
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    window.navigator.vibrate(200);
  }
}

const iconM = document.querySelector('[data-menu]'),
  itensMenu = document.querySelectorAll('.list-m a');
iconM.addEventListener('click', openMenu);
itensMenu.forEach(item => {
  item.addEventListener('click', openMenu);
});

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

  function nextSection(e) {
    e.preventDefault;

    window.scrollTo({
      top: heightJ,
      behavior: 'smooth'
    });
  }
  const btnSection = document.querySelector('.next-section');
  btnSection.addEventListener('click', nextSection);
})();

// Slide do sobre 
(() => {
  let slides = document.querySelectorAll('[data-slideItem]'),
    btnLeft = document.querySelector('[data-slide="left"]'),
    btnRight = document.querySelector('[data-slide="right"]');
  let iterator = 0;

  function slideMove(typeBtn) {
    let anima;
    if (typeBtn === 'right') {
      iterator >= slides.length ? iterator = 1 : iterator++;
      anima = 'animationR'
    } else if (typeBtn === 'left') {
      iterator <= 1 ? iterator = slides.length : iterator--;
      anima = 'animationL'
    } else {
      iterator = 1;
      anima = '';
    }

    slides.forEach(item => {
      if (item.dataset.slideitem === `${iterator}`) {
        item.style.display = 'flex';
        item.classList.add(!!anima ? anima : 'no-animate');
      } else {
        item.style.display = "none";
        item.classList.remove('animationR', 'animationL', 'no-animate');
      }
    });

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      window.navigator.vibrate(100);
    }

  }

  btnRight.addEventListener('click', slideMove.bind(null, btnRight.dataset.slide));
  btnLeft.addEventListener('click', slideMove.bind(null, btnLeft.dataset.slide));

  slideMove();

})();

// lightbox dos produtos
(() => {
  const servicos = document.querySelectorAll('[data-servico]');
  const modal = document.querySelector('.light-box');
  const close = document.querySelector('.close-modal');
  const imageI = modal.querySelector('.image-produto img');
  let conteudo = {
    titulo: '',
    descricao: []
  }

  function getInfosProduto(id) {
    conteudo.descricao = [];
    modal.classList.add('openModal');
    conteudo.titulo = servicos[id - 1].children[1].innerHTML;

    for (let i of servicos[id - 1].children[2].children) {
      conteudo.descricao.push(i.innerText);
    }

    modal.querySelector('h3').innerHTML = conteudo.titulo

    for (let i of conteudo.descricao) {
      let newLi = document.createElement('li');
      modal.querySelector('ul').append(newLi);
    }

    modal.querySelectorAll('li').forEach((element, i) => {
      element.innerHTML = conteudo.descricao[i];
    });

    let imageSrc = imageI.src.split('/');
    imageSrc[imageSrc.length - 1] = `servico-${id}.jpg`;
    imageI.src = imageSrc.join('/');
  }

  servicos.forEach(servico => {
    servico.addEventListener('click', getInfosProduto.bind(null, servico.dataset.servico));
  });

  close.addEventListener('click', () => {
    modal.classList.remove('openModal');

    modal.querySelectorAll('li').forEach(element => {
      element.remove();
    });
  });
})();