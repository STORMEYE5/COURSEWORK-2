<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout
include ('common.php');
$title = "Sign Up Page";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>

<!-- content of signup page -->

<div class="content">
    <div class="sign-form">
        <h1>Sign Up Page</h1>
        <form id="register_form" method="post" class="form_input">
            <input id="surname" name="surname" type="username" class="input-field" placeholder="Surname" autocomplete="off" required>
            <input id="name" name="name" type="text" class="input-field" placeholder="Name" autocomplete="off" required>
            <input id="email_address" name="email_address" type="email" class="input-field" placeholder="Email Address" autocomplete="off" required>
            <input id="register_password" name="register_password" type="password" class="input-field" placeholder="Password" autocomplete="off" required>
            <input id="phone_Id" name="phone_Id" type="text" class="input-field" placeholder="Phone Number" autocomplete="off" required>
            <input id="address_Id" name="address_Id" type="text" class="input-field" placeholder="Address" autocomplete="off" required>
            <button id="submit_button" type="submit">Register</button>
        </form>
    </div>
</div>

<script type="text/javascript" src="../JavaScript/sign_up.js"></script> 

<?php
OutputFooter();
?>

