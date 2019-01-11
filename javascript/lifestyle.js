

function start() {
    //loads the page 
    document.getElementById("btndisplay").addEventListener("click", displaycontent, false);
	document.getElementById("reload").addEventListener("click",function(){location.reload();},false);//anonymous function
   // txtnumber = document.getElementById("amount");
}//end function start

function displaycontent() {
    document.getElementById("displayresult").innerHTML = ""

    if (document.getElementById("mySelect").value == "Deep_conditioning") {
        document.getElementById("displayresult").innerHTML = "Add this treatment onto any service and help your hair return to its natural state.</br> It begins undoing chemical and environmental damage while providing a restorative deep conditioning.</br> Cost : $100";

    }

    else if (document.getElementById("mySelect").value == "Hair_spa") {
        document.getElementById("displayresult").innerHTML = "Improves the volume of har. Price based on consultation.</br> Cost : $200";

    }
	else if (document.getElementById("mySelect").value == "Smoothing") {
        document.getElementById("displayresult").innerHTML = "Reduce your styling time with a Smoothing Treatment.</br>This treatment safely eliminates up to 99% of curl and frizz without the use of harsh chemicals. Hair looks and feels healthy with radiant shine.</br> Cost : $250";

    }
	else if (document.getElementById("mySelect").value == "Style_finish") {
        document.getElementById("displayresult").innerHTML = "It’s the combination of our Renewal Therapy and your choice of a flawless finish that uses only quality ingredients.</br> Cost : $300";

    }

    else 
    {
        document.getElementById("displayresult").innerHTML = "  Removes chlorine buildup, leaving nothing but shiny, healthy-looking hair.</br> Cost : $150";

    }

}


window.addEventListener("load", start, false);