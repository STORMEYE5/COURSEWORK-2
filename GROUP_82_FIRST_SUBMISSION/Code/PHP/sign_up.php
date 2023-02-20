<?php
    // include common.php as it contains the header and footer... website has a constant header and footer throughout
    include ('common.php');
    
    //Ouputs the header for the page and opening body tag
    outputHeader("Sign Up Page");
    outputNav();
?>

    <!-- content of signup page -->
    <div class="content">
        <div class="sign-form">
            <h1>Sign Up Page</h1>
            <div class="form_details">
                <div class="form_input">
                    <p>Username</p>
                    <input type="username" id="username" placeholder="Enter Username" >
                </div>
            </div>
                <div class="form-error">
                    <span id="user_details"></span>
                </div>
            <div class="form_details">
                <div class="form_input">
                    <p>Phone Number</p>
                    <input type="phone" id="phone" placeholder="Enter Phone number">
                </div>
            
                <div class="form-error">
                    <span id="phone_details"></span>
                </div>
            </div>
            <div class="form_details">
                <div class="form_input">
        
                    <p>age</p>
                    <input type="age" name="years" id="age" placeholder="Enter age" >
                </div>
                <div class="form-error">
                    <span id="age_details"></span>
                </div>
            </div>
            <div class="form_details">
                <div class="form_input">
                    <p>Password</p>
                    <input type="password" name="password" id="pwd" placeholder="Enter Password">
                </div>
                <div class="form-error">
                    <span id="pwd_details"></span>
                </div>    
            </div>

            <div class="form_details">
                <div class="form_input">
                    <p>Confirm Password</p>
                    <input type="password" name="conpassword" id="cpwd" placeholder="Confirm Password" >
                </div>
                <div class="form-error">
                    <span id="conpwd_details"></span>
                </div>
            </div>
                <!-- entering the sign-up button -->
                <div class="buttonn">
                    <a type="submit" id="submit_button" onclick=>Sign Up</a>
                </div>
            
        </div>
    </div>   

<?php
    // Output footer
    OutputFooter();
?>







