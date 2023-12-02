<!-- <div class="main-login" style="width: 100%;
    height: 100vh;">


        <div class="form_container-login" >
            <form class="my-form-login" method="POST" >
                <input type="hidden" name="form" value="login"> 
                <div class="login-welcome-row-1">
                    <h1>Login</h1>
                </div>

                <div class="divider-1">
                    <span class="divider-line-1"></span>
                </div>

                <div class="form_content-1">
                    <div class="text-field">
                        <label for="email">User-Name:
                            <input type="text" id="userName" name="username" autocomplete="off" placeholder="Your Name"
                                required />
                           
                        </label>
                    </div>
                        
                    <div class="text-field">
                        <label for="password">Password:
                            <input id="password" type="password" name="password" placeholder="Your Password" title="Minimum 6 characters at 
                             least 1 Alphabet and 1 Number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required />
                          
                        </label>
                    </div>
                </div>
                <button class="my-form__button-1" type="submit" value="login" name="action" >Sign in</button>
                <div class="my-form__actions">
                    <div class="my-form__row">
                        <span>Did you forget your password?</span>
                        <a href="#" title="Reset Password"> Reset Password </a>
                    </div>
                </div>
            </form>
        </div>
</div> -->

<div class="login-container">
        <form class="my-form-login" method="POST">
             <input type="hidden" name="form" value="login"> 
            <h2>Log In</h2>
            <div class="form-group">
                <input type="text" id="userName" name="username" autocomplete="off" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input id="password" type="password" name="password" placeholder="Your Password" title="Minimum 6 characters at 
                             least 1 Alphabet and 1 Number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
            </div>
            <button type="submit" value="login" name="action">Log In</button>
        </form>
    </div>