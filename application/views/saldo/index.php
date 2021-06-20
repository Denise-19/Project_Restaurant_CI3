<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Top Up Saldo</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo.png" sizes="32x32" type="image/x-icon">
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/images/logo.png" sizes="32x32">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:rgb(238, 217, 30)" class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url(); ?>assets/images/logo.png" width="100px" height="100px" />
                                        <h1 class="h4 text-gray-900 mb-4">Pilih Nominal Top Up</h1>
                                    <form class="user" method="post" action="">
                                        <label class="btn btn-danger">
                                            <input type="radio" name="saldo" value="50000" > Rp. 50.000
                                        </label>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="saldo" value="100000"> Rp. 100.000
                                        </label>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="saldo" value="150000"> Rp. 150.000
                                        </label>
                                        </br>
                                        </br>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="saldo" value="200000"> Rp. 200.000
                                        </label>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="saldo" value="250000"> Rp. 250.000
                                        </label>
                                        <label class="btn btn-danger">
                                            <input type="radio" name="saldo" value="300000"> Rp. 300.000
                                        </label>
                                        
                                        </br>
                                        <select style="margin-top:20px;" class="form-control" required>
                                            <option value="">Pilih Metode Pembayaran</option>
                                            <option value="">Bank BCA</option>
                                            <option value="">Bank BNI</option>
                                            <option value="">GoPay</option>
                                        </select>
                                        <button type="submit" name="submit" style="margin-top:20px;"class="btn btn-primary btn-user btn-block">
                                            Top Up
                                        </button>
                                        </form>
                                    </div>
                                    
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>