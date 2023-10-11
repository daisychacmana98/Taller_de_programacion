
(function ($) {
    "use strict";
     /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('icofont-eye');
            $(this).find('i').addClass('icofont-eye-blocked');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('icofont-eye');
            $(this).find('i').removeClass('icofont-eye-blocked');
            showPass = 0;
        }
        
    });


})(jQuery);