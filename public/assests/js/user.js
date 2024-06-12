window.onload = function () {

    var btn_users = document.querySelector("#btn-users");
    var div_users = document.querySelector("#div-users");
    var div_create = document.querySelector("#div-create");
    var div_buscar = document.querySelector("#div-user");
    var form_cadastrar = document.querySelector("#form_cadastrar");
    var form_buscar = document.querySelector("#form-buscar");

    function listarUser(users){

        var table = `<table class='table table-striped'`;

        table += `<thead><tr><td>ID</td><td>Nome</td><td>Email</td></tr></thead>`;

        table += `<tbody>`;

        users.forEach(function (user) {
            table += `<tr>`;
            table += `<td>${user.id}</td>`;
            table += `<td>${user.name}</td>`;
            table += `<td>${user.email}</td>`;
            table += `</tr>`;
        });

        table += `</tbody>`;
        table += `</table>`;

        return table;

    }

    form_buscar.addEventListener('submit', function (event) {
        event.preventDefault();

        var form = new FormData(form_buscar);

        xmlHttpPost('ajax/buscar', function () {

            beforeSend(function () {

                div_buscar.innerHTML = 'Aguarde, estamos buscando...';

            });

            success(function () {


                if (xhttp.responseText == 'nouser') {

                    div_buscar.innerHTML = 'Nenhum usuário foi encontrado';

                } else {

                    var users = JSON.parse(xhttp.responseText);

                    div_buscar.innerHTML = listarUser(users);

                }
            });

        }, form);

    })

    form_cadastrar.onsubmit = function (event) {

        event.preventDefault();

        var form = new FormData(form_cadastrar);


        xmlHttpPost('ajax/create', function () {
            beforeSend(function () {

                div_create.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>`;

            });

            success(function () {

                var response = xhttp.responseText;
                if (response == 'cadastrado') {
                    div_create.innerHTML = 'Cadastrado com sucesso !!';
                }

                if (response == 'erro') {
                    div_create.innerHTML = 'Ocorreu um erro'
                }

                console.log(xhttp.responseText);

            });

        }, form);
    }

    btn_users.onclick = function () {

        xmlHttpGet('ajax/user', function () {

            beforeSend(function () {
                div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
            });


            success(function () {

                console.log(JSON.parse(xhttp.responseText));

                var users = JSON.parse(xhttp.responseText);

                div_users.innerHTML = listarUser(users);

            });

            error(function () {
                div_users.innerHTML = 'Ocorreu um erro';
            })
        });




    }

}