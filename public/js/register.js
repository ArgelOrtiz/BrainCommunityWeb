
function registerVerification(){
  var validation = true;

  var email       = document.getElementById('email').value;
  var username    = document.getElementById('username').value;
  var password    = document.getElementById('password').value;
  var confirmPass = document.getElementById('confirmPass').value;
  var name        = document.getElementById('name').value;
  var firstName   = document.getElementById('firstName').value;
  var secondName  = document.getElementById('secondName').value;
  var birthday    = document.getElementById('birthday').value;

  if (email === "" ) {
    validation = false;
    document.getElementById("ValidationEmail").style.visibility = "visible";
  }else{
    document.getElementById("ValidationEmail").style.visibility = "hidden";
  }

  if (username === "") {
    validation = false;
    document.getElementById("ValidationUserName").style.visibility = "visible";
  }else{
    document.getElementById("ValidationUserName").style.visibility = "hidden";
  }

  if (password === "") {
    validation = false;
    document.getElementById("ValidationPass").style.visibility = "visible";
  }else{
    document.getElementById("ValidationPass").style.visibility = "hidden";
  }

  if (confirmPass === "") {
    validation = false;
    document.getElementById("ValidationConfirmPass").style.visibility = "visible";
  }else{
    document.getElementById("ValidationConfirmPass").style.visibility = "hidden";

    if (password != confirmPass) {
      validation = false;
      document.getElementById("ValidationPass").style.visibility = "visible";
      document.getElementById("ValidationConfirmPass").style.visibility = "visible";
    }else{
      document.getElementById("ValidationPass").style.visibility = "hidden";
      document.getElementById("ValidationConfirmPass").style.visibility = "hidden";
    }
  }


  if (name === "") {
    validation = false;
    document.getElementById("ValidationName").style.visibility = "visible";
  }else{
    document.getElementById("ValidationName").style.visibility = "hidden";
  }

  if (firstName === "") {
    validation = false;
    document.getElementById("ValidationFirstName").style.visibility = "visible";
  }else{
    document.getElementById("ValidationFirstName").style.visibility = "hidden";
  }

  if (secondName === "") {
    validation = false;
    document.getElementById("ValidationSecondName").style.visibility = "visible";
  }else{
    document.getElementById("ValidationSecondName").style.visibility = "hidden";
  }

  if (birthday === "") {
    validation = false;
    document.getElementById("ValidationBirthday").style.visibility = "visible";
  }else{
    document.getElementById("ValidationBirthday").style.visibility = "hidden";
  }

  return validation;
}
