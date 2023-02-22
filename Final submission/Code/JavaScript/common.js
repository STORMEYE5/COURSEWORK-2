window.onload = function(){
    check_login;
}

function check_login(){
    if (sessionStorage.length == 0){
        window.location.replace("login.php");
    } else {
        // alert('LOG OUT');
        window.location.replace("user.php");
    }
}