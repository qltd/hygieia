 (function($) {

    $('#burger').click(function(){
      $('#mobile-nav-wrap').slideToggle(600, 'easeOutBounce');
    });


    /* Flip Cards */
    $('.flip-container').click(function(){
        $(this).toggleClass('hover');
    });


})(jQuery); // document.ready
