/*$(window).load(function() {
	$(".loader").fadeOut("slow");
}) 
*/
$(document).ready(function() {
     'use strict'
      $('.parallax').parallax();
      $(".button-collapse").sideNav();
      $('.slider').slider({full_width: true});
      $('.modal-trigger').leanModal({
           dismissible: true,
           opacity: 0, // Opacity of modal background
       });
       $('#contact-button').onclick(function(){
           location.href = "http://www.woodlandagriculture.com/contact.html";
       })
    });
 