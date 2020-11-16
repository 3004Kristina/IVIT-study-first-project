<?php require __DIR__ . '/.header.php'; ?>
<!--SECTION SECONDARY BANNER START-->
<section class="secondary_banner_wrapper">
    <div class="container">
        <h2><span>welcome</span> to ave</h2>
        <h3>sign in or register</h3>
    </div>
</section>
<!--SECTION SECONDARY BANNER END-->

<!--SECTION REGISTRATION FORM START-->
<section class="registration_wrapper">
    <div class="container">
        <div class="registration">
            <div class="registration_item sign">
                <h2>sign in</h2>

                <form action="" method="post">
                    <div class="form-group">
                        <div class="useremail"><input id="email-input" name="email" type="email" placeholder="Your Email" required></div>
                    </div>

                    <div class="form-group">
                        <div class="userpassword"><input id="password-input" type="password" name="password" placeholder="Your password" required></div>
                    </div>

                    <div class="actions">
                        <button class="btn">Sign in</button>
                        <a href="#">Forgot your Password</a>
                    </div>

                </form>
            </div>

            <div class="registration_item registr">
                <h2>register</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="useremail"><input id="email-input" name="email" type="email" placeholder="Your Email" required></div>
                    </div>

                    <div class="form-group">
                        <div class="userpassword"><input id="password-input" type="password" name="password" placeholder="Your password" required></div>
                    </div>

                    <div class="form-group">
                        <div class="userpasswordagain"><input id="againpassword-input" type="password" name="againpassword" placeholder="Confirm password" required></div>
                    </div>

                    <div class="form-group check">
                        <input type="checkbox"> <span>Sign up for exclusive updates, discounts, new arrivals, contests, and more!</span>
                    </div>

                    <div class="actions">
                    <button class="btn">Create account</button>
                        <p>
                            By clicking ‘Create Account’, you<br>
                            agree to our <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--SECTION REGISTRATION FORM END-->

<?php require __DIR__ . '/.footer.php'; ?>
