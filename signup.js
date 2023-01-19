var uname = document.getElementById('username');
var btn = document.getElementById('submit_button');
var phone = document.getElementById('phone');
var age = document.getElementById('age');
var pw = document.getElementById('pwd');
var cpw = document.getElementById('cpwd');

btn.onclick = ValidateForm;

function UsernameValidation() {
    // variables 
    let detail = document.getElementById("user_details");
   
    let re = new RegExp("^(?=.*[0-9])(?=[a-zA-Z0-9._]{8,15}$)(?!.*[_.]{2})[^_.].*[^_.]$");
    if (uname.value.length == 0) {
        btn.disabled = true;
        detail.innerHTML = '*required';
        detail.style.color = "#FDD2BF";
        return false;
    // check if pass the regex 
    } else if (!re.test(uname.value)) { 
        btn.disabled = true;
        detail.innerHTML = '*Username should be 8-15 characters long <br> Contain at least 1 Number';
        detail.style.color = "#FF0000"
        ;
        return false;
    }
    
    // success message
    btn.disabled = false;
    detail.innerHTML = "";
    return true;
    
}
function PhoneValidation(){
    let detail = document.getElementById("phone_details")
    if (phone.value.length == 0){
        btn.disabled = true;
            detail.innerHTML = '*Required Phone Number';
            detail.style.color = "#FF0000";
            return false;
    }else if (phone.value.length > 8){
        btn.disabled = true;
            detail.innerHTML = '*Enter Valid Phone Number (Number cannot have more than 8 digits)';
            detail.style.color = "#FF0000";
            return false;
    }
    btn.disabled = false;
    detail.innerHTML="";
    return true;
}
function AgeValidation(){
    let detail = document.getElementById("age_details")
    if (age.value.length == 0){
        btn.disabled = true;
            detail.innerHTML = '*Age Required';
            detail.style.color = "#FF0000";
            return false;
    }
    btn.disabled = false;
    detail.innerHTML="";
    return true;
}
function PassValidation(){
   
        // variables 
        let detail = document.getElementById("pwd_details");
        /* Regular Expression for validating password with the following conditions:
        1. Min 6 elements
        2. Containing at least:
            a. A symbol (!@#$%^&*)
            b. Upper and lower case letter
            c. A number */
        let re = new RegExp("^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{8,}$");
        if (pw.value.length == 0) {
            btn.disabled = true;
            detail.innerHTML = '*required';
            detail.style.color = "#FF0000";
            return false;
        // check if pass the regex
        } else if (!re.test(pw.value)) {
            btn.disabled = true;
            detail.style.color = "#FF0000";
            detail.innerHTML = "Password should contain at least one symbol, <br> uppercase and lowercase Character <br> a min of 8 characters.";
            return false;
        }
        // success message
        btn.disabled = false;
        detail.innerHTML = "Strong Password";
        detail.style.color = "#77D970";
        return true;
}
function ConfirmPass() {
    //variables
    let detail = document.getElementById("conpwd_details");

    // check if input field is empty
    if (cpw.value.length == 0) {
        btn.disabled = true;
        detail.innerHTML = '*required';
        detail.style.color = "#FF0000";
        return false;
    // check whether the password matches
    } else if (cpw.value != pw.value) {
        btn.disabled = true;
        detail.style.color = "#FF0000";
        detail.innerHTML = "Please enter the same password again";
        return false;
    }
    // success message
    btn.disabled = false;
    detail.innerHTML = "Password matches";
    detail.style.color = "#77D970";
    return true;
    
}
function ValidateForm() {
    // call all functions to check if meet all conditions
    if (UsernameValidation() && PhoneValidation() && AgeValidation() && PassValidation() && ConfirmPass()){
        // enable button
        btn.disabled = false;
        user = {};

        user.username = document.getElementById('username').value;
        user.phone = document.getElementById('phone').value;
        user.age = document.getElementById('age').value;
        user.pw = document.getElementById('pwd').value;
        user.score = 0;




        //  convert existing JSON(html local storage) into JS objects
        // append the new object to user object 
        localStorage[user.username] = JSON.stringify(user);
        sessionStorage.loggedUser = uname.value;
        alert("Sign Up Successful")
        // redirect to index
        window.location.href="../index.php";
    
    // disable button if not met condition
    } else {
        btn.disabled = true;
    }
}
