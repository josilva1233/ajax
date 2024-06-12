window.onload = function() {

    var btn_users = document.querySelector("#btn-users");
    var div_users = document.querySelector("#div-users");
    var div_create = document.querySelector("#div-create");
    var form_cadastrar = document.querySelector("#form_cadastrar");

    form_cadastrar.onsubmit = function(event){
        event.preventDefault();
        xmlHttpPost('ajax/create', function(){
            beforeSend(function(){

                div_create.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Aguarde...</span>`;

            })

            success(function(){
                
            })
        })
    }

    btn_users.onclick = function() {
         
        xmlHttpGet('ajax/user', function(){

            beforeSend(function(){
                div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
            });


            success(function(){

            console.log(JSON.parse(xhttp.responseText));

            var users = JSON.parse(xhttp.responseText);

            var table = `<table class='table table-striped'`;

            table += `<thead><tr><td>ID</td><td>Nome</td><td>Email</td></tr></thead>`;

            table += `<tbody>`;

            users.forEach(function(user) {
                table += `<tr>`;
                table += `<td>${user.id}</td>`;
                table += `<td>${user.name}</td>`;
                table += `<td>${user.email}</td>`;
                table += `</tr>`;
            });

            table += `</tbody>`;
            table += `</table>`;

            div_users.innerHTML = table;
                
            });

            error(function(){
                div_users.innerHTML = 'Ocorreu um erro';
            })
        },'?id=1');




    }

}