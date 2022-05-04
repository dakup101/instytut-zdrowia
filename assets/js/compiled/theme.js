/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/manageAccordion.ts":
/*!**************************************!*\
  !*** ./assets/js/manageAccordion.ts ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ manageAccordion)\n/* harmony export */ });\nfunction manageAccordion(btnClass) {\n    let triggerBtns = document.querySelectorAll(btnClass);\n    for (const btn of triggerBtns) {\n        btn.addEventListener(\"click\", (e) => {\n            e.preventDefault();\n            if (e.currentTarget instanceof HTMLElement) {\n                let content = e.currentTarget.parentNode.querySelector(\"div[data-tab]\");\n                e.currentTarget.classList.toggle(\"active\");\n                if (content instanceof HTMLElement) {\n                    if (e.currentTarget.classList.contains(\"active\")) {\n                        content.style.height = content.scrollHeight.toString() + \"px\";\n                    }\n                    else {\n                        content.style.height = \"0px\";\n                    }\n                }\n            }\n        });\n    }\n}\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/manageAccordion.ts?");

/***/ }),

/***/ "./assets/js/manageMegaMenu.ts":
/*!*************************************!*\
  !*** ./assets/js/manageMegaMenu.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ manageMegaMenu)\n/* harmony export */ });\nfunction manageMegaMenu() {\n    let menuTriggers = document.querySelectorAll('.main-nav__link.has-children');\n    for (let trigger of menuTriggers) {\n        trigger.addEventListener('click', e => {\n            e.preventDefault();\n            e.currentTarget.classList.toggle('show');\n            document.querySelector('.site-overlay').classList.add('show');\n        });\n    }\n    let megaMenuTriggers = document.querySelectorAll('.mega-menu__link.has-children');\n    let megaMenuContents = document.querySelectorAll('.mega-menu__links');\n    for (let trigger of megaMenuTriggers) {\n        trigger.addEventListener('click', e => {\n            removeClassesMegaMenu(megaMenuContents, megaMenuTriggers);\n            let subMenuId = e.currentTarget.dataset;\n            let subMenu = document.querySelector(\"[data-menu='\" + subMenuId.menu + \"'].mega-menu__links\");\n            if (subMenu) {\n                subMenu.classList.add('show');\n                e.currentTarget.classList.remove('fading');\n                e.currentTarget.classList.add('active');\n            }\n            else {\n                showDefaultMenu();\n            }\n        });\n    }\n    function removeClassesMegaMenu(whereToRemoveShow, whereToRemoveActive) {\n        for (let el of whereToRemoveShow) {\n            if (el.classList.contains('show'))\n                el.classList.add('fading');\n            el.classList.remove('show');\n            setTimeout(() => {\n                el.classList.remove('fading');\n            }, 300);\n        }\n        for (let el of whereToRemoveActive) {\n            el.classList.remove('active');\n        }\n    }\n    function showDefaultMenu() {\n        console.log('Default Menu');\n    }\n}\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/manageMegaMenu.ts?");

/***/ }),

/***/ "./assets/js/manageSiteOverlay.ts":
/*!****************************************!*\
  !*** ./assets/js/manageSiteOverlay.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ manageSiteOverlay)\n/* harmony export */ });\nfunction manageSiteOverlay() {\n    const siteOverlay = document.querySelector('.site-overlay');\n    let info = document.getElementById('overlayInfo');\n    let left, top;\n    siteOverlay.addEventListener('click', e => {\n        let overlay = e.currentTarget;\n        if (e.target.contains(overlay)) {\n            for (let el of document.querySelectorAll('.show')) {\n                el.classList.remove('show');\n            }\n        }\n    });\n    siteOverlay.addEventListener('mousemove', e => {\n        left = e.clientX;\n        top = e.clientY;\n        info.style.opacity = \"1\";\n        info.style.left = left + 'px';\n        info.style.top = top + 'px';\n        console.log(left);\n        console.log(top);\n    });\n    siteOverlay.addEventListener('mouseout', e => {\n        info.style.opacity = \"0\";\n    });\n}\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/manageSiteOverlay.ts?");

/***/ }),

/***/ "./assets/js/theme.ts":
/*!****************************!*\
  !*** ./assets/js/theme.ts ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _manageAccordion__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./manageAccordion */ \"./assets/js/manageAccordion.ts\");\n/* harmony import */ var _manageMegaMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./manageMegaMenu */ \"./assets/js/manageMegaMenu.ts\");\n/* harmony import */ var _manageSiteOverlay__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./manageSiteOverlay */ \"./assets/js/manageSiteOverlay.ts\");\n\n\n\nwindow.addEventListener('DOMContentLoaded', () => {\n    (0,_manageAccordion__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('.prices__table-btn');\n    (0,_manageMegaMenu__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\n    (0,_manageSiteOverlay__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\n});\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/theme.ts?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/theme.ts");
/******/ 	
/******/ })()
;