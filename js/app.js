/* Application Sripts */

$(document).ready(function(){
  $("#loginBox, footer").hide();
  $("body").css("height",0.8832*window.screen.availHeight+"px");
});

//Show login box
$(".starter-template button").click(function(){
  $(".starter-template p, .starter-template button").fadeOut();
  $(".starter-template h1").animate({fontSize:"4em", marginBottom:0},400);
  $("#loginBox").delay(400).fadeIn();
});

//Show etc
$(".glyphicon-th-large").click(function(){
  if ($("footer").css("display") === "none") {
    $(this).css("transform","rotate(-135deg)");  
    $("footer").fadeIn();
  }
  else {
    $(this).css("transform","rotate(0deg)");
    $("footer").fadeOut();
  }
})