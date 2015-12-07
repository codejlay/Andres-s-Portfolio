jQuery(function ($)  {
  /*  Noise Background */
  $('body').noisy({
    'intensity' : 0.15,
    'size' : 200,
    'opacity' : 0.1,
    'fallback' : '',
    'monochrome' : false
}).css('background-color', '#ffffff');

  /* Sticky Navbar */
  var $window = $(window),
    $mainNav = $('.main-navigation'), // nav wrapper element
    $mastHead = $('.site-header'),
    $displayBranding = $('.display-branding'),// site header element
    $homeBranding = $('.home-site-branding'),
    headerHeightOffset = $mastHead.height() - $mainNav.height(),
    stickyNavTop = $mainNav.scrollTop() + headerHeightOffset;

// A helper function to check whether nav should be fixed
  var stickyNav = function () {
      var scrollTop = $window.scrollTop();
      if ( scrollTop > stickyNavTop) {
          $displayBranding.css('visibility','visible');
          $homeBranding.hide();
          if ( $('body').hasClass('logged-in') ) {
              $mainNav.addClass('under-admin-bar fixed-nav');
          } else {
              $mainNav.addClass('fixed-nav');
          }
      } else {
          $homeBranding.show();
          $displayBranding.css('visibility','hidden');
          if ( $('body').hasClass('logged-in') ) {
              $mainNav.removeClass('under-admin-bar fixed-nav');
          } else {
              $mainNav.removeClass('fixed-nav');
          }
      }
  };

  // Initialize nav classes...
  stickyNav();

  // Then re-run on scroll
  $window.scroll(function () {
      stickyNav();
  });


  /* About Page */

  var circle = $('.circle'),
  skill = $('.skill-name'),
  circleBox = $('.circle-box'),
  checkPoint = $('.skill-list'),
  inited = false;

  skill.hide();
  circleBox.hide();

  checkPoint.appear({ force_process: true });
  checkPoint.on('appear', function() {
    if (!inited) {
      circle.circleProgress({
        startAngle: -Math.PI/2,
        size:120,
        animation: {duration: 4000},
        fill: { color: '#445FA9' },
        emptyFill: '#BDBEC6'
      });

      skill.show();
      circleBox.show();
      inited = true;
    }
  });
})
