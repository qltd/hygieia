$(document).ready(function(){

    $('input[type="text"], input[type="email"], input[type="tel"], textarea').focus(function(){
      if($(this).val() == $(this).prop('defaultValue'))
      { $(this).val(''); }
    });

    $('input[type="text"], input[type="email"], input[type="tel"], textarea').blur(function(){
      if($(this).val() == '')
      {$(this).val($(this).prop('defaultValue'));}
    });

    $('#burger').click(function(){
      $('#mobile-nav-wrap').slideToggle(600, 'easeOutBounce');
    });


    $('.more-button').click(function(){
      $('.collapsed').slideToggle(700, 'easeOutBack');
      $(this).toggleClass('less');
      return false;
    })


  /* Hero Unit */
  $('.bxslider').bxSlider({
    auto:true,
    pager:false,
    useCSS: false,
    easing: 'easeInOutQuart',
    controls: false,
    speed: 1000,
    pause: 7000
  });




}); // document.ready
