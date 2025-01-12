function validateUser()
{
    const valEmpName = eName => eName.length !== '';

    const valComName = cName => cName.length !== '';

    const valPhone = phone => phone.length !== '';

    const valUserName = uName => uName.length !== '';

    const valPassword = password => password.length !== '';


    if (valEmpName(eName) && valComName(cName) && valPhone(phone) && valUserName(uName) && valPassword(password))
    {
        return true;
    }

    return false;
}

function confirmUp()
{
    let eName = document.getElementById("eName").value.trim();
    let cName = document.getElementById("cName").value.trim();
    let phone =  document.getElementById("phone").value.trim();
    let uName =  document.getElementById("uName").value.trim();
    let password = document.getElementById("password").value.trim();

    if (!validateUser(eName, cName, phone, uName, password))
    {
        alert("Invalid input");
        return;
    }

    const updateData = JSON.stringify({
        eName: eName,
        cName: cName,
        phone: phone,
        uName: uName,
        password: password
    });

    //alert(regData);
    
    // AJAX request
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/updateCheck.php", true);
    console.log('flag 1');
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(updateData);

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200){
            console.log("response:", this.responseText);
            const response = this.responseText;

            if(response === 'success')
            {
                alert("Update Successful");
                window.location.href = "../view/dashboard.php";
            }

            else
            {
                alert("Update Unsuccessful");
            }
        }
    };

}