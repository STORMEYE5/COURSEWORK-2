<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include ('common.php');
$title = "Login Page";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>
<!-- content of login page -->
    <div class="content">
        <div class="login-form">
            <h1>Login Page</h1>
            <form>
                <div class="username">
                    <p>Email</p>
                    <!-- entering spaces to allow user to input his login details -->
                    <input type="username" name="email" id="usname" placeholder="Enter email address" >
                    <span class="user_det"></span>
                </div>
                <div class="password">
                    <p>Password</p>
                    <input type="password" name="password" id="passwd" placeholder="Enter Password" >
                    <span class="pw_det"></span>
                </div>
                <div class="button">
                    <button id="submit_button" type="submit">Register</button>
                </div>
            </form>
              <!-- entering the login button -->
        </div>
    </div>
    <script type="text/javascript" src="../JavaScript/login.js"></script>
    
<?php
OutputFooter();
?>