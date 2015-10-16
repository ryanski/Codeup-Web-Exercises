"use strict";
var passcode=[38,38,40,40,37,39,37,39,66,65,13]
var pressedkeys=[];

$(document).keyup(function(event){
      console.log(event.keyCode); 
      pressedkeys.push(event.keyCode);

      if(pressedkeys[pressedkeys.length-1]!= passcode[pressedkeys.length-1]) {
        pressedkeys=[];
      }

      var pk_string =pressedkeys.toString();
      console.log(pk_string);

      var passcode_string=passcode.toString();

      if (pk_string==passcode_string) {
      	$('body').css('background-color', "url(/img/baby.jpeg");
      	alert('You have a billion lives!')
      };
      // if(passcode==pressedkeys){

      // 	alert('You have a billion lives!')
      // }
     
      	

    
});


       