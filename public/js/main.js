
function verifyLogin(){

  var selector = 0;

  var username  = document.forms["Login"]["username"].value;
  var password  = document.forms["Login"]["password"].value;

  if (username == "") {
    document.getElementById("ValidationUserName").style.visibility = "visible";
    selector = 1;
  }

  if (password == "") {
    document.getElementById("ValidationPassword").style.visibility = "visible";
    selector = 1;
  }

  if(selector == 0){return true;
  }else{return false;}
}

function wrongUser(){
  document.getElementById("UsernameError").style.visibility = "visible";

}

  function search(){
    var search  = document.forms["search"]["searchInput"].value;

    if (search != "") {
      return true;
    }else{
      return false;
    }

  }
