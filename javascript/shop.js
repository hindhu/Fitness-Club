//declare global variable 
var result = "";
var maxPrice;
var minPrice;
var inputmaxPrice;
var inputminPrice;
var resultprice = "";

function start() {
    //loads the page 
    //this function add event listeners for the previous and next controls on the page.
    document.getElementById("btnprice").addEventListener("click", displayprice, false);
    
    minPrice = document.getElementById("minvalue");
    maxPrice = document.getElementById("maxvalue");

}//end function start


function displayprice() {
    inputminPrice = minPrice.value;
    inputmaxPrice = maxPrice.value;

    if (isNaN(inputminPrice) == false && isNaN(inputmaxPrice) == false){

        if (inputminPrice >= 20 && inputmaxPrice <= 60){
            document.getElementById("displayprotein").innerHTML = "Soy Protein :40$ per lbs"
        }else if (inputminPrice >= 60 && inputmaxPrice <= 100){
            document.getElementById("displayprotein").innerHTML = "Whey Protein :80$ per lbs"
        }
        else {
            window.alert("Please Reload :Proteins are not available");


        }


    } else {

        window.alert("Please enter price in number ");

    }
}


window.addEventListener("load", start, false);