$(function() {
  $("#moreContentBtn").click(function(event) {
    if ($("#moreMenu").css("display") == "none") {
      $("#moreMenu").show();
    } else {
      $("#moreMenu").hide();
    }
    event.stopPropagation();
  });
  $("body").click(function() {
    $("#moreMenu").hide();
  });
});
