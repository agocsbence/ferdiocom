$(document).ready(function(){

  var logos = $('.clients .logos-container');
  var fadeTime = $('.clients').attr('data-fade-time');  // You can set fadeing-transition time;
 
  logos.each(function() {
    var next = 1;      // fixed, please do not modfy;
    var current = 0;   // fixed, please do not modfy;
    var imgs = $(this).find('img');
    var imgNum = imgs.length;    // How many pictures do you have
    var interval = 10000; // You can set single picture show time;
    var delay = (parseInt($(this).find('.data-interval').text()))*1000;

    setTimeout(function(){
      nextFadeIn();
    }, delay);

    function nextFadeIn(){
    //make image fade in and fade out at one time, without splash vsual;
      imgs.eq(current).delay(interval).fadeOut(fadeTime)
      .end().eq(next).delay(interval).hide().fadeIn(fadeTime, nextFadeIn);
          
      // if You have 5 images, then (eq) range is 0~4 
      // so we should reset to 0 when value > 4; 
      if(next < imgNum-1){ next++; } else { next = 0;}
      if(current < imgNum-1){ current++; } else { current = 0; }
    };

  });

});