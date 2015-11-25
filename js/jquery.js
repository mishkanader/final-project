
$(document).ready(function(){
  $("#hide").click(function() {
    $("#play").hide();
  });

  $("#show").click(function() {
    $("#play").show();
  });

  $("#btn1").click(function() {
    $("#toggle").toggle();
  });

  $("#btn2").click(function(){
    $("#div2").load("test.txt");
  });

});