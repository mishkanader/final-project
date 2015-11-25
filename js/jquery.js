
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

/* Login Page */
$(function() {

  $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});