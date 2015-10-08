
console.log("Hello from External JS!");

var raining = false;
var foggy =false;
var sunny =false;
var cloudy =true;

if(raining) {"Bring an umbrella brella brella ay ay"

} else if (foggy) {
	console.log("It is foggy");
}else if (cloudy){

} else if (sunny){

} else {

}
var success = false;
var message;

if (success) {
    message = "Operation was successful.";
} else {
    message = "Oops, something went wrong.";
}

// the above if/else can be re-written as:
var message = (success) ? "Operation was successful." : "Oops, something went wrong.";

console.log(message);
