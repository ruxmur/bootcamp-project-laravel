/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/blog/js/create-article.js":
/*!*********************************************!*\
  !*** ./resources/blog/js/create-article.js ***!
  \*********************************************/
/***/ (() => {

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var Article = /*#__PURE__*/_createClass(function Article(title, description, category, image) {
  _classCallCheck(this, Article);

  _defineProperty(this, "title", void 0);

  _defineProperty(this, "description", void 0);

  _defineProperty(this, "category", void 0);

  _defineProperty(this, "image", void 0);

  this.title = title;
  this.description = description;
  this.category = category;
  this.image = image;
});
/** @type {HTMLFontElement} createArticleForm */


var createArticleForm = document.getElementById('createArticleForm');

if (createArticleForm) {
  /** @type {HTMLInputElement} titleInput */
  var titleInput = createArticleForm.querySelector('#titleInput');
  /** @type {HTMLTextAreaElement} descriptionInput */

  var descriptionInput = createArticleForm.querySelector('#descriptionInput');
  /** @type {HTMLSelectElement} categoryInput */

  var categoryInput = createArticleForm.querySelector('#categoryInput');
  /** @type {HTMLInputElement} imageInput */

  var imageInput = createArticleForm.querySelector('#imageInput');
  /** @type {HTMLImageElement} imagePreview */

  var imagePreview = createArticleForm.querySelector('#imagePreview');

  imageInput.onchange = function (event) {
    var file = imageInput.files[0];

    if (typeof file === 'undefined') {
      imagePreview.src = '';
      imagePreview.hidden = true;
    } else {
      imagePreview.src = URL.createObjectURL(file);
      imagePreview.hidden = false;
    }
  };

  createArticleForm.onsubmit = function (event) {
    event.preventDefault();
    var article = new Article(titleInput.value, descriptionInput.value, categoryInput.value, imageInput.files[0]);
    var formData = new FormData();
    formData.append('title', article.title);
    formData.append('description', article.description);
    formData.append('category', article.category);
    console.log(article.category);
    formData.append('image', article.image);

    function cleanUpCreateForm() {
      titleInput.value = '';
      descriptionInput.value = '';
      categoryInput.value = null;
      imageInput.value = null;
      imagePreview.src = '';
      imagePreview.hidden = true;
    }

    axios.post('/api/articles', formData).then(function (response) {
      console.log(response);
      alert('New article was created with success');
      cleanUpCreateForm();
    })["catch"](function (error) {
      console.error(error.response.data);
    });
  };
}

/***/ }),

/***/ "./resources/blog/js/most-popular.js":
/*!*******************************************!*\
  !*** ./resources/blog/js/most-popular.js ***!
  \*******************************************/
/***/ (() => {

if (document.querySelector('[popular-article-template]')) {
  var popularArticleTemplate = document.querySelector('[popular-article-template]');
  var listOfArticles = document.querySelector('[articles-list]');
  axios.get('/api/articles/most-popular').then(function (_ref) {
    var data = _ref.data;
    console.log(data);
    data.forEach(function (articleItem) {
      var article = popularArticleTemplate.content.cloneNode(true).children[0];
      article.querySelector('[data-title]').textContent = articleItem.title;
      article.querySelector('[data-title]').addEventListener('click', function () {
        location.href = 'blog/article/' + articleItem.id;
      }, false);
      article.querySelector('[data-excerpt]').textContent = articleItem.excerpt;
      article.children[0].style.backgroundImage = "url(storage/" + articleItem.image + ")";
      var counterElement = article.querySelector('[data-views-counter]');
      counterElement.innerHTML = "\n            ".concat(articleItem.view_count, "\n            <span class=\"visually-hidden\">unread messages</span>");

      if (!articleItem.view_count) {
        counterElement.hidden = true;
      }

      listOfArticles.append(article);
    });
  });
}

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
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!***********************************!*\
  !*** ./resources/blog/js/blog.js ***!
  \***********************************/
__webpack_require__(/*! ./most-popular */ "./resources/blog/js/most-popular.js");

__webpack_require__(/*! ./create-article */ "./resources/blog/js/create-article.js");
})();

/******/ })()
;