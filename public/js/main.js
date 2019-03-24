
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

  function verifyRegister(){
    var selector = 0;

    var email       = document.forms["Register"]["email"].value;
    var userName    = document.forms["Register"]["userName"].value;
    var pass        = document.forms["Register"]["pass"].value;
    var confirmPass = document.forms["Register"]["confirmPass"].value;
    var name        = document.forms["Register"]["name"].value;
    var firstName   = document.forms["Register"]["firstName"].value;
    var secondName  = document.forms["Register"]["secondName"].value;
    var birthday    = document.forms["Register"]["birthday"].value;
    var terms       = document.forms["Register"]["terms"].value;

    if (email == "") {
      document.getElementById("ValidationEmail").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationEmail").style.visibility = "hidden";
    }

    if (userName == "") {
      document.getElementById("ValidationUserName").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationUserName").style.visibility = "hidden";
    }

    if (pass == "") {
      document.getElementById("ValidationPass").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationPass").style.visibility = "hidden";

      if (confirmPass == "") {
        document.getElementById("ValidationConfirmPass").style.visibility = "visible";
        selector = 1;
      }else {
        document.getElementById("ValidationConfirmPass").style.visibility = "hidden";
        if (confirmPass != pass ) {

          selector = 1;
        }
      }
    }

    if (name == "") {
      document.getElementById("ValidationName").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationName").style.visibility = "hidden";
    }

    if (firstName == "") {
      document.getElementById("ValidationFirstName").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationFirstName").style.visibility = "hidden";
    }

    if (secondName == "") {
      document.getElementById("ValidationSecondName").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationSecondName").style.visibility = "hidden";
    }

    if (birthday == "") {
      document.getElementById("ValidationBirthdat").style.visibility = "visible";
      selector = 1;
    }else{
      document.getElementById("ValidationBirthdat").style.visibility = "hidden";
    }

    if (terms == false) {
      document.getElementById("ValidationTerms").style.visibility = "visible";
      selector = 1;
    }else{
        document.getElementById("ValidationTerms").style.visibility = "hidden";
    }

    if(selector == 0){return true;
    }else{return false;}

  }
