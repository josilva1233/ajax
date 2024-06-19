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
        <h1>Tela de Login</h1>
        <div class="row">
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active">
                    <div id="div-login-user"></div>
                    <!--Form cadastro users-->
                    <form action="" method="post" role="form" id="form_login_user" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="current-email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" autocomplete="current-password">
                        </div>
                        <button type="submit" class="btn btn-primary" id="btn-cadastrar-user">Logar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assests/js/scriptLogin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assests/js/xhttp.js"></script>


</body>

</html>