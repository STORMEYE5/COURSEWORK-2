let delayTimer;
let container_form;
let productId = document.getElementById("product_id");

window.onload = function() {
    display_data();
    btn = document.getElementById("update_button").addEventListener('click', update_product);
    btn2 = document.getElementById("close_form")
    if (btn2){
        btn2.addEventListener('click', update_product);
    }
    container = document.getElementsByClassName("container");
    container_form = document.getElementsByClassName("form_container");
    productId.addEventListener('keyup', update_form2);
    submit_btn = document.getElementById("submit_btn").addEventListener('click', update_database);
}

function update_product(e){
    e.preventDefault();
    if (container_form[0].style.opacity == 0){
        container_form[0].style.visibility = "visible";   
        container_form[0].style.opacity = 1;
        container[0].style.filter = "blur(10px)";
    } else
    if (container_form[0].style.opacity == 1){
        container_form[0].style.visibility = "hidden";   
        container_form[0].style.opacity = 0;
        container[0].style.filter = "none";
    }
}

function display_data(){
    $.ajax({
        url: 'inventory_backend.php',
        type: 'GET',
        success: function(data) {
            data = JSON.parse(data);
            const table = document.querySelector('#prod_table');
            for (var m = table.rows.length - 1; m >= 2; m--) {
                var row = table.deleteRow(m); // Delete the row
            }
            for (var i = 2; i < ((data.length) + 2); i++){
                var row = table.insertRow(i);
                for (var j = 0; j < 5; j++){
                    var cell = row.insertCell(j);
                    cell.textContent = data[i-2][j];
                }
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function update_form2(){
    clearTimeout(delayTimer);
    delayTimer = setTimeout(function() {
        let productId = document.getElementById("product_id");
        var parent_form = document.getElementsByClassName("form_container");    
        var form = document.getElementById("search_form");    
        let value1 = productId.value;
        value1 = JSON.stringify(value1);
        $.ajax({
            url: 'inventory_update_backend.php',
            type: 'GET',
            data: {param1: value1},
            success: function(data) {
                data = JSON.parse(data);
                
                if (data.length != 0) {
                    for (var x = 1; x < data[0].length; x++){
                        var input_exist = document.getElementById(x);
                        if (!input_exist) {
                            var input = document.createElement("input");
                            if (x < 3){
                                input.type = "text";
                                input.id = x;
                                input.value = data[0][x];
                                form.appendChild(input);
                            } else {
                                input.type = "number";
                                input.id = x;
                                input.value = data[0][x];
                                form.appendChild(input);
                            }
                            
                        } else {
                            var input = document.getElementById(x);
                            input.value = data[0][x];
                        }
                    }
                    var input_exist = document.getElementById("submit_btn")
                    if (!input_exist){
                        var input = document.createElement("button");
                        input.type = "submit";
                        input.id = "submit_btn";
                        input.textContent = "Submit";
                        input.style = "justify-content: center";
                        parent_form[0].appendChild(input);
                    }
                } else {
                    for (var y = 1; y < 5; y++){
                        var input_exist = document.getElementById(y);
                        if (input_exist){
                            input_exist.remove();
                        }
                    }
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }, 20);
}

function update_database(){
    container_form[0].style.visibility = "hidden";
    container_form[0].style.opacity = 0;
    container[0].style.filter = "none";
    container[0].style.transition = "all 0.2s linear";

    let product_ID = document.getElementById("product_id").value;
    let section = document.getElementById("1").value;
    let model = document.getElementById("2").value;
    let quantity = document.getElementById("3").value;
    let price = document.getElementById("4").value;

    value2 = [
        product_ID,
        section,
        model,
        quantity,
        price
    ];

    value2 = JSON.stringify(value2);

    $.ajax({
        url: 'inventory_update_backend2.php',
        type: 'POST',
        data: {param2: value2},
        success: function(){
            display_data();
            productId.textContent = "";
        },
        error: function(error) {
            console.log(error);
        }
    });
}
