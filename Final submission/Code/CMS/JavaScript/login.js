window.onload = function(){
  btn = document.getElementById("submit").addEventListener('click', send_data);
}

function send_data(e) {
  e.preventDefault();
  let value1 = document.getElementById("username").value;
  let value2 = document.getElementById("password").value;
  $.ajax({
    url: 'login_backend.php',
    type: 'GET',
    data: {param1: value1, param2: value2},
    success: function(data) {
      data = JSON.parse(data);
      if (data.success) {
        alert('succesful login');
        window.location.replace("inventory.php");
      } else {
        alert('unsuccesful login');
      }
    },
    error: function(error) {
        console.log(error);
    }
  });
}