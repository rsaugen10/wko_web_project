/*
--- Scroll through pictures
*/
var slideImages = new Array();
slideImages[0] = new Image();
slideImages[0].src = "wko.jpg";
slideImages[1] = new Image();
slideImages[1].src = "Reaching_Hand.jpg";

var step=0;
function slideit(){

 setTimeout(function() {
  $(".center_img").children("img").attr("src", slideImages[step].src).hide().fadeIn();
 });

  if (step<1)
 {
  step++;
 }
 else{
  step=0;
	}
 setTimeout("slideit()",5000);
 };
 
slideit();

/*
--------- END!! ------------
*/


/*
--- side tab animation
*/

$(function(){
$('div.tab_slider').hover(function(){
//animation when hovered
$(this).stop(true, false).animate({
left:0}, 400);
}, function(){
//brings animation back when no hover
$(this).stop(true, false).animate({
left: -107},400); 
});
$('div.menu_slider').hover(function(){
//animation when hovered
$(this).stop(true, false).animate({
left:-100}, 400);
}, function(){
//brings animation back when no hover
$(this).stop(true, false).animate({
left: -230},400); 
});


});




/*
--------- END!! ------------
*/
