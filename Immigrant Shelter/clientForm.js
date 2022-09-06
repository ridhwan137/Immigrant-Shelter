var nameError = document.getElementById('name-error');
// var genderError = document.getElementById('gender-error');
var ageError = document.getElementById('age-error');
var passportError = document.getElementById('passport-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var addressError = document.getElementById('address-error');
var reasonError = document.getElementById('reason-error');
var vaccinationStatusError = document.getElementById('vaccinationstatus-error');
var submitError = document.getElementById('submit-error');

function validateName(){
    var name = document.getElementById('contact-name').value;

    if(name.length==0){
        nameError.innerHTML = 'Name is required';
        return false;
    }

    if(!name.match(/^[a-zA-Z ]*$/)){
        nameError.innerHTML = 'Enter full name';
        return false;
    }

    nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validateAge(){
    var age = document.getElementById('contact-age').value;

    if(age<=0 || age>=100){
        ageError.innerHTML = 'Invalid age number';
        return false;
    }

    if(isNaN(age)){
        ageError.innerHTML = 'Please enter a number';
        return false;
    }

    ageError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validatePassport(){
    var passport = document.getElementById('contact-passport').value;
    var regsaid = /[a-zA-Z]{0}[0-9]{7}/;

    if(passport.length>=9 || passport.length<=0){
        passportError.innerHTML = 'Invalid passport';
        return false;
    }
 
    if(regsaid.test(passport) == false)
    {
        passportError.innerHTML = 'Invalid passport';
        return false;
    }
        
    passportError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validateEmail(){
    var email = document.getElementById('contact-email').value;

    if(email.length==0){
        emailError.innerHTML = 'Email address is required';
        return false;
    }

    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = 'Invalid email address';
        return false;
    }

    emailError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validatePhone(){
    var phone = document.getElementById('contact-phone').value;

    if(phone.length==0){
       phoneError.innerHTML = 'Phone number is required';
       return false;
    }

    if(phone.length !==10){
        phoneError.innerHTML = 'Invalid phone number';
        return false;
    }

    if(!phone.match(/^[0-9]{10}$/)){
        phoneError.innerHTML = 'Only digits';
        return false;
    }

    phoneError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function menuBar() {
    var x = document.getElementById("myNavBar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } 
    else {
      x.className = "navbar";
    }
}