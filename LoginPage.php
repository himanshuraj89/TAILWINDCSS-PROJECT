<?php
include 'DataBase.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Page</title>
</head>
<body>
    <section id="LogInSection" class="bg-gray-50 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-cyan-100 flex p-6 rounded-xl shadow-lg max-w-3xl items-center">  
            <!-- login -->
            <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="text-3xl font-bold text-[#002D74]">
                    Login
                </h2>
                <p class="text-[#6493ec] font-bold mt-2 ">
                Please login to your account.
                </p>
                <p id="Wish" class="text-[#6493ec] font-bold mt-2 hidden">
                Welcomeback!
                </p>
                
                <form action="" class="flex flex-col gap-4">
                    <input type="email" name="email" class=" p-2 mt-6 rounded-xl border-2 hover:border-blue-400 focus:outline-none" placeholder="Email" required>
                    <div class="relative ">
                        <input type="password" id="Password" name="password" class=" p-2 rounded-xl border-2 hover:border-blue-400 w-full focus:outline-none " placeholder="Password" required>
                        <svg xmlns="http://www.w3.org/2000/svg" id="icon-open" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 hidden cursor-pointer" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" id="icon-close" width="16" height="16" fill="currentColor" class="bi bi-eye-slash absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer " viewBox="0 0 16 16">
                            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                            <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                          </svg>
                    </div>
                    <button type="submit" class="bg-[#002D74] font-bold rounded-xl p-2 text-white hover:scale-105 duration-400 ">
                        Login
                    </button>
                    <div class=" font-semibold  pb-4 text-[#002D74] ">
                        <a href="#" id="Forget" class="hover:text-blue-400">Forget your password?</a>
                      </div>
                </form>
                <div class="mt-3 grid grid-cols-3 items-center text-gray-500">
                    <hr class="border-gray-500">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-500">
                </div>
               <button id="Googlebtn" class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center gap-2 hover:scale-105 duration-400 text-[#002D74]">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    Login with Google
               </button>
                   
               

              <div class="mt-3 text-[15px] flex justify-center gap-2 items-center text-[#002D74]">
                <p class="font-semibold">Don't have an account?</p>
                <a href="#" id="SignUpBtn" class="text-[#002D74] font-bold hover:text-blue-400">Sign up</a>
              </div>

            </div>
            <!-- image -->
             <div class="w-1/2  md:block hidden">
                <img src="images/img2.jpg" class="rounded-2xl shadow-2xl " alt="loginpage-img">
             </div>
        </div>
    </section>



    <section id="SignUpSection" class="bg-gray-300 min-h-screen flex items-center justify-center hidden">
        <!-- signup container -->

        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
        <!-- signup form -->
            <div class="md:w-1/2 px-8 md:px-16">

            <h2 class="text-3xl font-bold text-[#002D74]">Sign Up</h2>
            <p class="text-[#6493ec] font-bold mt-2">Create an account to get started</p>

            <form action="" class="flex flex-col gap-3">
                <input type="text" name="firstname" placeholder="First Name" class="p-2 mt-6 border-2 hover:border-blue-400  rounded-xl focus:outline-none" required>
                <input type="text" name="lastname" placeholder="Last Name" class="p-2  rounded-xl border-2 hover:border-blue-400  focus:outline-none" required>
                <input type="email" name="email" placeholder="Email" class="p-2  rounded-xl border-2 hover:border-blue-400  focus:outline-none" required>
                <div class="relative">
                <input type="password" name="password" id="sign-password" placeholder="Password" class="p-2 w-full border-2 hover:border-blue-400  rounded-xl focus:outline-none" required>
                <svg xmlns="http://www.w3.org/2000/svg" id="openeye" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2  cursor-pointer hidden" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" id="closeeye" width="16" height="16" fill="currentColor" class="bi bi-eye-slash absolute top-1/2 right-3 -translate-y-1/2  cursor-pointer" viewBox="0 0 16 16">
                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                    <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                  </svg>
                </div>
                <input type="password" name="confirmpassword" id="ConfirmPassword" placeholder="Confirm Password" class="p-2 border-2 hover:border-blue-400  rounded-xl focus:outline-none" required>
                <button type="submit" id="conformSignup" class="bg-[#002D74] text-white font-bold rounded-xl p-2   hover:scale-105 duration-400">Sign Up</button>
                <div class="grid grid-cols-3 items-center gap-1 text-gray-500">
                    <hr class="border-gray-500">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-500">
                </div>
                <div class="mt-2 flex flex-col   gap-1 text-[#002D74]">

                    <p class="text-center font-semibold">Already have an account?</p>

                    <button id="LogInBtn" class="text-white font-bold text-center p-2 rounded-2xl bg-[#002D74] hover:scale-105 duration-400">Login</button>
                </div>
            </form>
            </div>
        <!-- image -->
         <div class="md:block hidden w-1/2">
            <img src="images/img3.jpg" class="rounded-2xl" alt="signuppage-img">
         </div>

        </div>

    </section>
    <script src="script.js"></script>

<!-- forgotten password -->
<section id="ForgetPasswordSection" class="bg-gray-200 min-h-screen flex items-center justify-center ">
    <div class="bg-gray-300 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
        <!-- form container -->
        <div class="md:w-1/2 px-8 md:px-16">
            <h2 class="text-3xl font-bold text-[#002D74]">Forgot Password</h2>
            <p class="text-[#6493ec] font-bold mt-2">Enter your email to reset your password</p>
            <form action="" class="flex flex-col gap-4 mt-6">
                <input type="email" name="email" placeholder="Email" class="p-2 border-2 hover:border-blue-400 rounded-xl focus:outline-none" required>
                <button type="submit" class="bg-[#002D74] text-white font-bold rounded-xl p-2 hover:scale-105 duration-400">
                    Reset Password
                </button>
            </form>
            <div class="mt-4 flex justify-center">
                <button id="BackToLogin" class="text-[#002D74] font-bold hover:text-blue-400">
                    Back to Login
                </button>
            </div>
        </div>
        <!-- image -->
        <div class="md:block hidden w-1/2">
            <img src="images/img3.jpg" class="rounded-2xl" alt="forgot-password-img">
        </div>
    </div>
</section>
</body>
</html>
