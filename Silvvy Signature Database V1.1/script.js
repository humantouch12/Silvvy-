 /* for button delay */

/* date and time  */

//date 
function renderTime(){
var mydate = new Date();
var year = mydate.getYear();
   if (year < 1000){
     year +=1900
   }

   var day = mydate.getDate();
   var month = mydate.getMonth();
   var daym = mydate.getDate();
   var dayarray = new Array("Sunday","Monday", "Tuesday","Wednesday","Thursday","Friday","Saturday");
   var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

//date end

//time

var currentTime = new Date();
var h = currentTime.getHours();
var m = currentTime.getMinutes();
var s = currentTime.getSeconds();

    if(h == 24){
        h = 0;
    } else if(h> 12){
      h = h - 0;
    }

      if(h < 10){
        h = "0" + h;
      }

      if (m < 10){
         m = "0" + m;
        }

        if ( s < 10){
          s = "0" + s;
        }

var myClock = document.getElementById("clockDisplay");
myClock.textContent = " " +daym+ " " +montharray[month]+ " " +year+  " | " +h+ ":" +m+ ":" +s;
myClock.innerText =  " " +daym+ " " +montharray[month]+ " " +year+ "  | " +h+ ":" +m+ ":" +s;


setTimeout("renderTime()", 1000);


}

renderTime();







      
 

    








 /* for multiselect- option2 */




