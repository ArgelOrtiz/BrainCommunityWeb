
function verifyLogin(){

  var selector = 0;

  var username  = document.forms["Login"]["username"].value;
  var password  = document.forms["Login"]["password"].value;

  if (username == "") {
    document.getElementById("ValidationUserName").style.visibility = "visible";
    selector = 1;
  }else{
    document.getElementById("ValidationUserName").style.visibility = "hidden";
  }

  if (password == "") {
    document.getElementById("ValidationPassword").style.visibility = "visible";
    selector = 1;
  }else{
    document.getElementById("ValidationUserName").style.visibility = "hidden";
  }

  if(selector == 0){return true;
  }else{return false;}

}
