$(document).ready(function () {
    $("#view-pass").click(function(){
    var type = $("#PASSWORD").attr("type");
    if (type == 'password') {
      $("#icon-view-pass").text('visibility');
      $("#PASSWORD").attr("type","text");
    }else{
      $("#icon-view-pass").text('visibility_off');
      $("#PASSWORD").attr("type","password");
    }
  });
});