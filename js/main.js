/* global $, alert, console */



$(function () {

    'use strict';

    var  userError = true,
         emailError = true,
         msgError  = true;

  $('.username').blur(function () {

    if ($(this).val().length < 4){

      $(this).css({"border-color": "#F00",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeIn(200);

       $(this).parent().find('.asterisx').fadeIn(100);

       userError = true;

    }
    else {
      $(this).css({"border-color": "#080",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeOut(200);

       $(this).parent().find('.asterisx').fadeOut(100);

       userError = false;

    }
  });




  $('.email').blur(function () {

    if ($(this).val() === ''){

      $(this).css({"border-color": "#F00",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeIn(200);

       $(this).parent().find('.asterisx').fadeIn(100);

       emailError = true;


    }
    else {
      $(this).css({"border-color": "#080",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeOut(200);

       $(this).parent().find('.asterisx').fadeOut(100);

       emailError = false;

    }

  });


  $('.message').blur(function () {

    if ($(this).val().length < 11){

      $(this).css({"border-color": "#F00",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeIn(200);

       $(this).parent().find('.asterisx').fadeIn(100);

       msgError = true;


    }
    else {
      $(this).css({"border-color": "#080",
              "border-weight":"1px",
              "border-style":"solid"});

       $(this).parent().find('.custom-alert').fadeOut(200);

       $(this).parent().find('.asterisx').fadeOut(100);

       msgError = false;

    }

  });

  $(".contact-form").submit(function(e){

    if (userError === true || emailError === true || msgError === true){

      e.preventDefault();

      $('.username, .email, .message').blur();

    }

});

});
