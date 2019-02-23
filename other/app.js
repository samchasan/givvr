var textInput;
var latlng;

function setup(){
createCanvas(400,400)
background(0)
textInput = "Hello";
}

function draw(){
  background(0)
  textSize(18)
  fill(255)
  textAlign(CENTER)
  text(textInput,width/2,height/2)
}

function findLatLng (){
  textInput = document.getElementById("form").value;
  console.log(textInput);

  var settings = {
    "async": true,
    "crossDomain": true,
    "url": `https://us1.locationiq.com/v1/search.php?key=1c47017d44ba69&q=${textInput}&format=json`,
    "method": "GET"
  }

  $.ajax(settings).done(function(response) {
    lat = response[0].lat
    lng = response[0].lon
    latlng = `${lat}, ${lng}`
    console.log(latlng)
  });

}


/*

"url": `https://us1.locationiq.com/v1/search.php?key=1c47017d44ba69&q=${textInput}&format=json`,


*/
