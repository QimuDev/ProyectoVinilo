$(document).ready(function () {

  $("#addDisc").click(function () {

    $(".formContainer").toggleClass("visible");
    $(".addVinyl").toggleClass("visible");

    const isRotated = $(".addDisc").hasClass("rotated");
    if (isRotated) {
      $(".addDisc").removeClass("rotated").css("transform", "rotate(0deg)").css("color", ""); 
    } else {
      $(".addDisc").addClass("rotated").css("transform", "rotate(135deg)").css("color", "bisque"); 
    }
  });
});
