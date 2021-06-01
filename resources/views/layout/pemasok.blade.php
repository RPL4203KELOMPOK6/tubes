<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alboem</title>
    <!-- IMPORT JQUERY -->
    <script src='assets/js/jquery-3.4.1.min.js'></script>
    <!-- IMPORT POPPER FOR DROPDOWN NAVBAR -->
    <script src='assets/js/popper.min.js'></script>
    <!-- IMPORT POPPER FOR BOOTSTRAP JS NAVBAR -->
    <script src='assets/js/bootstrap.min.js'></script>


    <!-- IMPORT BOOTSTRAP -->
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style/bootstrap.css'>
    <!-- IMPORT OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/style/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/style/owl.theme.default.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style/animate.css'>
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- IMPORT FONT AWESOME LIBRARY ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- IMPORT MANUAL STYLE -->
    <link rel='stylesheet' type='text/css' media='screen' href='assets/style/style.css'>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light container ">
        <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
    </nav>
    <div class="primary-bg">
        <table>
            <tr>
                <td class="col-6">
                    <h5 class="text-white font-weight-bold" style="padding: 10px; padding-left: 60px;">Pemasok</h5>
                </td>
                <td class="nav-item dropdown mx-md-3 mx-0" style="padding-right: 80px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/account.png" alt="">
                    </a>
                    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                        <div class="d-flex shadow-sm align-item-center rounded-small p-2">
                            <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold"> John Doe</span>
                        </div>
                        <a href="#">
                            <div  class="shadow-sm mt-2 rounded-small p-2">
                                <p class="text-gray font-weight-bold">Your Favorite Shop</p>
                            </div>
                        </a>
                        <a href="#">
                            <div  class="shadow-sm mt-2 rounded-small p-2">
                                <p class="text-gray font-weight-bold">Your Favorite Shop</p>
                            </div>
                        </a>
                        <a href="#">
                            <div  class="shadow-sm mt-2 rounded-small p-2">
                                <p class="text-gray font-weight-bold">Your Favorite Shop</p>
                            </div>
                        </a>
                          <p class="text-gray font-weight-bold text-right mt-4 cursor-pointer">Logout <i class="ml-1 fa fa-sign-out-alt"></i></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    @yield('container')
    <section class="footer mt-3 primary-bg text-white">
        <div class="container pt-4">
            <div class="d-flex justify-content-between flex-column flex-md-row">
                <div>
                    <h3 class="font-weight-bold ">Alboem</h3>
                    <p class="font-weight-bold"><i>Our tim menyediakan layanan platform jual beli album</i></p>
                </div>
                <div class="mr-5 mt-3 mt-md-0">
                    <h5 class="font-weight-bold ">Find Us</h5>
                    <a href="#"> <img src="assets/img/facebook-24px 1.png" alt=""></a>
                    <a href="#" class="ml-2"> <img src="assets/img/youtube 1.png" alt=""></a>
                    <a href="#" class="ml-2"> <img src="assets/img/Frame.png" alt=""></a>
                </div>
            </div>
            <div class="d-flex mt-5">
                <p class="font-weight-bold">Adress</p>
                <span class="font-weight-bold ml-3">:Perumahan Buah Batu H44</span>
            </div>
            <div class="d-flex  mt-2">
                <p class="font-weight-bold">Phone</p>
                <span class="font-weight-bold ml-3">:08123456789</span>
            </div>
            <div class="d-flex mt-2">
                <p class="font-weight-bold">Email</p>
                <span class="font-weight-bold ml-3">:rpl4203kelompok6@gmail.com</span>
            </div>

        </div>
        <div class="disclaimer mt-5">
            <p class="text-center py-1 font-weight-light content"><i class="far fa-copyright mr-1"></i> 2020. Powered by
                Alboem</p>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
</body>
</html>