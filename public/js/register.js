function checkPassword() {
    var password = document.getElementById("password").value;
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z._-]{8,}$/;

    if (regex.test(password)){
        document.getElementById("messagePassword").style.color = '#9AFF27';
        document.getElementById("messagePassword").innerHTML = "<strong>Password accepted</strong>";
        return true;
    }
    else{
        document.getElementById("messagePassword").style.color = "darkred";
        document.getElementById("messagePassword").innerHTML = "<strong>Please match the requested format</strong>";
        return false;
    }
}