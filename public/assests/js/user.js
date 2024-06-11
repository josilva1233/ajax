window.onload = function() {

    var btn_users = document.querySelector("#btn-users");

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
        }
    }

    btn_users.onclick = function() {
        xhttp.open('GET', 'ajax/user.php', true);
        xhttp.send();
    }



}