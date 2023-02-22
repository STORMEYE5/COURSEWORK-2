<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout
include ('common.php');
$title = "User profile";
//Ouputs the header for the page and opening body tag

//Output header and navigation 
outputHeader($title);
outputNav();
?>

<div class="user_container">
    <div class="user_details_container">
        <div class="profile_icon">
            <div class="fas fa-user" id="profile_icon"></div>
        </div>
        <div class="user_details">
            <span>email</span>
            <div class="details">text</div>
            <span>surname</span>
            <div class="details">text</div>
            <span>name</span>
            <div class="details">text</div>
            <span>password</span>
            <div class="details">text</div>
            <span>phone</span>
            <div class="details">text</div>
            <span>address</span>
            <div class="details">text</div>
        </div>
        <div class="button_place">
            <button id="change_data">CHANGE USER DETAILS</button>
            <button id="update_data">UPDATE DETAILS</button>
            <button id="logout_button" onclick="logout()">LOGOUT</button>
        </div>
    </div>
</div>

<script src="../JavaScript/user.js"></script>