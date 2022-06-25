$(document).ready(function(){
  $("#pesquise").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabela tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});