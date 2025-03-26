const signUpButton = document.getElementById('SignUpBtn');
const logInButton = document.getElementById('LogInBtn'); 
const signUpForm = document.getElementById('SignUpSection');
const logInForm = document.getElementById('LogInSection'); 

// Show Sign-Up Form, Hide Login Form
signUpButton.addEventListener('click', function(){
    logInForm.classList.add('hidden');  // Hide login
    signUpForm.classList.remove('hidden');  // Show signup
});

// Show Login Form, Hide Sign-Up Form
logInButton.addEventListener('click', function(){
    signUpForm.classList.add('hidden');  // Hide signup
    logInForm.classList.remove('hidden');  // Show login
});

let icon = document.getElementById('icon-close');
let icon1 = document.getElementById('icon-open');
let Password = document.getElementById('Password');
icon.addEventListener('click', function() {
    if (Password.type === "password") {
        Password.type = "text";
        icon.classList.add('hidden');
        icon1.classList.remove('hidden');
    }
});

icon1.addEventListener('click', function() {
    if (Password.type === "text") {
        Password.type = "password";
        icon.classList.remove('hidden');
        icon1.classList.add('hidden');
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let iconClose = document.getElementById('closeeye');
    let iconOpen = document.getElementById('openeye');
    let signUpPassword = document.getElementById('sign-password');
    let confirmPassword = document.getElementById('ConfirmPassword');
    let passwordMatchMsg = document.createElement("p");

    passwordMatchMsg.style.color = "red";
    passwordMatchMsg.style.fontSize = "14px";
    confirmPassword.insertAdjacentElement("afterend", passwordMatchMsg);

    // Toggle password visibility
    iconClose.addEventListener('click', function () {
        if (signUpPassword.type === "password") {
            signUpPassword.type = "text";
            confirmPassword.type = "text";
            iconClose.classList.add('hidden');
            iconOpen.classList.remove('hidden');
        }
    });

    iconOpen.addEventListener('click', function () {
        if (signUpPassword.type === "text") {
            signUpPassword.type = "password";
            confirmPassword.type = "password";
            iconClose.classList.remove('hidden');
            iconOpen.classList.add('hidden');
        }
    });

    // Confirm Password Validation
    confirmPassword.addEventListener("input", function () {
        if (signUpPassword.value !== confirmPassword.value) {
            passwordMatchMsg.textContent = "Passwords do not match!";
        } else {
            passwordMatchMsg.textContent = "";
        }
    });
});


const forgetPassword = document.getElementById('ForgetPasswordSection');
const resetBtn = document.getElementById('ResetBtn');
const forget = document.getElementById('Forget');
const login = document.getElementById('LogInSection');
forget.addEventListener('click',function () {
    forgetPassword.classList.remove('hidden');
    login.classList.add('hidden');
});