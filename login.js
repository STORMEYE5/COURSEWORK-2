
function Login(){
    let username = document.getElementById("usname").value;
    let current = JSON.parse(localStorage.getItem(username));
    let pass = document.getElementById("passwd").value;
    if (current == null){
        alert("No user")
    }else if (current.username == username && current.pw == pass){
        alert("login successful")
        sessionStorage.setItem("user", current.username);
    }
}
