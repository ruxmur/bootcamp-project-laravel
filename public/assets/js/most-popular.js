/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/blog/js/most-popular.js ***!
  \*******************************************/
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
/******/ })()
;