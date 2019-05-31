function commentario(){

  var comment = document.getElementById('comment').value;

  if (comment == ' ' || comment == '') {
    document.getElementById("comment").style.border = "1px solid red";
    return false;
  }else {
    document.getElementById("comment").style.border = "1px solid black";
    return true;
  }
}
