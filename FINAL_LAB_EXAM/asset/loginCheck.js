function confirmLogin()
{
    let uName =  document.getElementById("uName").value.trim();
    let password = document.getElementById("password").value.trim();

    const loginData = JSON.stringify({
        uName: uName,
        password: password
    });

    
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/loginCheck.php", true);
    console.log('flag 1');
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(loginData);

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200){
            console.log("response:", this.responseText);
            const response = this.responseText;

            if(response === 'success')
            {
                alert("Login Successful");
                window.location.href = "../view/dashboard.php";
            }

            else
            {
                alert("Login Unsuccessful");
            }
        }
    };

}