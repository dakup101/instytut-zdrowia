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

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ manageAccordion)\n/* harmony export */ });\nfunction manageAccordion(btnClass) {\r\n    let triggerBtns = document.querySelectorAll(btnClass);\r\n    for (const btn of triggerBtns) {\r\n        btn.addEventListener(\"click\", (e) => {\r\n            e.preventDefault();\r\n            if (e.currentTarget instanceof HTMLElement) {\r\n                let content = e.currentTarget.parentNode.querySelector(\"div[data-tab]\");\r\n                e.currentTarget.classList.toggle(\"active\");\r\n                if (content instanceof HTMLElement) {\r\n                    if (e.currentTarget.classList.contains(\"active\")) {\r\n                        content.style.height = content.scrollHeight.toString() + \"px\";\r\n                    }\r\n                    else {\r\n                        content.style.height = \"0px\";\r\n                    }\r\n                }\r\n            }\r\n        });\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/manageAccordion.ts?");

/***/ }),

/***/ "./assets/js/manageMegaMenu.ts":
/*!*************************************!*\
  !*** ./assets/js/manageMegaMenu.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ manageMegaMenu)\n/* harmony export */ });\nfunction manageMegaMenu() {\r\n    let menuTriggers = document.querySelectorAll('.main-nav__link.has-children');\r\n    for (let trigger of menuTriggers) {\r\n        trigger.addEventListener('click', e => {\r\n            e.preventDefault();\r\n            e.currentTarget.classList.toggle('show');\r\n            document.querySelector('.site-overlay').classList.add('show');\r\n        });\r\n    }\r\n    let megaMenuTriggers = document.querySelectorAll('.mega-menu__link.has-children');\r\n    let megaMenuContents = document.querySelectorAll('.mega-menu__links');\r\n    for (let trigger of megaMenuTriggers) {\r\n        trigger.addEventListener('click', e => {\r\n            removeClassesMegaMenu(megaMenuContents, megaMenuTriggers);\r\n            let subMenuId = e.currentTarget.dataset;\r\n            let subMenu = document.querySelector(\"[data-menu='\" + subMenuId.menu + \"'].mega-menu__links\");\r\n            if (subMenu) {\r\n                subMenu.classList.add('show');\r\n                e.currentTarget.classList.remove('fading');\r\n                e.currentTarget.classList.add('active');\r\n            }\r\n            else {\r\n                showDefaultMenu();\r\n            }\r\n        });\r\n    }\r\n    function removeClassesMegaMenu(whereToRemoveShow, whereToRemoveActive) {\r\n        for (let el of whereToRemoveShow) {\r\n            if (el.classList.contains('show'))\r\n                el.classList.add('fading');\r\n            el.classList.remove('show');\r\n            setTimeout(() => {\r\n                el.classList.remove('fading');\r\n            }, 300);\r\n        }\r\n        for (let el of whereToRemoveActive) {\r\n            el.classList.remove('active');\r\n        }\r\n    }\r\n    function showDefaultMenu() {\r\n        console.log('Default Menu');\r\n    }\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/manageMegaMenu.ts?");

/***/ }),

/***/ "./assets/js/manageSiteOverlay.ts":
/*!****************************************!*\
  !*** ./assets/js/manageSiteOverlay.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ manageSiteOverlay)\n/* harmony export */ });\nfunction manageSiteOverlay() {\r\n    const siteOverlay = document.querySelector('.site-overlay');\r\n    let info = document.getElementById('overlayInfo');\r\n    let left, top;\r\n    siteOverlay.addEventListener('click', e => {\r\n        let overlay = e.currentTarget;\r\n        if (e.target.contains(overlay)) {\r\n            for (let el of document.querySelectorAll('.show')) {\r\n                el.classList.remove('show');\r\n            }\r\n        }\r\n    });\r\n    siteOverlay.addEventListener('mousemove', e => {\r\n        left = e.clientX;\r\n        top = e.clientY;\r\n        info.style.opacity = \"1\";\r\n        info.style.left = left + 'px';\r\n        info.style.top = top + 'px';\r\n        console.log(left);\r\n        console.log(top);\r\n    });\r\n    siteOverlay.addEventListener('mouseout', e => {\r\n        info.style.opacity = \"0\";\r\n    });\r\n}\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/manageSiteOverlay.ts?");

/***/ }),

/***/ "./assets/js/theme.ts":
/*!****************************!*\
  !*** ./assets/js/theme.ts ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _manageAccordion__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./manageAccordion */ \"./assets/js/manageAccordion.ts\");\n/* harmony import */ var _manageMegaMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./manageMegaMenu */ \"./assets/js/manageMegaMenu.ts\");\n/* harmony import */ var _manageSiteOverlay__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./manageSiteOverlay */ \"./assets/js/manageSiteOverlay.ts\");\n\r\n\r\n\r\nwindow.addEventListener('DOMContentLoaded', () => {\r\n    (0,_manageAccordion__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('.prices__table-btn');\r\n    (0,_manageMegaMenu__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n    (0,_manageSiteOverlay__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\r\n});\r\n\n\n//# sourceURL=webpack://instytut-zdrowia/./assets/js/theme.ts?");

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