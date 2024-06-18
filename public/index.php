<? header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assests/css/style.css">

</head>

<body>
    <div class="container" id="criteria">
        <h1>Sistema de cadastro</h1>
        <div class="row">
            <br>
            <!--Nav principal-->
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Users</a></li>
                <li><a data-toggle="tab" href="#menu0">Profiles</a></li>
                <li><a data-toggle="tab" href="#menu1">Cadastrar</a></li>
                <li><a data-toggle="tab" href="#menu2">Busca</a></li>
            </ul>

            <div class="tab-content">

                <div id="home" class="tab-pane fade in active">
                    <br>
                    <button id="btn-users" class="btn btn-primary">Listar users</button>
                    <div id="div-users"></div>
                </div>

                <div id="menu0" class="tab-pane fade in">
                    <br>
                    <button id="btn-profiles" class="btn btn-primary">Listar Profiles</button>
                    <div id="div-profiles"></div>
                </div>

                <div id="menu1" class="tab-pane fade">
                    <br>
                    <!--Nav secundária cadastro-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#cadastroUser">Users</a></li>
                        <li><a data-toggle="tab" href="#cadastroProfile">Profiles</a></li>
                        <li><a data-toggle="tab" href="#associarProfileUser">Associar</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="cadastroUser" class="tab-pane fade in active">
                            <div id="div-create-user"></div>
                            <!--Form cadastro users-->
                            <form action="" method="post" role="form" id="form_cadastrar_user" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="current-email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="current-password">
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-cadastrar-user">Cadastrar</button>
                            </form>
                        </div>

                        <div id="cadastroProfile" class="tab-pane fade">

                            <div id="div-create-profile"></div>
                            <!--Form cadastro profile-->
                            <form action="" method="post" role="form" id="form_cadastrar_profile" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome">
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-cadastrar-profile">Cadastrar</button>
                            </form>
                        </div>

                        <div id="associarProfileUser" class="tab-pane fade">
                            <div id="div_associate_cadastro"></div>

                            <!-- Formulário de cadastro de perfil -->
                            <form action="" method="post" role="form" id="form_associate" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <select id="div-associate-user" class="form-control" name="user_id">
                                        <option value="name">Nome</option>
                                    </select>
                                    <label for="Profile">Profile</label>
                                    <select id="div-associate-profile" class="form-control" name="profile_id">
                                        <option value="Profile">Profile</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-cadastrar-profile">Cadastrar</button>
                            </form>
                        </div>

                    </div>
                </div>

                <div id="menu2" class="tab-pane fade in">
                    <br>
                    <form action="" role="form" id="form-buscar" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Pesquise o user ou perfil</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        <hr>
                        <div id="div-user"></div>
                    </form>
                    <br>
                </div>

            </div>

        </div>
    </div>
    <script src="assests/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assests/js/xhttp.js"></script>


</body>

</html>