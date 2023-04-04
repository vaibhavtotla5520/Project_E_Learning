<script src="js/headers.js"></script>
<!-- Join now Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Join Now</h5>
            <!-- <h1>Contact For Any Query</h1> -->
            <p id="forSignIn">Already a User ?<span class="text-primary"> <a href="#" onclick="signIn()" class="text-decoration-none">Sign In</a></span></p>
            <p id="forSignUp" style="display: none;">New Here ?<span class="text-primary"> <a href="#" onclick="signUp()" class="text-decoration-none">Sign Up</a></span></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" style="display:none;" id="signInForm">
                <div class="contact-form bg-secondary rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control border-0 p-4" id="name" placeholder="Your Password" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- sign up -->
            <div class="col-lg-8" id="signUpForm">
                <div class="contact-form bg-secondary rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="registerForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="tel" class="form-control border-0 p-4" id="name" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control border-0 p-4" id="name" placeholder="Your Password" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control border-0 p-4" id="name" placeholder="Confirm Your Password" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-5" id="registerFormBtn">Sign Up</button>
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

    $(document).ready(function() {
        $("registerFormBtn").click(function() {
            alert("Hello");
            $.ajax({
                type: 'POST',
                url: 'Request.php',
                data: {
                    action: "signup",
                    formData: $("#registerForm").serializeArray()
                },
                success: function(response) {
                    alert(response);
                }
            });
        });
    });
</script>
<script src="js/footers.js"></script>