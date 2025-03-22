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


let icon = document.getElementById('icon');
let Password = document.getElementById('Password');
icon.onclick = function(){
    if(Password.type == "password"){
        Password.type = "text";
        icon.classList.add('bi bi-eye');
        icon.classList.remove('bi bi-eye-slash');
}else{
    Password.type = "password";
    icon.classList.remove('fa-eye-slash');
    icon.classList.add('fa-eye');
}};