var today = new Date();
//var hourNow = today.getHours();
//var hourNow = today.getMinutes();
var hourNow = today.getHours()+ "시" + today.getMinutes() + "분";
var greeting;

if (hourNow > 18) {
    greeting = 'Good evening!';
} else if (hourNow > 12) {
    greeting = 'Good afternoon!';
} else if (hourNow > 0) {
    greeting = 'Good morning!';
} else {
    greeting = 'Welcome!';
}

document.write('<h3>' + greeting + '</h3>');
//document.write('<h3>hello</h3>');
//document.write('<h3>' + hourNow + '</h3>');
