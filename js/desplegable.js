$(document).ready(function () {
  $("#botonDesplegable").click(function () {
    if ($("#menuDesplegable").css("right") == "0px") {
      $("#menuDesplegable").css("right", "-21%");
    } else {
      $("#menuDesplegable").css("right", "0");
    }
  });

  $("#homeSideBar").click(function () {
    $("#menuDesplegable").css("right", "-21%");
  });

  $("#detailsSideBar").click(function () {
    $("#menuDesplegable").css("right", "-21%");
  });

  $("#storySideBar").click(function () {
    $("#menuDesplegable").css("right", "-21%");
  });

  $("#contactSideBar").click(function () {
    $("#menuDesplegable").css("right", "-21%");
  });

  document
    .querySelector(".accordion-toggle")
    .addEventListener("click", function () {
      const content = document.querySelector(".accordion-content");
      const accordion = document.querySelector(".accordion");
      const isVisible = content.style.display === "block";

      content.style.display = isVisible ? "none" : "block";

      accordion.style.right = isVisible ? "-21%" : "0";

      this.textContent = isVisible ? "+INFO" : "-INFO";
    });
});
