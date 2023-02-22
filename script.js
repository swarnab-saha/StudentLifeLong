// Copyright text
window.onload = function() {
    currentDate();
    function currentDate() {
        var dateObj = new Date();
        document.getElementById("copyright-text").innerHTML = dateObj.getFullYear();
    };  
}

// Only text
function textOnly(input){
    var letter = /[^A-Za-z\ ]/gi;
    input.value = input.value.replace(letter, "");
}

// Only number
function numberOnly(input) {
    var number = /[^0-9\ ]/gi;
    input.value = input.value.replace(number, "");
}
// Number and text
function numberText(input) {
    var value = /[^A-Za-z0-9\ ]/gi;
    input.value = input.value.replace(value, "");
}

// No space
function noSpace(input) {
    var space = /[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>\ ]/gi;
    input.value = input.value.replace(space, "");
}

// Mobile number 10 digit check
function mobileNumber() {
    var mobile = document.getElementById("mobile").value;
    if(mobile.length < 10) {
        document.getElementById("mob").innerHTML = "Please enter 10 digit valid mobile number.";
        document.getElementById("submit").disabled = true;
        return false;
    }
    else {
        document.getElementById("mob").innerHTML = " ";
        document.getElementById("submit").disabled = false;
    }
}

// navber = document.querySelector(".menu").querySelectorAll("a");
// console.log(navber)
// navber.forEach(element => {
//     element.addEventListener("click", function(){
//         navber.forEach(nav=>nav.classList.remove("active"))
        
//         this.classList.add("active");
//     })
// });

// Search buttom clickable

function search_ber_show() {
    if(document.getElementById("search_bar").hidden) {
        document.getElementById("search_bar").hidden = false;
    } else {
        document.getElementById("search_bar").hidden = true;
    }
}

