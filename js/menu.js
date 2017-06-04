$(document).ready(function(){
  $("#open").click(function(e){
    e.preventDefault();
    $("nav").show(100);
    $("#close").show(100);
    $("#open").hide(100);
  });

  $("#close").click(function(e){
    e.preventDefault();
    $("nav").hide(100);
    $("#open").show(100);
    $("close").hide(100);
  });
});
