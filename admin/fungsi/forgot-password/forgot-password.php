<?php 
require '../fungsi.php';

 ?>

<?php 

if (isset($_POST['simpan'])) {
    forgot_password();
}

 ?>

 <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <link rel="icon" type="image/png" href="<?=url()?>images/logo_spp_64x64.png">

    <!-- Title Page-->
    <title>Lupa Password | SPP</title>

    <!-- Fontfaces CSS-->
    <link href="<?=url()?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=url()?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- <?=url()?>Vendor CSS-->
    <link href="<?=url()?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?=url()?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=url()?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                               <h1>Lupa Password ? </h1>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" required="" type="username" autocomplete="off" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" required="" id="txtNewPassword" type="password" name="password" placeholder="Password">
                                </div>
                                       <div class="form-group">
                                    <label>Ulangi Password</label>
                                    <input class="au-input au-input--full" required="" id="txtConfirmPassword" type="password" name="password2" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                
                                </div>
                                <button name="simpan" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Proses</button>
                              
                            </form>
                         <!-- Login -->
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="<?=url()?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=url()?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=url()?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- <?=url()?>Vendor JS       -->
    <script src="<?=url()?>vendor/slick/slick.min.js">
    </script>
    <script src="<?=url()?>vendor/wow/wow.min.js"></script>
    <script src="<?=url()?>vendor/animsition/animsition.min.js"></script>
    <script src="<?=url()?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=url()?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=url()?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=url()?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=url()?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=url()?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=url()?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=url()?>js/main.js"></script>

</body>

</html>
<!-- end document-->