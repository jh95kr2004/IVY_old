$(function() {
  $("#curricularButton").click(function() {
    $("#extra-curricularInput").css("display", "none");
    $("#backgroundInput").css("display", "none");
    $("#curricularInput").css("display", "");
    $("#extra-curricularButton").removeClass("active");
    $("#backgroundButton").removeClass("active");
    $(this).addClass("active");
  });

  $("#extra-curricularButton").click(function() {
    $("#curricularInput").css("display", "none");
    $("#backgroundInput").css("display", "none");
    $("#extra-curricularInput").css("display", "");
    $("#curricularButton").removeClass("active");
    $("#backgroundButton").removeClass("active");
    $(this).addClass("active");
  });

  $("#backgroundButton").click(function() {
    $("#curricularInput").css("display", "none");
    $("#extra-curricularInput").css("display", "none");
    $("#backgroundInput").css("display", "");
    $("#curricularButton").removeClass("active");
    $("#extra-curricularButton").removeClass("active");
    $(this).addClass("active");
  });

  $(".form-control").focus(function() {
    $(this).prev("label").css("color", "#000");
  })

  $(".form-control").focusout(function() {
    if(!($(this).is(":valid"))) $(this).prev("label").css("color", "#CECECE");
  })

  $(".btn-group button").not(".btn-toggle").click(function() {
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
  })

  $(".btn-group button.btn-toggle").click(function() {
    $(this).toggleClass("active");
  })
})
