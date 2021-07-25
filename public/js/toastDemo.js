(function($) {
  tost_info = function(h,t,p,i) {
    'use strict';
    resetToastPosition();
    $.toast({
      heading: String(h),
      text: String(t),
      position: String(p),
      icon: String(i),
      stack: false,
      loaderBg: '#f96868'
    })
  }
  resetToastPosition = function() {
    $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
    $(".jq-toast-wrap").css({
      "top": "",
      "left": "",
      "bottom": "",
      "right": ""
    }); //to remove previous position style
  }
})(jQuery);