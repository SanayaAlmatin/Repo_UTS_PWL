<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary align-items-center">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" action="proses_pelanggan.php" method="post">
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-6 mb-3">
                                            <input type="text" name="nama_pelanggan"
                                                class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Nama Pelanggan">
                                        </div>
                                        <div class="col-md-12 col-sm-6 mb-3">
                                            <input type="text" name="alamat" class="form-control form-control-user"
                                                id="exampleLastName" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="tel" name="telephone" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Telephone">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-6 mb-3 ">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Username">
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleRepeatPassword"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-center my-3">
                                        <input type="submit" name="simpan" value="Register"
                                            class="btn btn-primary btn-user btn-block">
                                    </div>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="login.php">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>