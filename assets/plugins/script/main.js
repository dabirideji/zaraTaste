// Filter Function
$(document).ready(function () {
  $(".filter-item").click(function () {
    const value = $(this).attr("data-filter");
    if (value == "all") {
      $(".product-box").show("1000");
    } else {
      $(".product-box")
        .not("." + value)
        .hide("1000");
      $(".product-box")
        .filter("." + value)
        .show("1000");
    }
  });

  // Add active to btn
  $(".filter-item").click(function () {
    $(this)
      .addClass("bg-rose2 text-rose1")
      .siblings()
      .removeClass("bg-rose2 text-rose1");
  });
});
