window.onload = function(){
    btn = document.getElementById("submit_button").addEventListener('click', send_data);
}
  
function send_data(e) {
    e.preventDefault();
    let value1 = document.getElementById("usname").value;
    let value2 = document.getElementById("passwd").value;
    $.ajax({
      url: 'login_backend.php',
      type: 'GET',
      data: {param1: value1, param2: value2},
      success: function(data) {
        if (sessionStorage.length == 0) {
            data = JSON.parse(data);
            console.log(data);
            if (data.success) {
                save_to_session_storage(data);
                alert('succesful login');
                window.location.replace("products.php");
            } else {
                alert('INVALID CREDENTIALS');
            }
        } else {
            alert('LOG OUT TO CONTINUE')
        }
      },
      error: function(error) {
          console.log(error);
      }
    });
}


// FUNCTION TO SAVE DATA TO SESSION STORAGE
function save_to_session_storage(data) {
    session_object = [
        data.Surname,
        data.Name,
        data.Email,
    ];

    let session_object_string = JSON.stringify(session_object);

    sessionStorage.setItem(data.Name, session_object_string);
}

// FUNCTION TO REMOVE DATA FROM SESSION STORAGE 
function logout() {
    if (sessionStorage.length != 0) {
        sessionStorage.clear();
        alert('SUCCESSFULLY LOGGED OUT')
    } else {
        alert('YOU ARE NOT LOGGED IN')
    }
}