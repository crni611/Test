jQuery(document).ready(function($){

/*--------------------------------------------------------------
## Hamburger icon
--------------------------------------------------------------*/

$('.hamburger').click(function(e) {
  e.preventDefault();
  $(this).toggleClass('active');
   $('.header-right').toggleClass('change');
  $('body').toggleClass('fixed');
});

/*--------------------------------------------------------------
## Parallax section
--------------------------------------------------------------*/
if ($(window).width() > 767) {
  function new_parallax(selector, speed, offset) {
    if (selector.length != 0 ) {
        var sectionOffset = selector.offset().top;
        var scrolled = $(window).scrollTop() - (sectionOffset-offset);
        var sectionPosition = "0 " + ((scrolled * speed))  + 'px';
        selector.css('background-position', sectionPosition);
    }
  }
  // Start function
  $(window).scroll(function(){
    new_parallax($('.parallax'), .5, 0);
  });
}

/*--------------------------------------------------------------
## Wow Animated
--------------------------------------------------------------*/
if ($(window).width() > 767) {
  new WOW().init();
}
/*--------------------------------------------------------------
## Equal Height
--------------------------------------------------------------*/
var homeForm = $(".cost .box-wrapper");

var max = Math.max.apply(Math, homeForm.map(function() { 
  return $(this).height(); 
  })
);

homeForm.each(function() {
  var paddingTopBottom= (max - $(this).height());
  $(this).css('padding-bottom', paddingTopBottom +'px');
});

/*--------------------------------------------------------------
## JCF
--------------------------------------------------------------*/
$(function() {
    jcf.replaceAll();
});

/*--------------------------------------------------------------
## FORM
--------------------------------------------------------------*/
$('input:radio[name="Objekt"]').change(
  function(){
    if ($(this).is(':checked') && $(this).val() == 'Befristet') {
        $('.calendar-holder').addClass('calendar-small');
    } else {
      $('.calendar-holder').removeClass('calendar-small');
    }
});

//Percent calculator
$("#percent").keyup(function(){
  var percCalc = $('.percent-hidden');
  total = $("#percent").val() * percCalc.html() / 100;
  $("#price").html(total);
});

$("#range").on("input change", function() {
   
    var x = document.getElementById("range").value;
    var nbrBrt = ((x * 10) - 10)/5;
    var priceBrt = nbrBrt * 100;
   
    
    document.getElementById('priceBrt').innerHTML= 400 + priceBrt;
    document.getElementById('roomsOutputId').innerHTML= x;
});
/*--------------------------------------------------------------
## Counter
--------------------------------------------------------------*/
$('.count').counterUp({
  delay: 30,
  time: 2000
});
/*--------------------------------------------------------------
## END
--------------------------------------------------------------*/
});
 