(function($) {
  'use strict';
  var form = $("#example-form");
  form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function(event, currentIndex, newIndex) {
      if(stepNum == 0){
        var fn = $('input[name="firstname"]').val();
        if(fn == ''||fn == ' ') return 0;
        var ln = $('input[name="lastname"]').val();
        if(ln == ''||ln == ' ') return 0;
        var ag = $('input[name="age"]').val();
        if(ag == ''||ag == ' ') return 0;
        var gn = $('input[name="gender"]').val();
        if(gn == ''||gn == ' ') return 0;
        var br = $('input[name="birth"]').val();
        if(br == ''||br == ' ') return 0;
      }else if(stepNum == currentIndex && newIndex > stepNum){
        var pn = $('input[name="phone"]').val();
        if(pn == ''||pn == ' ') return 0;
        var ct = $('input[name="city"]').val();
        if(ct == ''||ct == ' ') return 0;
        var st = $('input[name="state"]').val();
        if(st == ''||st == ' ') return 0;
        var zp = $('input[name="zip"]').val();
        if(zp == ''||zp == ' ') return 0;
        var cn = $('input[name="country"]').val();
        if(cn == ''||cn == ' ') return 0;
      }else if(stepNum == 3 && newIndex > stepNum){
        var em = $('input[name="email"]').val();
        if(em == ''||em == ' ') return 0;
        var ps = $('input[name="password"]').val();
        if(ps == ''||ps == ' ') return 0;
        var psc = $('input[name="password_confirmation"]').val();
        if(psc == ''||psc == ' ') return 0;
      }
      form.val({
        ignore: [":disabled", ":hidden"]
      })
      stepNum = newIndex;
      return form.val();
    },
    onFinishing: function(event, currentIndex) {
      form.val({
        ignore: [':disabled']
      })
      return form.val();
    },
    onFinished: function(event, currentIndex) {
      $('#form_submit').click();
    }
  });
})(jQuery);