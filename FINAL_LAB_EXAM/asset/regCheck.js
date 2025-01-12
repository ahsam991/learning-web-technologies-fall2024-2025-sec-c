function login(){
const regData =JSON.stringify({
    password:password
});
alert(regData);
 const xhttp = new XMLHttpRequest();
 xhttp.open("POST","../controller/regCheck.php",true);
 console.log("flag 1");
 xhttp.setRequestHeader("Content-type","application/json");
 xhttp.send(regData);

xhttp.onreadystatechange=function()  
{ 
    if(this.readyState==4 && this.status==200){
        console.log("response", this.responseText);
        const response = this.responseText;
        if(response =='success')
        {
            alert("Registration Successful");
            window.location.href="../view/login.html";

        }
    }
};
}