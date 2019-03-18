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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/animate.js":
/*!*********************************!*\
  !*** ./resources/js/animate.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  //Change opacité pour affichage du contenu progressif et ajoute une animation
  $(window).scroll(function () {
    $('.hideR').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('fadeInRight');
      }
    });
  }); //Change opacité pour affichage du contenu progressif et ajoute une animation

  $(window).scroll(function () {
    $('.hideL').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('fadeInLeft');
      }
    });
  }); //Change opacité pour affichage du contenu progressif et ajoute une animation

  $(window).scroll(function () {
    $('.hideU').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('fadeInUpBig');
      }
    });
  }); //Change opacité pour affichage du contenu progressif et ajoute une animation

  $(window).scroll(function () {
    $('.hideD').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('fadeInDownBig');
      }
    });
  }); //Change opacité pour affichage du contenu progressif et ajoute une animation

  $(window).scroll(function () {
    $('.hideZ').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('zoomIn');
      }
    });
  }); //Change opacité pour affichage du contenu progressif et ajoute une animation

  $(window).scroll(function () {
    $('.hideBL').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('bounceInLeft');
      }
    });
  }); //Change opacité pour affichage du contenu progressif et ajoute une animation

  $(window).scroll(function () {
    $('.hideBR').each(function (i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_object) {
        $(this).animate({
          'opacity': '1'
        }, 500);
        $(this).addClass('bounceInRight');
      }
    });
  }); //Réduit la taille du logo quand on est pas au top de la page pour réduire le menu aussi

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 0) {
      $('.logo').addClass('logo-scrolled');
    }

    if (scroll <= 0) {
      $('.logo').removeClass('logo-scrolled');
    }
  }); //Retire les animations + opacité on scroll en dessous de 650 px

  if ($(window).innerWidth() < 650) {
    $('.hideL').removeClass('hideL');
    $('.hideR').removeClass('hideR');
    $('.hideZ').removeClass('hideZ');
    $('.hideU').removeClass('hideU');
    $('.hideD').removeClass('hideD');
    $('.hideBR').removeClass('hideBR');
    $('.hideBL').removeClass('hideBL');
  }

  $('.search').click(function () {
    $('.search-bar').toggle();
  }); //Flux instagram

  var userFeed = new Instafeed({
    get: 'user',
    userId: '7983810479',
    accessToken: '7983810479.1677ed0.aaadb05b044548f48aed1794e16533ca',
    limit: '10',
    template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>'
  });
  userFeed.run(); //Affiche année en cours en bas du footer

  var date = new Date();
  var year = date.getFullYear();
  $('.year').text(year);
});

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/animate.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\wamp64\www\Projets\fluid_flot\resources\js\animate.js */"./resources/js/animate.js");


/***/ })

/******/ });