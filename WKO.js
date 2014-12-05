/*
--- Scroll through pictures
*/

var step=0;
function slideit(){

var done = false;
while (done == false) {
	var slideImages = new Array();
	for(var i = 0; i < 23; i++) {
		slideImages[i] = new Image();
		slideImages[i].src = "WKO-images/home-visit-pictures/" + i + ".jpg";
			if (i == 22) {
					done = true;
				}
		}	
}

 setTimeout(function() {
  $(".center_img").children("img").attr("src", slideImages[step].src).hide().fadeIn();
 });
  if (step<22)
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


/*
--------- News -------------
*/

 /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'wko'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
		
/*
--------- End -------------
*/