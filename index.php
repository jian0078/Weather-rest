<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Weather App</title>
  </head>
  <body>
  	<ul class="nav nav-tabs mb-4">
	  <li class="nav-item">
	    <a class="nav-link active" href="#">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="https://openweathermap.org/current">Source</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="https://en.wikipedia.org/wiki/Lists_of_cities">Cities</a>
	  </li>
	</ul>
  	<div class="container">
  		<div class="jumbotron">
   <div class="info text-center text-primary mt-5"></div>
   <div class="form-group">
   	<label><b style="color:purple">City:</b></label>
   	<input type="" name="" class="city-input form-control" placeholder="Enter a city to check the weather">
   	<button class="submit-btn btn btn-primary btn-block mt-4">Get Weather</button>
<div class="weather-info"></div>
   </div>
   </div>
  <!--  <button class="btn">Click me</button>? -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
    	$(".info").html('<h1 style="color:Red">Yi Jiang\'s Weather App<h1>');
    	
  // $(".btn").on("click",function(event){
  // 	$(".info").toggle();
  // });

$(".submit-btn").on("click",function(event){
	var city=$(".city-input").val();
	console.log(city);
 	$.get(
  		"http://api.openweathermap.org/data/2.5/weather?q="+city+"&appid=f06e7f80dff774122ed7be88113bfcce",
  // 		function(data){
  // 		var str="<h3 class='mt-5'>"+city+"  weather:</h3>"
  // 		str=str+"<h5>Weather: "+data.weather[0].main+"</h5>";
		// str=str+"<h5>Wind speed: "+data.wind.speed+"</h5>";
		// str=str+"<h5>Temperature: "+data.main.temp+"</h5>";
		// str=str+"<h5>Pressure: "+data.main.pressure+"</h5>";
  // 		$(".weather-info").html(str);
  // 	}

  // function(data) {
		// 			var str = "<h5 class='text-center'>" + city + " weather</h5>";
		// 			str += "<div class='row'>";
		// 			str += "<div class='col-6'><h5>Weather:<span class='badge badge-primary'>" + data.weather[0].main + "</span></h5></div>";
		// 			str += "<div class='col-6'><h5>Temp:<span class='badge badge-primary'>" + (data.main.temp - 273.15) + "</span></h5></div>";
		// 			str += "<div class='col-6'><h5>Wind speed:<span class='badge badge-primary'>" + data.wind.speed + "</span></h5></div>";
		// 			str += "<div class='col-6'><h5>Pressure:<span class='badge badge-primary'>" + data.main.pressure + "</span></h5></div>";
		// 			str += "</div>";
		// 			$(".weather-info").html(str);
		// 		}
		function(data) {
					var str = "<h3 class='text-center my-4'>" + city + " weather</h3>";
					str += "<div class='row'>";
					str += "<div class='col-3'><h5>Weather:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + data.weather[0].main + "</span></h5></div>";
					str += "<div class='col-3'><h5>Temp:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + (data.main.temp - 273.15) + "</span></h5></div>";
					str += "<div class='col-3'><h5>Wind speed:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + data.wind.speed + "</span></h5></div>";
					str += "<div class='col-3'><h5>Pressure:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + data.main.pressure + "</span></h5></div>";
					str += "</div>";
					$(".weather-info").html(str);
				}

  );
});
 
 

    	
//     	$.ajax({
//   url: "/api/getWeather",
//   data: {
//     zipcode: 97201
//   },
//   success: function( result ) {
//     $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
//   }
// });
    </script>
  </body>
</html>