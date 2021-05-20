/*
Function: readFile
Read in the specified file from the server
*/
function readFile(fileName){

}
/*
Function: countryFillIn
Fill in the country selector element using the countries.txt file under resources
*/
function countryFillIn(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var countryArray = this.responseText.split("\n");
      console.log(countryArray);
    }
  };
  xhttp.open("POST", "../resources/countries.txt", true);
  xhttp.send();
}

// execute the above function on load
countryFillIn();
