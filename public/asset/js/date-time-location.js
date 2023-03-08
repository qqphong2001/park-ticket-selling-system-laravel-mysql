

setInterval(resetTime, 1000);

function resetTime() {
    var month = [
        "Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    var weekday = [
        "SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"
    ];
    var today = new Date();
    var nameMonth = month[today.getMonth()];
    var nameDay = weekday[today.getDay()];

    var date = nameDay + '-' + today.getDate() + '-' + nameMonth + '-' + today.getFullYear();
    var time = today.toLocaleString('en-US', {
        hour: 'numeric',
        minute: 'numeric',
        second:'numeric',
        hour12: true
    });


    document.getElementById("time").innerHTML = time;
    document.getElementById("date").innerHTML = date;

}




// location

var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
}
