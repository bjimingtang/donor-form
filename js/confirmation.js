/*
Function: confirmSubmission
Use an ajax call to submit the information in the current session
*/
function confirmSubmission(fileName){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
    }
  };
  xhttp.open("POST", "../php/confirmSubmission.php", true);
  xhttp.send();
}

/*
Function: returnToStart
Use an ajax call to destroy the session and return to the start
*/
function returnToStart(fileName){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = this.responseText;
    }
  };
  xhttp.open("POST", "../php/returnToStart.php", true);
  xhttp.send();
}
