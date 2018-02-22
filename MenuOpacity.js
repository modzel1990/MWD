
    $(window).scroll(function() {
     if($(this).scrollTop() > 70)
      {
       $('.navbar').addClass('op');
      }else{
        $('.navbar').removeClass('op');
    }
});
