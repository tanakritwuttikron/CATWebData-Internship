$("#search-id").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $(".live-search-list").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});

$("#search-id-odf").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $(".live-search-list-odf").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});