window.onload = function (){
    cart = document.getElementsByClassName("cart-form");
    products = document.getElementsByClassName("products-box");
    personal_cart = document.getElementsByClassName("personal_cart");
    add_button = document.getElementById("add_button");
    pay_button = document.getElementById("pay");
    add_button.addEventListener('click', add_to_cart);
    pay_button.addEventListener('click', add_to_database);
}

function openCart(str) {
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

    $.ajax({
        url: 'products_backend.php',
        type: 'GET',
        data: {param1: str},
        success: function(data) {
            data_parse = JSON.parse(data);
            console.log(data_parse);
        },
        error: function(error) {
            console.log(error);
        }
      });
}

function closeCart() {
    products[0].style.filter = "none";
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

    var cart = [];
    const totalKeys = localStorage.length;

    // Loop through each key and output its name to the console
    for (let i = 0; i < totalKeys; i++) {
        const key = localStorage.key(i);
        let myarray = localStorage.getItem(key);
        myarray = JSON.parse(myarray);
        cart.push(myarray);
    }
    document.getElementById("personal_cart_details").innerHTML = cart.map((item) => {
        return(
            `<div class="product" id="${item.Model}">
                <div id="${item.Image}">
                    <img id="image0" src="${item.Image}" alt="" style="width:100px;height:100px;">
                </div>
                <div id="description">
                ${item.Model}
                </div>
                <div id="description">
                ${item.Quantity}
                </div>
                <div class="remove_product">
                    <button id="remove_product" onclick="remove_product()">
                        X
                    </button>
                </div>
            </div>`
        )
    }).join('');
}

function search_product(){
    window.location.replace("search.php");
}

function add_to_cart(){
    const myArrayString = localStorage.getItem(data_parse['Product ID']);
    const myArray = JSON.parse(myArrayString);

    if (localStorage.getItem(data_parse['Product ID']) !== null) {
        myArray.Quantity += 1;
        localStorage.setItem(data_parse['Product ID'], JSON.stringify(myArray)); 
    } else {
        localStorage.setItem(data_parse['Product ID'], JSON.stringify(data_parse)); 
    }

}

function add_to_database(){
    const totalKeys = localStorage.length;
    for (let i = 0; i < totalKeys; i++) {
        const key = localStorage.key(i);
        quantity = JSON.parse(localStorage.getItem(key)).Quantity;

        // let myarray = localStorage.getItem(key);
        // myarray = JSON.parse(myarray);
        value2 = [
            key,
            quantity
        ]   

        alert(value2[0]);
        $.ajax({
            url: 'products_backend2.php',
            type: 'POST',
            data: {param2: JSON.stringify(value2)},
            success: function(data){
                // data = JSON.parse(data);
                alert(data);
                // display_data();
                // productId.textContent = "";
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
}

function remove_product(){

}
