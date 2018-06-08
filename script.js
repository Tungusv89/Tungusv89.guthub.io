//Back to top
var $btnTop = $('.btn-top');
$(window).on("scroll",function (){
	if($(window).scrollTop() >= 400){
		$btnTop.fadeIn();
	} else{
		$btnTop.fadeOut();
	}
});

$btnTop.on("click", function () {
	$("html,body").animate({scrollTop:0}, 500)
});
// Скрол к якорям
$(document).ready(function() {
   $("a.scrollto").click(function () {
   	elementClick = $(this).attr("href")
   	destination = $(elementClick).offset().top;
   	$("html:not(:animated),body:not(:animated)").animate({scrollTop:destination}, 1000);
   })
     return false;
   });
$(document).ready(function() {
  $('.social').css('position', 'absolute');
  $('.social').css('left', '214px');
  $('.social').css('top', '15px');
 });
