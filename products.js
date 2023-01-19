window.onload = function (){
    cart = document.getElementsByClassName("cart-form");
    products = document.getElementsByClassName("products-box");
    personal_cart = document.getElementsByClassName("personal_cart");
}

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

function closeCart() {
    products[0].style.filter = "none";
    cart[0].classList.toggle("show-cart");
}

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
