$(document).ready(function () {

  /* Navbar scroll function */

  $(window).on({
    'scroll': function (e) {

      var containerTopHeight = $('.header-content').height();
      var windowHeight = $(window).height();
      var fadeInHeight = parseFloat($(this).scrollTop()) + parseFloat(windowHeight) - 50;

      if (fadeInHeight >= containerTopHeight && containerTopHeight !== 0) {
        $('.content-main').fadeIn(1500);
      }

      if ($(this).scrollTop() > 40) {
        $('.navbar-brand').show();
        $('.navbar').addClass('fixed-top navbar-ghp');
      } else {
        $('.navbar-brand').hide();
        $('.navbar').removeClass('fixed-top navbar-ghp');
      }
    }
  });


  $('.mini-blog-article').click(function () {
    $('.blog-overlay').addClass('show');
    $('.blog-detail').addClass('show');
  });

  $('.blog-detail-closing').click(function () {
    $('.blog-overlay').removeClass('show');
    $('.blog-detail').removeClass('show');
   });

   $('.sidebar-title').click(function() {
       //$(this).parent().toggleClass('active');

       //$('div[class^="sidebar-item"]:not(.active)').

       $(this).next().toggleClass('active');
       $(this).next().toggleClass('fade-in');

       if ($(this).parent().next().children().hasClass('active')) {
         $(this).parent().next().children('.sidebar-content').removeClass('active');
         $(this).parent().next().children('.sidebar-content').removeClass('fade-in');
       }

     if ($(this).parent().prev().children().hasClass('active')) {
       $(this).parent().prev().children('.sidebar-content').removeClass('active');
       $(this).parent().prev().children('.sidebar-content').removeClass('fade-in');
     }
   });

  $('.firstWord').each(function () {
    var title = $(this).text().split(' ');
    $(this).html('<span class="word-highlight">' + title.shift() + ' </span>' + title.join(' '));
  });

  $('#footer-partner-carousel').flickity({
    autoPlay: true
  });

});
