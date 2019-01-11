function start() {
    //loads the page 
    //this function add event listeners for the previous and next controls on the page.
    document.getElementById("computeBMI").addEventListener("click", computeBMI, false);
}//end function start

     function computeBMI() {
          //Obtain user inputs
         var height = Number(document.getElementById("height").value);
         var heightunits = document.getElementById("heightunits").value;
         var weight = Number(document.getElementById("weight").value);
         var weightunits = document.getElementById("weightunits").value;

         //Convert all units to metric
         if (heightunits == "inches") height /= 39.3700787;
         if (weightunits == "lb") weight /= 2.20462;

         //Perform calculation
         var BMI = weight / Math.pow(height, 2);
         //Display result of calculation
		 document.getElementById("output").innerHTML = Math.round(BMI * 100)/100;
         if (BMI < 18.5){
		 document.getElementById("comment").innerHTML = "Underweight"; }
         else if (BMI >= 18.5 && BMI <= 25){
		 document.getElementById("comment").innerHTML = "Normal";}
         else if (BMI >= 25 && BMI <= 30){
		 document.getElementById("comment").innerHTML = "Obese";}
         else{
		 document.getElementById("comment").innerHTML = "Overweight";  }          
     }


window.addEventListener("load", start, false);