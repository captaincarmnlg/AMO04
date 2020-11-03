function onloginbtn(){

    var username = document.getElementById("Username").innerText;
    var Password = document.getElementById("Password").innerText;
    Login(username,Password)
}
async function Login (Username,Password) {
    var data = {Username:Username,Password:Password}
    console.log(data);
    var result =await fetch("API/LoginAPI.php",
    {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
          },
        body: JSON.stringify(data)
    }
    )
    console.log(result); 
}