$(document).ready(function () {
  $(".menu-item-has-children").hover(
    function () {
      $(".sub-menu").fadeIn(400);
    },
    function () {
      $(".sub-menu").fadeOut(400);
    }
  );
});
