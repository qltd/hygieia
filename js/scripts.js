 (function($) {

    $('#burger').click(function(){
      $('#mobile-nav-wrap').slideToggle(600, 'easeOutBounce');
    });


    /* Flip Cards */
    $('.flip-container').click(function(){
        $(this).toggleClass('hover');
    });


$('video').on('ended', function () {
	console.log('reloading');
  this.load();
  this.play();
});


})(jQuery); // document.ready
