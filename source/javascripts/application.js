//= require jquery/jquery
//= require jquery-ui/ui/jquery.ui.core
//= require jquery-ui/ui/jquery.ui.widget
//= require jquery-ui/ui/jquery.ui.tabs
//= require jquery-ui/ui/jquery.ui.accordion
//= require cycle2
//= require_self

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
  overlayTemplate: '<a href="{{url}}">{{title}}</a>',
  fx: "scrollHorz"
});

$(".nav .top-links a").on("mouseover", function(event) {
  var $target = $(event.target).closest("a");
  var $image = $target.siblings(".submenu-image");
  var content = $target.siblings(".submenu-items").first().html();

  $(".nav .subnav > .inner").removeClass("hovering");
  $(".nav .top-links a").removeClass("hovering");
  $(".nav .subnav > .inner .subnav-image").remove();
  $(".nav .subnav > .inner ul").remove();

  $(this).addClass("hovering");
  $(".nav .subnav").addClass("hovering");

  if ($image.length > 0) {
    $(".nav .subnav > .inner").append('<div class="subnav-image"></div>');
    $(".nav .subnav > .inner .subnav-image").html($image.first().html());
  }
  $(".nav .subnav > .inner").append("<ul></ul>");
  $(".nav .subnav > .inner ul").html(content);
});

$(".nav").on("mouseleave", function() {
  $(".nav .subnav").removeClass("hovering");
  $(".nav .top-links a").removeClass("hovering");
});

$(".menu-icon").click(function(event) {
  event.preventDefault();
  $("body").toggleClass("menu-active");
});

$(document).mouseup(function(event) {
  var $body = $("body");

  if ($body.hasClass("menu-active")) {
    var $menu = $("#menu");

    if (!$menu.is(event.target) && $menu.has(event.target).length === 0) {
      event.preventDefault();
      $body.toggleClass("menu-active");
    }
  }
});

$.ajax({
  type: "GET",
  url: "https://gdata.youtube.com/feeds/users/AEDvideoarchive/uploads?alt=json-in-script&max-results=2",
  dataType: "jsonp",
  success: function(data){
    var html = ['<ul>'];
    $(data.feed.entry).each(function() {
      var url = this.link[0].href;
      var urlThumbnail = this.media$group.media$thumbnail[3].url;
      var description = this.media$group.media$description.$t;
      html.push('<li><a href="' + url + '">');
      html.push('<img src="' + urlThumbnail + '" alt="' + description + '">');
      html.push("</a></li>");
    });
    html.push("</ul>");
    $("#youtube-feed").html(html.join(""));
  }
});

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: "en",
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, "google_translate_element");
}
