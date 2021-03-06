<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boulevard Sul - Admin</title>

        <!-- Bootstrap core CSS -->
        <link rel="shortcut icon" href="View/Pagina/Front/images/favicon.ico">
        <link href="View/Admin/AdminTemplate/css/bootstrap.min.css" rel="stylesheet">

        <link href="View/Admin/AdminTemplate/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="View/Admin/AdminTemplate/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="View/Admin/AdminTemplate/css/custom.css" rel="stylesheet">
        <link href="View/Admin/AdminTemplate/css/icheck/flat/green.css" rel="stylesheet">


        <script src="View/Admin/AdminTemplate/js/jquery.min.js"></script>

        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>

    <body style="background:#F7F7F7;">

        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>

            <div id="wrapper">
                <div id="login" class="animate form">
                    <section class="login_content">
                        <form id="defaultForm" method="POST" action="" class="form-horizontal">
                            <h1>Login</h1>
                            <p style="color:red">
                                <?php
                                if (isset($msj)) {
                                    echo $msj . '<br>';
                                }
                                ?>
                            </p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default" name="submit" value="Entrar">
                                <a class="reset_pass" href="#">Recuperar contraseña</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

                            <!--<p class="change_link">Eres nuevo?
                                <a href="#toregister" class="to_register"> Crear Cuenta </a>
                            </p>-->
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <div class="col-lg-2"></div>
                                    <img src="Img/LogoFront.png" class="col-lg-8"/>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
                <div id="register" class="animate form">
                    <section class="login_content">
                        <form>
                            <h1>Crear Cuenta</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" name="email" required/>
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" name="email" required=/>
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required/>
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

                                <p class="change_link">Ya eres miembro?
                                    <a href="#tologin" class="to_register"> Login </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <img src="View/Admin/AdminTemplate/Logo.jpg" class="col-lg-12"/>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
            </div>
        </div>

    </body>

</html>