function volumeToggle(button) {
  var muted = $(".previewVideo").prop("muted");
  $(".previewVideo").prop("muted", !muted);

  $(button)
    .find("[data-fa-i2svg]")
    .toggleClass("fa-solid fa-volume-xmark")
    .toggleClass("fa-solid fa-volume-high");
}

function previewEnded() {
  $(".previewVideo").toggle();
  $(".previewImage").toggle();
}
