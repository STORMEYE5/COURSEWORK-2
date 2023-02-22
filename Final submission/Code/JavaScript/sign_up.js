let password_check = RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})");
let btn_click;
let my_object_destring;

window.onload = function(){
    btn_click = document.getElementById("submit_button");
    btn_click.disabled = true;
    
    verified_password = document.getElementById("register_password");
    verified_password.onkeyup = checkRegistrationPassword;

    btn_click.addEventListener('click', send_data);
}
  
function send_data(e) {
    e.preventDefault();
    
    let surname = document.getElementById("surname").value;
    let name = document.getElementById("name").value;
    let email = document.getElementById("email_address").value;
    let password = document.getElementById("register_password").value;
    let phone = document.getElementById("phone_Id").value;
    let address = document.getElementById("address_Id").value;

    post_data = [
        surname,
        name,
        email,
        password,
        phone,
        address
    ]

    $.ajax({
      url: 'sign_up_backend.php',
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(post_data),
      success: function(data) {
      data = JSON.parse(data);
        if (data.success) {
            alert('SUCCESSFUL SIGNUP');
            // save_to_session_storage(data);
            window.location.replace("products.php");
        } else {
            alert('EMAIL IS ALREADY IN USE');
        }
      },
      error: function(error) {
          console.log(error);
      }
    });
}

// FUNCTION TO CHECK FOR PASSWORD SYNTAX FOR REGISTRATION
function checkRegistrationPassword() {
    let verified_password = document.getElementById("register_password").value;
    let result = password_check.test(verified_password);
    
    btn_click.disabled = !result;
}