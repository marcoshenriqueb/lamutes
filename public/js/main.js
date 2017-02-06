// <!-- ================================================== -->
// <!-- =============== START BREACRUMB OPTIONS ================ -->
// <!-- ================================================== -->

jQuery(function(){
    "use strict";
    var breadcrumbH = jQuery('.breadcrumb').outerHeight();
    if (jQuery(window).width() >= 1200){
      jQuery('.breadcrumb-video-content').each(function(){
        breadcrumbH = (jQuery('.breadcrumb').outerHeight() - 250);
      });
    };
    jQuery('.breadcrumb-fullscreen-parent').after('<div class="before-affix-breadcrumb"></div>');
    var wH = jQuery(window).height();
		jQuery('.starTitle > *').each(function(){
      var fadeStart= 0
          ,fadeUntil= 400
          ,fading = jQuery(this);
      jQuery(window).bind('scroll', function(){
          var offset = jQuery(document).scrollTop()
              ,opacity=0
          ;
          if( offset<=fadeStart ){
              opacity=1;
          }else if( offset<=fadeUntil ){
              opacity=1-offset/fadeUntil;
          }
          fading.css('opacity',opacity);
      });
    });
    function affixPhoneMenu() {
      jQuery('header.header').addClass('phone-menu-bg');
			jQuery('.phone-menu-bg').affix({
          offset: {
            top: 50
          }
      });
    };
    function unAffixPhoneMenu() {
      jQuery('header.header').removeClass('phone-menu-bg');
    };
    // if (jQuery(window).width() <= 768){
    //       affixPhoneMenu();
    //     } else {
    //      jQuery(window).resize(function(){
    //       if (jQuery(window).width() <= 768){
    //         affixPhoneMenu();
    //       }
    //   });
    // };
    // if (jQuery(window).width() >= 768){
    //       unAffixPhoneMenu();
    //     } else {
    //      jQuery(window).resize(function(){
    //       if (jQuery(window).width() >= 768){
    //         unAffixPhoneMenu();
    //       }
    //   });
    // };
    jQuery('.breadcrumb-fullscreen-parent').affix({
        offset: {
          top: function () {
            return (this.top = (breadcrumbH - 75))
          }
        }
    });

    jQuery('header.header').affix({
        offset: {
          top: function () {
            return (this.top = (breadcrumbH - 120))
          }
        }
    });
    jQuery('header.header').on('affix.bs.affix', function () {
			jQuery('.project-single').addClass('affix');
		});
		jQuery('header.header').on('affix-top.bs.affix', function () {
			jQuery('.project-single').removeClass('affix');
		});

    function fullScreenBreadcrumb() {
        jQuery('.breadcrumb-fullscreen-parent').on('affix-top.bs.affix', function () {
            jQuery('.before-affix-breadcrumb').css('height',0);
            if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
              jQuery(this).css('bottom',0);
            };
        });
        jQuery('.breadcrumb-fullscreen-parent').on('affix.bs.affix', function () {
            jQuery('.before-affix-breadcrumb').css('height',breadcrumbH);
            if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
              jQuery(this).css('bottom',wH - 69);
            };
        });
    };

    function splitEqual() {

        jQuery('.split-equal').each(function(){

          var bigImageH = jQuery(this).find('.big-image').outerHeight();

          jQuery('.padding-content > div').css('height', bigImageH - 160 );

        });

    };

    fullScreenBreadcrumb();

    jQuery(window).resize(function(){

        fullScreenBreadcrumb();

        splitEqual();

    });

});

// <!-- ================================================== -->
// <!-- =============== END BREACRUMB OPTIONS ================ -->
// <!-- ================================================== -->
//
// <!-- ================================================== -->
// <!-- =============== START STARTER JS ================ -->
// <!-- ================================================== -->

jQuery(document).ready(function(){
  "use strict";
  // FitVides Option
  jQuery("html").fitVids({ customSelector: "iframe"});
  // LightBox Options
  jQuery(".attachment").find('a > img:not(.attachment-thumbnail)').parent().attr('rel','gallery').fancybox({
    fitToView: true,
    autoSize :  true,
    margin : 30,
    autoScale : true,
    width : '100%',
    height : '100%',
    showNavArrows: true,
    showCloseButton: true,
    helpers : {
      media : {}
    }
  });
  //Page Loader
  jQuery('.page-loader').delay(800).fadeOut('slow');

  jQuery(".lightbox").attr('rel','gallery').fancybox({
    fitToView: true,
    autoSize :  true,
    margin : 30,
    autoScale : true,
    width : '100%',
    height : '100%',
    showNavArrows: true,
    showCloseButton: true,
    helpers : {
      media : {}
    }
  });

  /***********************************************************************************************/
  /* MENU */
  /***********************************************************************************************/
  jQuery('.open-menu').on('click', function(){
    jQuery(this).toggleClass('active');
    jQuery('.menu-fixed-container').toggleClass('open');
  });
  jQuery('.x-filter').on('click',function(){
    jQuery('.open-menu').toggleClass('active');
    jQuery('.menu-fixed-container').toggleClass('open');
  });
  jQuery('.menu-fixed-container > nav > ul > li > a').on('click',function(){
        jQuery(this).parent().siblings().toggleClass('no-hovered');
        jQuery(this).parent().toggleClass('click');
				jQuery(this).parent().siblings().removeClass('click');
				if (jQuery(this).siblings().size() == 0) {
					jQuery('.open-menu').toggleClass('active');
			    jQuery('.menu-fixed-container').toggleClass('open');
				}
    });
  jQuery('.menu-fixed-container > nav > ul > li > .sub-menu').parent().addClass('hover-sub-menu');
  jQuery('.menu-fixed-container > nav > ul > li  > .sub-menu').on('click',function(){
      jQuery(this).parent().toggleClass('hovered-sub-menu ');
  });
  jQuery('.menu-fixed-container nav ul li .sub-menu').parent().find('> a').on('click', function(e){
    e.preventDefault();
  });
/***********************************************************************************************/
/* END MENU */
/***********************************************************************************************/

/***********************************************************************************************/
  /* COUNTER */
  /***********************************************************************************************/
  if ( $( '.sm-countdown' ).length > 0 ) {
      $( '.sm-countdown' ).each( function() {
        var $this = $( this );
        var mode = $this.hasClass( 'sm-style1' ) ? 'val' : 'text';
        $this.ccountdown( $this.data( 'date' ), mode );
      } );
    }
  /***********************************************************************************************/
  /* END COUNTER */
  /***********************************************************************************************/

    /***********************************************************************************************/
    /* JPLAYER */
    /***********************************************************************************************/
    jQuery('.trak-item audio').each(function(){
        var seconds = jQuery(this)[0].duration;
        var duration = moment.duration(seconds, "seconds");
        var time = "";
        var hours = duration.hours();
        if (hours > 0) { time = hours + ":" ; }
        time = time + duration.minutes() + ":" + duration.seconds();
        jQuery(this).parent().find('.trak-duration').text(time);
    });
    jQuery('.jplayerButton').on('click', function(){
      jQuery(this).toggleClass('active');
      jQuery('.playlist-wrapper').fadeToggle('open');
      jQuery('body').toggleClass('opacityPlaylist');
    });
    /***********************************************************************************************/
    /* END JPLAYER */
    /***********************************************************************************************/
});

// <!-- ================================================== -->
// <!-- =============== END STARTER JS ================ -->
// <!-- ================================================== -->
