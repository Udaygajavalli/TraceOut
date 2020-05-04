// Caps Lock
var input = document.getElementById("myInput");
var text = document.getElementById("text");
input.addEventListener("keyup", function (event) {

    if (event.getModifierState("CapsLock")) {
        document.getElementById("text").innerHTML = "Caution! Caps lock is ON.";
    } else {
        document.getElementById("text").innerHTML = "";
    }
});

// validation
function Validate() {
    var Fname = document.getElementById("fname").value;
    var Lname = document.getElementById("lname").value;
    var Email = document.getElementById("Email").value;
    var Password = document.getElementById("pass").value;
    var CPassword = document.getElementById("cpass").value;
    //FIRST NAME
    if (Fname == "") {
        document.getElementById("Fname_error").innerHTML = "* Please Enter First Name";
        return false;
    }
    if (Fname.length < 3) {
        document.getElementById("Fname_error").innerHTML = "* First Name must be 3 Characters";
        return false;
    }
    if (Fname != (/^[A-Za-z]+$/)) {
        document.getElementById("Fname_error").innerHTML = "";
        true;
    }
    else {
        document.getElementById("Fname_error").innerHTML = "* Invalid Name";
        return false;
    }
    // LAST NAME
    if (Lname == "") {
        document.getElementById("Lname_error").innerHTML = "* Please Enter First Name";
        return false;
    }
    if (Lname.length < 3) {
        document.getElementById("Lname_error").innerHTML = "* First Name must be 3 Characters";
        return false;
    }
    if (Lname != (/^[A-Za-z]+$/)) {
        document.getElementById("Lname_error").innerHTML = "";
        true;
    }
    else {
        document.getElementById("Lname_error").innerHTML = "* Invalid Name";
        return false;
    }
    //EMAIL
    if (Email == "") {
        document.getElementById("email_error").innerHTML = "* Please Enter Email";
        return false;
    }
    if (Email.indexOf('@') == 0) {
        document.getElementById("email_error").innerHTML = "* Invalid Email";
        return false;
    }
    if (Email.charAt(Email.length - 4) != '.') {
        document.getElementById("email_error").innerHTML = "* Invalid Domain";
        return false;
    }
    else {
        document.getElementById("email_error").innerHTML = "";
        true;
    }
    //password
    if (Password == "") {
        document.getElementById("password_error").innerHTML = "* Please Enter Password";
        return false;
    }
    if (Password.length <= 7) {
        document.getElementById("password_error").innerHTML = "* Password must be 8 characters";
        return false;
    }
    else {
        document.getElementById("password_error").innerHTML = "";
        true;
    }
    //Confirm Password
    if (CPassword == "") {
        document.getElementById("cpassword_error").innerHTML = "* Please Comfirm Your password";
        return false;
    }
    if (Password != CPassword) {
        document.getElementById("cpassword_error").innerHTML = "* Password Not Matched";
        return false;
    }
    else {
        document.getElementById("cpassword_error").innerHTML = "";
        true;
    }
}


// Toggle Password
function password() {
    var x = document.getElementById("pass");
    var y = document.getElementById("cpass");
    if (x.type === "password" && y.type === "password") {
        x.type = "text";
        y.type = "text";
    }
    else {
        x.type = "password";
        y.type = "password";
    }
}
