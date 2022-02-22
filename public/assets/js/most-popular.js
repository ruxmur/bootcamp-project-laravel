/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/most-popular.js ***!
  \**************************************/
var popularArticleTemplate = document.querySelector('[popular-article-template');
var listOfArticles = document.querySelector('[articles-list]');
axios.get('/api/articles/most-popular').then(function (_ref) {
  var data = _ref.data;
  data.forEach(function (articleItem) {
    var article = popularArticleTemplate.textContent.cloneNode(true).children[0];
    article.querySelector('[data-title').textContent = articleItem.title;
    article.querySelector('[data-excerpt').textContent = articleItem.excerpt;
    var counterElement = article.querySelector('[data-views-counter]');
    counterElement.innerHtml = "\n        ".concat(articleItem.view_count, " \n        <span class=\"visually-hidden\">unread message</span>\n        ");

    if (!articleItem.view_count) {
      counterElement.hidden = true;
    }

    listOfArticles.append(article);
  });
});
/******/ })()
;