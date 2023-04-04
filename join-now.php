<?php
if(isset($_GET['msg'])) {
    echo "<script>alert(".$_GET['msg'].");</script>";
}
session_start();
?>
<script src="js/headers.js"></script>


    <!-- Header Start -->
    <!-- <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Join Now</h5>
                <!-- <h1>Contact For Any Query</h1> -->
                <p id="forSignIn">Already a User ?<span class="text-primary"> <a href="#" onclick="signIn()" class="text-decoration-none">Sign In</a></span></p>
                <p id="forSignUp"  style="display: none;">New Here ?<span class="text-primary"> <a href="#" onclick="signUp()" class="text-decoration-none">Sign Up</a></span></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8" style="display:none;" id="signInForm">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" method="post" action="Request.php" novalidate="novalidate">
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" name="userEmail"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" placeholder="Your Password" required="required" data-validation-required-message="Please enter your name" name="userPassword"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="action" value="signin">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8" id="signUpForm">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="sign-upForm" method="post" action="Request.php" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" value="" name="userName" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" value="" name="userEmail" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="tel" class="form-control border-0 p-4" id="mobile" placeholder="Your Phone" required="required" value="" name="userMobile"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" id="password" placeholder="Your Password" required="required" value="" name="userPassword"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" id="confirmPassword" placeholder="Confirm Your Password" required="required" value="" name="userConfirmPassword"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="" name="action" value="signup" id="sendMessageButton">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <script>
        function signIn() {
            document.getElementById("signInForm").style.display = "block";
            document.getElementById("signUpForm").style.display = "none";
            document.getElementById("forSignIn").style.display = "none";
            document.getElementById("forSignUp").style.display = "block";
        }
        function signUp() {
            document.getElementById("signInForm").style.display = "none";
            document.getElementById("signUpForm").style.display = "block";
            document.getElementById("forSignIn").style.display = "block";
            document.getElementById("forSignUp").style.display = "none";
        }
    </script>
<script src="js/footers.js"></script>
