
  function report(){

    var title   = document.getElementById('title').value;
    var summary = document.getElementById('summary').value;

    if (title != '' && title != ' ') {
      document.getElementById("title").style.border = "1px solid black";
    }else {
      document.getElementById("title").style.border = "1px solid red";
      return false;
    }

    if (summary != '' && summary != ' ') {
      document.getElementById("summary").style.border = "1px solid black";
    }else {
      document.getElementById("summary").style.border = "1px solid red";
      return false;
    }

    return true
  }
