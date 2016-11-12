$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 680) {
      $(this).addClass("slide");
    }
  });
});

$(window).scroll(function() {
  $(".slideanim_right").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 550) {
      $(this).addClass("slide_right");
    }
  });
});

$(window).scroll(function() {
  $(".slideanim_left").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 550) {
      $(this).addClass("slide_left");
    }
  });
});