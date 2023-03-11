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

// Search buttom clickable

function search_ber_show() {
    if(document.getElementById("search_bar").hidden) {
        document.getElementById("search_bar").hidden = false;
    } else {
        document.getElementById("search_bar").hidden = true;
    }
}

// Username & password
function usernameCheck(){
    var username = document.getElementById("username").value;
    if (username == "") {
        document.getElementById("user").innerHTML = "Create a new username";
        document.getElementById("submit").disabled = true;
        return false;
    }
    else {
        document.getElementById("user").innerHTML = "";
    }
}

function passwordCheck() {
    var password = document.getElementById("password").value;
    var conpass = document.getElementById("confirm-password").value;
    if (password == "") {
        document.getElementById("pass").innerHTML = "Create a new password";
        document.getElementById("submit").disabled = true;
        return false;
    }
    if (password.search(/[A-Z]/) == -1) {
        document.getElementById("pass").innerHTML = "Please enter atleast one Uppercase letter";
        document.getElementById("submit").disabled = true;
        return false;
    }
    if (password.search(/[a-z]/) == -1) {
        document.getElementById("pass").innerHTML = "Please enter atleast one Lowercase letter";
        document.getElementById("submit").disabled = true;
        return false;
    }
    if (password.search(/[0-9]/) == -1) {
        document.getElementById("pass").innerHTML = "Please enter atleast one Number";
        document.getElementById("submit").disabled = true;
        return false;
    }
    if (password.search(/[~\!\@\\#\$\%\^\&\*\(\)\-\_\+\+\/\|\{\}\[\]\'\"\:\;\?\.\,\<\>]/) == -1) {
        document.getElementById("pass").innerHTML = "Please enter atleast one Spacial character";
        document.getElementById("submit").disabled = true;
        return false;
    }
    if (password.length < 8) {
        document.getElementById("pass").innerHTML = "Please enter atleast 8 character of Password";
        document.getElementById("submit").disabled = true;
        return false;
    }
    else {
        document.getElementById("pass").innerHTML = "";
    }
    if (conpass != password) {
        document.getElementById("conpass").innerHTML = "Password not matched!";
        document.getElementById("submit").disabled = true;
        return false;
    }
    else {
        document.getElementById("conpass").innerHTML = "";
        document.getElementById("submit").disabled = false;
    }
}

var Item = document.querySelectorAll('a.nav-active');
var CurrentLocation = location.href;
for(var i=0; i<Item.length; i++){
    if(Item[i].href===CurrentLocation){
        Item[i].className="nav-link  active";
    }
}

