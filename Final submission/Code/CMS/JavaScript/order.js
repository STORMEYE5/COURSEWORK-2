let customerId = document.getElementById('cust_id');
let delayTimer;

window.onload = function(){
    customerId.addEventListener('keyup', get_details);
}

function get_details(){
    clearTimeout(delayTimer);
    delayTimer = setTimeout(function() {
        let value1 = customerId.value;
        value1 = JSON.stringify(value1);
        
        $.ajax({
            url: 'order_backend.php',
            type: 'GET',
            data: {param1: value1},
            success: function(data) {

                data = JSON.parse(data);

                const table = document.querySelector('#order_table');
                if (data.length !== 0) {
                    for (var i = 2; i < ((data.length) + 2); i++){
                        var row = table.insertRow(i);
                        for (var j = 0; j < 4; j++){
                            var cell = row.insertCell(j);
                            cell.textContent = data[i-2][j];
                        }
                    }
                } else {
                    for (var m = table.rows.length - 1; m >= 2; m--) {
                        var row = table.deleteRow(m); // Delete the row
                    }
                }

            },
            error: function(error) {
                console.log(error);
            }
        });
    }, 20);
}

