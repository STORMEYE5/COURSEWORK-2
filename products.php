<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include('common.php');
$title = "Products";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>
<!-- content of scores page -->
    <!-- <div class="leaderboard">
        <h1>Scores of all players</h1> -->
        <!-- creation of table to display details of player and high scores -->
        <!-- <table id="tablee">
            <thead>
                <tr> -->
                    <!-- table headers -->
                    <!-- <th>Ranking</th>
                    <th>Username</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
      
            </tbody>
        </table> -->
    <!-- </div> -->
    <div class="personal-cart">
        <button>
            <img src="cart-button.png" alt="" style="width:40px;height:30px" onclick="display_personal_cart()">
        </button>
    </div>

    <div class="store-name">
        ELECTROMANIA
    </div>

    <div class="products-box">
        <div class="television">
            <div class="title">
                TELEVISION
            </div>
            <div class="row1">
                <img src="xiaomi_q2_65.png" alt="" style="width:250px;height:250px">
            </div>
            <div class="row2">
                <img src="xiaomi_p1e_65.png" alt="" style="width:250px;height:250px">
            </div>
        </div>
        <div class="phones">
            <div class="title">
                PHONES
            </div>
            <div class="row1">
                <img src="xiaomi_11t_pro.png" alt="" style="width:250px;height:250px">
                <img src="xiaomi_12_lite.png" alt="" style="width:250px;height:250px">
            </div>
            <div class="row2">
                <img src="xiaomi_12s_ultra.png" alt="" style="width:250px;height:250px">
                <img src="xiaomi_12t.png" alt="" style="width:250px;height:250px">
            </div>
        </div>
        <div class="speakers">
            <div class="title">
                SPEAKERS
            </div>
            <div class="row1">
                <img src="JBL_PartyBox_310.webp" alt="" style="width:250px;height:250px" onclick="openCart()">
                <img src="JBL_PartyBox_110.webp" alt="" style="width:250px;height:250px">
            </div>
            <div class="row2">
                <img src="JBL_PULSE_5.webp" alt="" style="width:250px;height:250px">
                <a>
                    <img src="JBL_PartyBox_710.webp" alt="" style="width:250px;height:250px" onclick="openCart()">
                </a>
            </div>
        </div>
    </div>

    <div class="cart-form">
        <div class="cart-details">
            <div>
                <button class="close-window" onclick="openCart()">X</button>
            </div>
            <div>
                <button class="add-button">ADD TO CART</button>
            </div>
        </div>
    </div>

    <div class="personal_cart">
        <div class="product">
            <div id="image">
                <img src="JBL_PARTYBOX_710.webp" alt="" style="width:100px;height:100px;">
            </div>
            <div id="description">
                JBL PARTYBOX 710
                QUANTITY: ?
            </div>
        </div>
        <div class="checkout">
            <button id="shop" onclick="display_personal_cart()">SHOP</button>
            <button id="pay">PAY</button>
        </div>
    </div>
    <!-- <script src="score.js"></script> -->
<?php
OutputFooter();
?>