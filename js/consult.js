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

  $(".btn-group button").not(".btn-toggle").click(function() {
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
  })

  $(".btn-group button.btn-toggle").click(function() {
    $(this).toggleClass("active");
  })
})
