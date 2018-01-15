 

 
 



// SUBMENU

$('.misPropuestas').mouseover(function() {
  $( ".submenuMisPropuestas" ).stop( true, true ).fadeIn();	
});

$('.misPropuestas').mouseleave(function() {
  $( ".submenuMisPropuestas" ).fadeOut();
});

  
$( function() {
    $('.Desc').characterCountdown({countdownTarget: '.countdown',maxChars:251});
});
 