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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(document).ready(function () {

    if (window.location.href == "http://localhost:8000/") {
        portflioSlide();
        setSpecContent();
    }

    if (window.location.href == "http://localhost:8000/album") getInstagramData();

    if (window.location.href == "http://localhost:8000/about") personSlide();
});

function portflioSlide() {

    $('.img-unit').click(function () {
        $('.portfolio-slide').css('left', '-100%');
    });

    $('.back-arrow').click(function () {
        $('.portfolio-slide').css('left', '0');
    });
}

function portfolioResize() {

    $('.insta-img').click(function () {
        var modal = "<div class=\"modal_blackener\" \n                              style=\"z-index: 50; \n                                    top: 0; left: 0; \n                                    position: fixed; \n                                    width: 100vw; \n                                    height: 100vh; \n                                    background-color: rgba(50, 50, 50, .5); \n                                    display: flex; \n                                    flex-direction: column;\n                                    justify-content: center;\n                                    align-items: center;\"> \n\t\t\t\t\t\t\t<div class='modal_img'\n                                style='z-index: 60;\n                                        height: auto; \n                                        border: 10px solid white;\n                                        box-shadow: 0px 0px 4px rgba(50, 50, 50, .6);\n\t\t\t\t\t\t\t\t\t\tcursor: pointer;\n\t\t\t\t\t\t\t\t\t\tposition: relative;'>\n\t\t\t\t\t\t\t\t<img src=\"../images/close.svg\" width='50px' style=\"position: absolute; right: 0; top 0;\"></img>\n                            </div>\n                          </div>";
        var imgsrc_old = $(this).attr('src');
        var imgsrc_new = '';

        $('.album-section').prepend(modal);
        $('window').css('overflow', 'hidden');

        if (imgsrc_old.indexOf('/p320x320/') == -1) {
            imgsrc_new = imgsrc_old.replace('/s320x320/', '/612x612/');
            $('.modal_img').css('width', '70%');
            $('.modal_img').append("<img src='" + imgsrc_new + "' width=100%></img>");
        } else {
            imgsrc_new = imgsrc_old.replace('/p320x320/', '/612x612/');

            $(window).height() > $(window).width() ? $('.modal_img').css('height', '60%') : $('.modal_img').css('height', '80%');
            $('.modal_img').append("<img src='" + imgsrc_new + "' height=100%></img>");
        }

        $('.modal_img').click(function () {
            $(this).parent().remove();
            $(this).remove();
        });
    });
}

function setSpecContent() {

    $('.img-unit').click(function () {
        var specTitle = $(this).find('p').text(),
            specImage = './' + $(this).css('background-image').slice($(this).css('background-image').indexOf("images"), -2),
            specContent = $(this).find('ul').html();

        var startIndex = specImage.indexOf('('),
            // Image index calc
        endIndex = specImage.indexOf(')'),
            index = specImage.substring(startIndex + 1, endIndex);

        $('.spec-title').text(specTitle);
        $('.img-spec').attr('src', specImage);
        $('.spec-content').html(specContent);

        // Adding image onclick image changer
        $('.img-spec').click(function () {
            var newSpecImage = specImage.slice(0, startIndex + 1) + ++index + specImage.slice(endIndex);
            if (!UrlExists(window.location.href + newSpecImage)) {
                index = 1;
                newSpecImage = specImage;
            }

            $(this).attr('src', newSpecImage);
        });
    });
}

function parallaxScroller() {

    var windowHeight = $(document.body).height();
    var quoteHeight = $('.quote-spacing').height();
    var quoteBgTop = $('.quote-spacing').css('background-position');
    var quoteBgSize = $('.quote-spacing').css('background-size');
    var scrollage = 0;
    var quote_spacings = [];

    $('.quote-spacing').each(function (index) {
        quote_spacings.push($(this));
    });

    $(window).scroll(function () {

        scrollage = $(this).scrollTop() / windowHeight * 200;

        if ($(this).scrollTop() + $(window).height() >= quote_spacings[0].offset().top && $(this).scrollTop() <= quote_spacings[0].offset().top + quote_spacings[0].height()) {

            quote_spacings[0].css('background-position', '50% calc( 100% - ' + scrollage + '% )');
        }

        if ($(this).scrollTop() + $(window).height() >= quote_spacings[1].offset().top && $(this).scrollTop() <= quote_spacings[1].offset().top + quote_spacings[1].height()) {

            quote_spacings[1].css('background-position', '50% calc( 100% - ' + scrollage + '% )');
        }
    });
}

function getInstagramData() {

    var feed = new Instafeed({
        get: 'user',
        userId: '3108753216',
        //filter: function(image) { return image.tags.indexOf('selflaboratory') >= 0; },
        //template: '<div class="grid-item"><img src="{{image}}"><p>{{caption}}</p></div>',
        template: '<div class="grid-item"><img class="insta-img" src="{{image}}"></div>',
        clientId: 'd1c051869a4d4a0fb4165399d638ba59',
        accessToken: '3108753216.d1c0518.87bda88f40d94183a61c12be8d74072b',
        resolution: 'low_resolution',
        limit: 30,
        after: function after() {
            initMasonryGrid();
            portfolioResize();
        }
    });

    feed.run();
}

function personSlide() {
    var state = 1;
    checkArrows(state);

    $('.right-arrow').click(function () {
        $('.person-slider').css('left', 'calc(-100% - 160px)');
        checkArrows(++state);
    });

    $('.left-arrow').click(function () {
        $('.person-slider').css('left', '0');
        checkArrows(--state);
    });

    function checkArrows(state) {
        if (state == 1) {
            $('.left-arrow').hide();
            $('.right-arrow').show();
        } else {
            $('.left-arrow').show();
            $('.right-arrow').hide();
        }
    }
}

function initMasonryGrid() {

    var grid = document.querySelector('.grid');
    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: 320,
        fitWidth: true,
        gutter: 10
    });

    imagesLoaded(grid).on('progress', function () {
        // layout Masonry after each image loads
        msnry.layout();
    });
}

function UrlExists(url) // Check for existing image for slider
{
    var http = new XMLHttpRequest();
    http.open('HEAD', url, false);
    http.send();
    return http.status != 404;
}

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);