$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


function toSearch(){

  var searching = document.getElementById('post').value;

  if (searching == ' ' || searching == '') {
    document.getElementById("post").style.border = "1px solid red";
    document.getElementById("buttonId").style.border = "1px solid red";
    return false;
  }else {
    document.getElementById("post").style.border = "1px solid black";
    document.getElementById("buttonId").style.border = "1px solid black";
    return true;
  }
}
