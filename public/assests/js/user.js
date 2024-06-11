window.onload = function() {

    var btn_users = document.querySelector("#btn-users");
    var div_users = document.querySelector("#div-users");

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            var users = JSON.parse(this.responseText);
            console.log(users);
        }

    }

    btn_users.onclick = function() {

        xhttp.open('GET', 'ajax/user.php', true);
        xhttp.send();

    }

}