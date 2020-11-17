function onloginbtn(){

    var Mail = document.getElementById("Mail").value;
    var Password = document.getElementById("Password").value;
    Login(Mail,Password)
}
async function Login (Mail,Password) {
    var data = {'Mail':Mail ,'Password':Password}
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
    
    try {
        var resultobj = await result.json();
        document.cookie = "authtoken="+resultobj.Authtoken;
        window.location.replace("http://localhost/AMO04/Hijstest.php");
    } catch (error) {
        
    }
    
    
    console.log(document.cookie);
}
