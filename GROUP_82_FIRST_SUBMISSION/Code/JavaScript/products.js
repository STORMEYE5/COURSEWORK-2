// Run only when html page has been fully loaded
window.onload = function (){
    cart = document.getElementsByClassName("cart-form");
    products = document.getElementsByClassName("products-box");
    personal_cart = document.getElementsByClassName("personal_cart");
}

// Function to display hidden contents
function openCart() {
    if (cart[0].style.opacity == 0) {
        cart[0].style.visibility = "visible";
        cart[0].style.opacity = 1;
    } else {
        cart[0].style.opacity = 0;
        cart[0].style.visibility = "hidden";
    }
    if (products[0].style.filter == "blur(10px)") {
        products[0].style.filter = "none";
    } else {
        products[0].style.filter = "blur(10px)";
    }
}

// Function to diaplay customer's personal cart
function display_personal_cart() {
    if (personal_cart[0].style.width == "300px") {
        personal_cart[0].style.width = "0";
    } else {
        personal_cart[0].style.width = "300px";
    }
    if (products[0].style.filter == "blur(10px)") {
        products[0].style.filter = "none";
    } else {
        products[0].style.filter = "blur(10px)";
    }
}
