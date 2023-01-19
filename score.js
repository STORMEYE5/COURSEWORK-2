function scores(){
    console.log("test");
    for (let i=0; i<localStorage.length; i++){
        let user = JSON.parse(localStorage.getItem(localStorage.key(i)));
        var output = document.querySelector('tbody');
        output.innerHTML="";
        output.innerHTML += `
        <tr>
            <td>${i+1}</td>
            <td>${user.username}</td>
            <td>${user.score}</td>
        </tr>
    `;
       
    }
 

    
}
 scores()
