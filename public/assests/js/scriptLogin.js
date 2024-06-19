window.onload = function () {

    //manupula user
    var div_login_user = document.querySelector("#div-login-user");
    var form_login_user = document.querySelector("#form_login_user");



    form_login_user.onsubmit = function (event) {

        event.preventDefault();

        var form = new FormData(form_login_user);


        xmlHttpPost('ajax/login', function () {
            beforeSend(function () {

                div_login_user.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>`;

            });

            success(function () {

                var response = xhttp.responseText;
                if (response === 'logado') {
                    div_login_user.innerHTML = 'Logado com sucesso!!';
                    setTimeout(function() {
                        window.location.href = 'logado.php';
                    }, 2000);  //ex. 5000 milliseconds = 5 seconds
                }
                
                if (response === 'erro') {
                    div_login_user.innerHTML = 'Ocorreu um erro'
                }

                console.log(xhttp.responseText);

            });

        }, form);
    }


}