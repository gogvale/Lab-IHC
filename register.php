<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Palomita</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="font-size: 3em;">Registro</h4>
                            </div>
                            <form class="user" method="POST" action="dashboard.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input required class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombre" name="first_name" style="font-size: 1.2em;"></div>
                                    <div class="col-sm-6" style="font-size: 1.2em;"><input required class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellidos" name="last_name" style="font-size: 1.2em;"></div>
                                </div>
                                <div class="form-group" style="font-size: 1.2em;"><input required class="form-control form-control-user" type="email" id="exampleinput requiredEmail" aria-describedby="emailHelp" placeholder="Correo" name="email" style="font-size: 1em;"></div>
                                <div class="form-group row" style="font-size: 1.2em;">
                                    <div class="col-sm-6 mb-3 mb-sm-0" style="font-size: 1.2em;"><input required class="form-control form-control-user" type="password" id="examplePasswordinput required" placeholder="Contraseña" name="password" style="font-size: 0.75em;"></div>
                                    <div class="col-sm-6" style="font-size: 1.2em;"><input required class="form-control form-control-user" type="password" id="exampleRepeatPasswordinput required" placeholder="Confirmar contraseña" name="password_repeat" style="font-size: 0.75em;"></div>
                                </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 1.3em;">Registrarse</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="index.php" style="font-size: 1.2em;">Ya tienes cuenta? Ingresa aquí!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>