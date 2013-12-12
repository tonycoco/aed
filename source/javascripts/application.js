//= require jquery
//= require fastclick
//= require jquery-ui/ui/jquery.ui.core
//= require jquery-ui/ui/jquery.ui.widget
//= require jquery-ui/ui/jquery.ui.tabs
//= require jquery-ui/ui/jquery.ui.accordion
//= require cycle2
//= require_self

$(function() {
  if (typeof FastClick !== 'undefined') {
    FastClick.attach(document.body);
  }
});

$(".tabs").tabs({
  heightStyle: "auto"
});

$(".accordion").accordion({
  icons: null,
  animate: false,
  heightStyle: "content"
});

$("#slider").cycle({
  overlay: "#slider-overlay-text",
  pager: "#slider-pager",
  overlayTemplate: "{{title}}",
  fx: "scrollHorz"
});

$(".menu-icon").click(function(event) {
  event.preventDefault();
  $("body").toggleClass("menu-open");
});

$(document).mouseup(function(event) {
  var $body = $("body");

  if ($body.hasClass("menu-open")) {
    var $menu = $("#menu");

    if (!$menu.is(event.target) && $menu.has(event.target).length === 0) {
      event.preventDefault();
      $body.toggleClass("menu-open");
    }
  }
});

$.ajax({
  type: "GET",
  url: "https://gdata.youtube.com/feeds/users/AEDvideoarchive/uploads?alt=json-in-script&max-results=2",
  dataType:'jsonp',
  success: function(data){
    var html = ['<ul>'];
    $(data.feed.entry).each(function() {
      var url = this.link[0].href;
      var urlThumbnail = this.media$group.media$thumbnail[3].url;
      var description = this.media$group.media$description.$t;
      html.push('<li><a href="' + url + '">');
      html.push('<img src="' + urlThumbnail + '" alt="' + description + '">');
      html.push('</a></li>');
    });
    html.push('</ul>');
    $("#youtube-feed").html(html.join(''));
  }
});

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
