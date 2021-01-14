/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/custom/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/custom/main.js":
/*!*******************************!*\
  !*** ./src/js/custom/main.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
 // Funcionalidade do Menu Responsivo

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function openMenu() {
  var list = document.querySelector('.itens-menu'),
      menu = document.querySelector('.menu-responsivo');
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

var iconM = document.querySelector('[data-menu]'),
    itensMenu = document.querySelectorAll('.list-m a');
iconM.addEventListener('click', openMenu);
itensMenu.forEach(function (item) {
  item.addEventListener('click', openMenu);
}); // banner rotativo de imagens

(function () {
  var banner = document.querySelector('[data-banner]');
  var timer = banner.dataset.banner;
  setInterval(function () {
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
});

(function () {
  var textos = document.querySelectorAll('[data-animation]');

  function ExeCution(timer, texto) {
    setTimeout(function () {
      texto.classList.remove('no-anima-fade');
      texto.classList.add('anima-fade');
    }, timer);
  }

  textos.forEach(function (texto) {
    new ExeCution(texto.dataset.animation, texto);
  });
})(); // botão para avançar seção 


(function () {
  var secao = document.querySelector('.sobre');
  var heightS = secao.scrollHeight;
  var heightJ = document.querySelector('.banner').offsetHeight;

  function nextSection(e) {
    e.preventDefault;
    window.scrollTo({
      top: heightJ,
      behavior: 'smooth'
    });
  }

  var btnSection = document.querySelector('.next-section');
  btnSection.addEventListener('click', nextSection);
})(); // Slide do sobre 


(function () {
  var slides = document.querySelectorAll('[data-slideItem]'),
      btnLeft = document.querySelector('[data-slide="left"]'),
      btnRight = document.querySelector('[data-slide="right"]');
  var iterator = 0;

  function slideMove(typeBtn) {
    var anima;

    if (typeBtn === 'right') {
      iterator >= slides.length ? iterator = 1 : iterator++;
      anima = 'animationR';
    } else if (typeBtn === 'left') {
      iterator <= 1 ? iterator = slides.length : iterator--;
      anima = 'animationL';
    } else {
      iterator = 1;
      anima = '';
    }

    slides.forEach(function (item) {
      if (item.dataset.slideitem === "".concat(iterator)) {
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
})(); // lightbox dos produtos


(function () {
  var servicos = document.querySelectorAll('[data-servico]');
  var modal = document.querySelector('.light-box');
  var close = document.querySelector('.close-modal');
  var imageI = modal.querySelector('.image-produto img');
  var conteudo = {
    titulo: '',
    descricao: []
  };

  function getInfosProduto(id) {
    conteudo.descricao = [];
    modal.classList.add('openModal');
    conteudo.titulo = servicos[id - 1].children[1].innerHTML;

    var _iterator = _createForOfIteratorHelper(servicos[id - 1].children[2].children),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var i = _step.value;
        conteudo.descricao.push(i.innerText);
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }

    modal.querySelector('h3').innerHTML = conteudo.titulo;

    var _iterator2 = _createForOfIteratorHelper(conteudo.descricao),
        _step2;

    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var _i = _step2.value;
        var newLi = document.createElement('li');
        modal.querySelector('ul').append(newLi);
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }

    modal.querySelectorAll('li').forEach(function (element, i) {
      element.innerHTML = conteudo.descricao[i];
    });
    var imageSrc = imageI.src.split('/');
    imageSrc[imageSrc.length - 1] = "servico-".concat(id, ".jpg");
    imageI.src = imageSrc.join('/');
  }

  servicos.forEach(function (servico) {
    servico.addEventListener('click', getInfosProduto.bind(null, servico.dataset.servico));
  });
  close.addEventListener('click', function () {
    modal.classList.remove('openModal');
    modal.querySelectorAll('li').forEach(function (element) {
      element.remove();
    });
  });
})();

/***/ })

/******/ });
//# sourceMappingURL=bundle.js.map