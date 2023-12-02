<!-- <div class="main-login" style="width: 100%;
    height: 100vh;">

        <div class="form_container">



        <form class="my-form" method="POST">
        <input type="hidden" name="form" value="signup"> 
                <div class="login-welcome-row">
                <h1>Create your account</h1>
            </div>

            <div class="form_content">

            <div class="text-field">
                <label for="email">User-Name:
                    <input type="text" id="userName" name="username" autocomplete="off" placeholder="Your Name"
                        required>
                 
                </label>
            </div>
                
                
            <div class="text-field">
                <label for="password">Password:
                    <input id="password" type="password" name="password" placeholder="Your Password" title="Minimum 6 characters at 
                         least 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                 
                </label>
            </div>
                
                
            <div class="text-field">
                <label for="confirm-password">Repeat Password:
                    <input id="confirm-password" type="password" name="repassword" placeholder="Repeat Password"
                        title="Minimum 6 characters at east 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                  
                </label>
            </div>
        </div>
            <button class="my-form__button" type="submit" value="signup" name="action">
                Sign up
            </button>
            <div class="my-form__actions">
                <div class="my-form__row">
                    <span>Did you forget your password?</span>
                    <a href="#" title="Reset Password">
                        Reset Password
                    </a>
                </div>
                <div class="my-form__signup">
                    <a href="#" title="Login">
                        Sign in
                    </a>
                </div>
            </div>
        </form>
                
        </div>
</div> -->

<div class="signup-container">
        <form class="my-form" method="POST">
            
            <input type="hidden" name="form" value="signup"> 
            <h2>Create your account</h2>
            <div class="form-group">
                <input type="text" id="userName" name="username" autocomplete="off" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input id="password" type="password" name="password" placeholder="Your Password" title="Minimum 6 characters at 
                         least 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
            </div>
            <div class="form-group">
                <input type="password" id="confirm-password" name="repassword" placeholder="Confirm Password" title="Minimum 6 characters at east 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
            </div>
            <button type="submit" value="signup" name="action">Sign Up</button>

        </form>
    </div>