function onloginbtn(){

    var username = document.getElementById("Username").value;
    var Password = document.getElementById("Password").value;
    Login(username,Password)
}
async function Login (Username,Password) {
    var data = {'Username':Username ,'Password':Password}
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
    var resultobj = await result.json();
    
    document.cookie = "authtoken="+resultobj.Authtoken;
    console.log(document.cookie);
}
