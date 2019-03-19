function validar(){
//obteniendo el valor que se puso en campo text del formulario
        miCampoTexto = document.getElementById("miCampo").value;
        //la condición
        if (miCampoTexto.length == 0) {
            return false;
        }
        return true;
}
   var selector = 0;

    var contra1  = document.forms["Login"]["contra1"].value;
    var contra2  = document.forms["Login"]["contra2"].value;

    if (contra1 == "") {
      document.getElementById("ValidationUserName").style.visibility = "visible";
      selector = 1;
    }
    if (contra2 == "") {
      document.getElementById("ValidationPassword").style.visibility = "visible";
      selector = 1;
    }
    if(selector == 0){return true;
    }else{return false;}
  }