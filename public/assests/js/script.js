window.onload = function () {

    //manupula user
    var btn_users = document.querySelector("#btn-users");
    var div_users = document.querySelector("#div-users");
    var div_create_user = document.querySelector("#div-create-user");
    var form_cadastrar_user = document.querySelector("#form_cadastrar_user");


    //manupula profile
    var btn_profiles = document.querySelector("#btn-profiles");
    var div_profiles = document.querySelector("#div-profiles");
    var div_create_profile = document.querySelector("#div-create-profile");
    var form_cadastrar_profile = document.querySelector("#form_cadastrar_profile");

    //buscar usuário
    var form_buscar = document.querySelector("#form-buscar");
    var div_buscar = document.querySelector("#div-user");


    var div_associate = document.querySelector("#div-associate-user");
    var div_associate_profile = document.querySelector("#div-associate-profile");
    var form_associate = document.querySelector("#form_associate");
    var div_associate_cadastro = document.querySelector("#div_associate_cadastro");

    function listarAssociateUser(usuarios) {
        // Adiciona uma opção padrão, se necessário

        // Adiciona uma opção padrão, se necessário
        let html = '<option value="name">Selecione um usuário</option>';

        // Itera sobre cada usuário e adiciona uma opção para cada um
        usuarios.forEach(usuario => {
            html += `<option value="${usuario.id}">${usuario.name}</option>`;
        });

        return html;

    }

    // Fazendo a requisição GET para o arquivo PHP
    fetch('ajax/user.php')
        .then(response => response.json())
        .then(data => {
            var usuarios = data; // Os usuários recebidos do servidor
            div_associate.innerHTML = listarAssociateUser(usuarios); // Atualiza a div com os usuários
        })
        .catch(error => console.error('Error:', error));

    function listarAssociateProfile(profile) {
        // Adiciona uma opção padrão, se necessário

        // Adiciona uma opção padrão, se necessário
        let html = '<option value="name">Selecione um usuário</option>';

        // Itera sobre cada usuário e adiciona uma opção para cada um
        profile.forEach(profile => {
            html += `<option value="${profile.id}">${profile.name}</option>`;
        });

        return html;


    }

    // Fazendo a requisição GET para o arquivo PHP
    fetch('ajax/profile.php')
        .then(response => response.json())
        .then(data => {
            var profile = data; // Os usuários recebidos do servidor
            div_associate_profile.innerHTML = listarAssociateProfile(profile); // Atualiza a div com os usuários
        })
        .catch(error => console.error('Error:', error));

    form_associate.onsubmit = function (event) {

        event.preventDefault();

        var form = new FormData(form_associate);


        xmlHttpPost('ajax/createAssociate', function () {
            beforeSend(function () {

                div_associate_cadastro.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>`;

            });

            success(function () {

                var response = xhttp.responseText;
                if (response == 'associado') {
                    div_associate_cadastro.innerHTML = 'Associado com sucesso !!';
                }

                if (response == 'erro') {
                    div_associate_cadastro.innerHTML = 'Ocorreu um erro'
                }

                console.log(xhttp.responseText);

            });

        }, form);
    }


    function listarUser(users) {

        var table = `<table class='table table-striped'`;

        table += `<thead><tr><td>ID</td><td>Nome</td><td>Email</td></tr></thead>`;

        table += `<tbody>`;

        users.forEach(function (user) {
            table += `<tr>`;
            table += `<td>${user.id}`;
            table += `<td>${user.name}</td>`;
            table += `<td>${user.email}</td>`;
            table += `</tr>`;
        });

        table += `</tbody>`;
        table += `</table>`;

        return table;

    }

    function listarProfile(profiles) {

        var table = `<table class='table table-striped'`;

        table += `<thead><tr><td>ID</td><td>Nome</td></tr></thead>`;

        table += `<tbody>`;

        profiles.forEach(function (profile) {
            table += `<tr>`;
            table += `<td>${profile.id}</td>`;
            table += `<td>${profile.name}</td>`;
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

                div_buscar.innerHTML = '`<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>Aguarde, estamos buscando...';

            });

            success(function () {
                var response = xhttp.responseText;

                if (response === 'notfound') {
                    div_buscar.innerHTML = 'Não encontrou perfil e nem usuário';
                } else if (div_buscar.innerHTML) {

                    console.log(JSON.parse(xhttp.responseText));
                    var busca = JSON.parse(xhttp.responseText);

                    let emailFound = busca.some(obj => 'email' in obj);

                    if (emailFound) {
                        div_buscar.innerHTML = listarUser(busca);
                    } else {
                        div_buscar.innerHTML = listarProfile(busca);
                    }

                }
            });


        }, form);

    })

    form_cadastrar_user.onsubmit = function (event) {

        event.preventDefault();

        var form = new FormData(form_cadastrar_user);


        xmlHttpPost('ajax/createUser', function () {
            beforeSend(function () {

                div_create_user.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>`;

            });

            success(function () {

                var response = xhttp.responseText;
                if (response == 'cadastrado') {
                    div_create_user.innerHTML = 'Cadastrado com sucesso !!';
                }

                if (response == 'erro') {
                    div_create_user.innerHTML = 'Ocorreu um erro'
                }

                console.log(xhttp.responseText);

            });

        }, form);
    }



    form_cadastrar_profile.onsubmit = function (event) {

        event.preventDefault();

        var form = new FormData(form_cadastrar_profile);


        xmlHttpPost('ajax/createProfile', function () {
            beforeSend(function () {

                div_create_profile.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>`;

            });

            success(function () {

                var response = xhttp.responseText;
                if (response == 'cadastrado') {
                    div_create_profile.innerHTML = 'Cadastrado com sucesso !!';
                }

                if (response == 'erro') {
                    div_create_profile.innerHTML = 'Ocorreu um erro'
                }

                console.log(xhttp.responseText);

            });

        }, form);
    }

    btn_users.onclick = function () {

        xmlHttpGet('ajax/user', function () {

            beforeSend(function () {
                div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span><spam>Aguarde, estamos buscando...</span>`;
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

    btn_profiles.onclick = function () {

        xmlHttpGet('ajax/profile', function () {

            beforeSend(function () {
                div_profiles.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span><spam>Aguarde, estamos buscando...</span>`;
            });


            success(function () {

                console.log(JSON.parse(xhttp.responseText));

                var profiles = JSON.parse(xhttp.responseText);

                div_profiles.innerHTML = listarProfile(profiles);

            });

            error(function () {
                div_profiles.innerHTML = 'Ocorreu um erro';
            })
        });
    }

}