<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container" id="criteria">
        <div class="row">
            <br>
            <!--Nav principal-->
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Users</a></li>,
                <li><a data-toggle="tab" href="#menu0">Profiles</a></li>
                <li><a data-toggle="tab" href="#menu1">Cadastrar</a></li>
                <li><a data-toggle="tab" href="#menu2">Busca</a></li>
            </ul>

            <div class="tab-content">

                <div id="home" class="tab-pane fade in active">
                    <br>
                    <button id="btn-users" class="btn btn-primary btn-xs">Listar users</button>
                    <hr>
                    <div id="div-users"></div>
                </div>

                <div id="menu0" class="tab-pane fade in">
                    <br>
                    <button id="btn-profiles" class="btn btn-primary btn-xs">Listar Profiles</button>
                    <hr>
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
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-cadastrar-user">Cadastrar</button>
                            </form>
                        </div>

                        <div id="cadastroProfile" class="tab-pane fade">

                            <div id="div-create-profile"></div>
                            <!--Form cadastro profile-->
                            <form action="" method="post" role="form" id="form_cadastrar_profile" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nameProfile">Nome</label>
                                    <input type="text" class="form-control" name="nameProfile" id="nameProfile" placeholder="Nome">
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-cadastrar-profile">Cadastrar</button>
                            </form>
                        </div>

                        <div id="associarProfileUser" class="tab-pane fade">

                            <div id="div-create-profile"></div>
                            <!--Form cadastro profile-->
                            <form action="" method="post" role="form" id="form_cadastrar_profile" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nameProfile">Nome</label>
                                    <input type="text" class="form-control" name="nameProfile" id="nameProfile" placeholder="Nome">
                                </div>
                                <button type="submit" class="btn btn-primary" id="btn-cadastrar-profile">Associar</button>
                            </form>
                        </div>

                    </div>
                </div>

                <div id="menu2" class="tab-pane fade in">
                    <br>
                    <form action="" id="form-buscar">
                        <input type="text" name="name">
                        <button type="submit">Buscar</button>
                        <hr>
                        <div id="div-user"></div>
                    </form>
                </div>

            </div>
            <hr>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assests/js/xhttp.js"></script>
    <script src="assests/js/user.js"></script>

</body>

</html>