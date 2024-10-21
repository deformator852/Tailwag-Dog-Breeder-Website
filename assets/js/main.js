$(document).ready(function () {
  $(".menu-item-has-children").hover(
    function () {
      $(".sub-menu").fadeIn(400);
    },
    function () {
      $(".sub-menu").fadeOut(400);
    }
  );
  $(".ready-to-adopt__content-wrapper").fadeIn(1000);
});
