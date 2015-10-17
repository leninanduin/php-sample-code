var w_size;
var animation_settings = {
  'big': {
    'open':{"margin-right": '+=381'},
    'close':{"margin-right": '-=381'}
  },
  'small': {
    'open':{"bottom": '+='+jQuery(window).height()},
    'close':{"bottom": '-='+jQuery(window).height()},
  }
}

function toggleHelloTab() {
  if (!w_size) {
    getWindowSize();
  }

  if (jQuery('#hello-btn').hasClass('expanded')) {
    if (w_size == 'small') {
      jQuery('#hello-btn > a.handle').fadeIn();
      jQuery('body').css('overflow', 'initial')
    }

    jQuery('#hello-btn-overlay').delay('100').fadeOut();
    jQuery('#hello-btn')
    .removeClass('expanded')
    .animate( animation_settings[w_size].close , 300);
  } else {
    jQuery('#hello-btn-overlay').fadeIn();
    jQuery('#hello-btn')
    .delay('100')
    .addClass('expanded')
    .animate(animation_settings[w_size].open, 300);

    if (w_size == 'small') {
      jQuery('#hello-btn > a.handle').fadeOut();
      jQuery('body').css('overflow', 'hidden');
    }
  }
}

function getWindowSize() {
  var tmp_size = jQuery(document).innerWidth();
  if (tmp_size > 991) {
    w_size = 'big';
  } else {
    w_size = 'small';
  }
}

jQuery(function(){
  getWindowSize();
  jQuery('#hello-btn > a.handle, #hello-btn-overlay, #hello-btn a.close').click(function(e) {
    e.preventDefault();
    toggleHelloTab();
  });

  jQuery("#hello-btn [go-to]").click(function(e) {
    e.preventDefault();
    var target = jQuery(this).attr('go-to');
    jQuery('#hello-btn .content .row').hide();
    jQuery('#hello-btn .content .' + target).show();
  });


  jQuery(document).keyup(function(e) {
    if (e.keyCode == 27 && jQuery('#hello-btn').hasClass('expanded')) { // escape key maps to keycode `27`
      toggleHelloTab();
    }
  });

  jQuery(window).resize(function() {
    getWindowSize();
  });
});