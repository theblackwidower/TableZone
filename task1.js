// Name: Bhavya Patel
// Student ID: 110065852

// 1: First name and last name should not have less than 4 characters as input
function point1() {
    // First Name
    if (document.getElementById("fname").value.lenght < 4) {
        alert("First Name should not have less than 4 characters as input");
    }
    // Last Name
    if (document.getElementById("lname").value.lenght < 4) {
        alert("Last Name should not have less than 4 characters as input");
    }
}

// 2: First and last name should not contain any special characters, symbols or numeric input
function point2() {
    var charS = /^[A-Za-z ]+$/
        // First Name
    var validation1 = charS.test(document.getElementById(fname).value);
    if (!validation1) {
        alert("First name should not contain any special characters, symbols or numeric input");
    }
    // Last Name
    var validation2 = charS.test(document.getElementById(lname).value);
    if (!validation2) {
        alert("Last name should not contain any special characters, symbols or numeric input");
    }
}

// 3: Email validation
function point3() {
    var validation3 = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById(email).value);
    if (!validation3) {
        alert("Email should have @ and .com and must be entered in a valid format");
    }
}

// 4: Phone Number
function point4() {
    if (!(document.getElementById(phone).value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/))) {
        alert("Enter phone number in a valid format");
    }
}
// 5: Password Validation
function point5() {
    // Atleast one capital letter
    var passSC = /^[A-Z ]+$/
    var validationP = passSC.test(document.getElementById(pwd).value);

    // Atleast one lower case letter
    var passSL = /^[a-z ]+$/
    var validationL = passSL.test(document.getElementById(pwd).value);


    // Atleast one digit
    var passSD = /^[a-z ]+$/
    var validationD = passSD.test(document.getElementById(pwd).value);

    // Atleast one special character
    var passSp = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    var validationSP = passSp.test(document.getElementById(pwd).value);

    // if condition to check all of these conditions
    if ((!validationP) && (!validationL) && (!validationD) && (!validationSP)) {
        alert("Password must be in appropriate format");
    }
}



// 6: Password matches confirm Password
function point6() {
    if (document.getElementById("pwd").value !== document.getElementById("cpwd").value) {
        alert("Password and Confirm password must match");

    }
}
// 7: If none of the field is empty
function point7() {
    if (document.getElementById("fname") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("lname") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("DOB") == null) {
        alert("You cannot leave this empty");
    }

    if (document.getElementById("DOB1") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("DO2") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("Male") == null || document.getElementById("Female") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("country") == null) {
        alert("You cannot leave this empty");
    }

    if (document.getElementById("email") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("phone") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("pwd") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("cpwd") == null) {
        alert("You cannot leave this empty");
    }
    if (document.getElementById("cbox") == null) {
        alert("You cannot leave this empty");
    }
}