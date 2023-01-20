<?php
    // include common.php as it contains the header and footer... website has a constant header and footer throughout
    include('common.php');
    
    //Ouputs the header for the page and opening body tag
    outputHeader("Products");
    outputNav();
?>

    <!-- Content of page -->
    <!-- Displaying products -->
    <div class="products-box">
        <div class="television">
            <div class="title">
                TELEVISION
            </div>
            <div class="row1">
                <img src="../media/xiaomi_q2_65.png" alt="" style="width:250px;height:250px">
            </div>
            <div class="row2">
                <img src="../media/xiaomi_p1e_65.png" alt="" style="width:250px;height:250px">
            </div>
        </div>
        <div class="phones">
            <div class="title">
                PHONES
            </div>
            <div class="row1">
                <img src="../media/xiaomi_11t_pro.png" alt="" style="width:250px;height:250px">
                <img src="../media/xiaomi_12_lite.png" alt="" style="width:250px;height:250px">
            </div>
            <div class="row2">
                <img src="../media/xiaomi_12s_ultra.png" alt="" style="width:250px;height:250px">
                <img src="../media/xiaomi_12t.png" alt="" style="width:250px;height:250px">
            </div>
        </div>
        <div class="speakers">
            <div class="title">
                SPEAKERS
            </div>
            <div class="row1">
                <img src="../media/JBL_PartyBox_310.webp" alt="" style="width:250px;height:250px" onclick="openCart()">
                <img src="../media/JBL_PartyBox_110.webp" alt="" style="width:250px;height:250px">
            </div>
            <div class="row2">
                <img src="../media/JBL_PULSE_5.webp" alt="" style="width:250px;height:250px">
                <a>
                    <img src="../media/JBL_PartyBox_710.webp" alt="" style="width:250px;height:250px" onclick="openCart()">
                </a>
            </div>
        </div>
    </div>

    <!-- Hidden cart displaying more information about a product -->
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

    <!-- Personal cart to display selected items -->
    <div class="personal_cart">
        <div class="product">
            <div id="image">
                <img src="../media/JBL_PARTYBOX_710.webp" alt="" style="width:100px;height:100px;">
            </div>
            <div id="description">
                JBL PARTYBOX 710
                QUANTITY: ?
            </div>
            <div class="remove_product">
                <button id="remove_product">
                    X
                </button>
            </div>
        </div>
        <div class="checkout">
            <div class="payment">
                <button id="shop" onclick="display_personal_cart()">SHOP</button>
                <button id="pay">PAY</button>
            </div>
            <div class="button_link">
                <a href="hist.php" id="order_text">
                    <button id="order_history">
                        ORDER HISTORY
                    </button>
                </a>
            </div>
        </div>
    </div>
    <script src="../JavaScript/products.js"></script>

<?php
    // Output footer
    OutputFooter();
?>