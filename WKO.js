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
--- Scroll through pictures
*/





/*
--------- END!! ------------
*/
