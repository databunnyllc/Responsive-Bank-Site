
/** GETTING THE WEATHER */
const weatherRequest = new XMLHttpRequest();

weatherRequest.onreadystatechange = function() {
    if(weatherRequest.readyState === 4 && weatherRequest.status === 200) {
        let weatherData = JSON.parse(weatherRequest.responseText);
        let currentWeather = weatherData.weather[0].description;

    document.querySelector(".greetings-area h1 span").innerHTML = currentWeather;
    } 
}

weatherRequest.open("GET", "http://api.openweathermap.org/data/2.5/weather?q=Chicago,us&APPID=0d93240f9f061bd77087e4d66457cefe");
weatherRequest.send();