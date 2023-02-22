const keys = Object.keys(sessionStorage);
let myValue = sessionStorage.getItem(keys);
myValue = JSON.parse(myValue);
let btn = document.getElementById("change_data");
let btn2 = document.getElementById("update_data")

window.onload = function(){
    btn.addEventListener('click', change_data);
    btn2.addEventListener('click', update_data);
    get_data();
}

function get_data(){
    // alert(myValue[2]);
    value1 = myValue[2];
    // console.log(value1);
    $.ajax({
      url: 'user_backend.php',
      type: 'GET',
      data: {param1: value1},
      success: function(data) {
            data = JSON.parse(data);
            for (var i = 0; i < data.length; i++){
                var myDiv = document.getElementsByClassName("details");
                myDiv[i].textContent = data[i];
            }
      },
      error: function(error) {
          console.log(error);
      }
    });
}

function change_data(){
    for (var j = 0; j < 6; j++){
        if (j != 2){
            div = document.getElementsByClassName("details");
            inputarea = document.createElement("input");
            inputarea.value = div[j].innerText;
            inputarea.id = j;
            div[j].innerHTML = "";
            div[j].appendChild(inputarea);
        }
    }
    btn.style.visibility = "hidden";
    btn2.style.visibility = "visible";
}

function update_data(){
    div = document.getElementsByClassName("details");

    surname = document.getElementById("0").value;
    username = document.getElementById("1").value;
    email = div[2].innerText;
    password = document.getElementById("3").value;
    phone = document.getElementById("4").value;
    address = document.getElementById("5").value;

    value2 = [
        surname,
        username,
        email,
        password,
        phone,
        address
    ];

    console.log(value2);

    value2 = JSON.stringify(value2);

    $.ajax({
        url: 'user_update_backend.php',
        type: 'POST',
        data: {param2: value2},
        success: function(data){
            // console.log(data);
            for (var j = 0; j < 6; j++){
                if (j != 2){
                    div = document.getElementsByClassName("details");
                    inputarea = document.getElementById(j);
                    div[j].removeChild(inputarea);
                }
            }
            btn.style.visibility = "visible";
            btn2.style.visibility = "hidden";
            get_data();
        },
        error: function(error) {
            console.log(error);
        }
    });
}
// FUNCTION TO REMOVE DATA FROM SESSION STORAGE 
function logout() {
    if (sessionStorage.length != 0) {
        sessionStorage.clear();
        alert('SUCCESSFULLY LOGGED OUT');
        window.location.replace("login.php");
    } else {
        alert('YOU ARE NOT LOGGED IN')
    }
}