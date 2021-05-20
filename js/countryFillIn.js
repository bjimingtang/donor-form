/*
Function: countryFillIn
Fill in the country selector element using the countries.txt file under resources
*/
function countryFillIn(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var countryArray = this.responseText.split("\r\n");
      var countrySelect = document.getElementById("country");
      for (var country in countryArray) {
        var option = document.createElement("option");
        option.value = countryArray[country];
        option.text = countryArray[country];
        countrySelect.add(option);
      }
    }
  };
  xhttp.open("POST", "../resources/countries.txt", true);
  xhttp.send();
}

// execute the above function on load
countryFillIn();
