<!DOCTYPE html>
<html lang="en">
<?php
    $name = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $address = $_POST['Address'];
    $codepostal = $_POST['CodePostal'];
    $ville = $_POST['Ville'];
    $num_passport = $_POST['NumeroPassport'];
    $num_places = $_POST['Numplaces'];

    $dbconnect = mysqli_connect('localhost', 'root', '', 'gestion_vols');

    // if(mysqli_connect_errno($dbconnect)){
    //     echo "Connexion Echouée";
    // }else{
    //     echo "Connecté";
    // }

    $sql = "INSERT INTO client(CodeClient, Nom, Prenom, Address, CodePostal, Ville, NumeroPassport, Num_places) values('', '$name', '$prenom', '$address', '$codepostal', '$ville', '$num_passport', '$num_places')";

    $run = mysqli_query($dbconnect, $sql);
    if($run == TRUE){
        echo "Les informations inserees";
    }else{
        "il y a un probleme";
    }

?>

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Confirmation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        <!-- footer start -->
        <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br>
                                picture placing drawing.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">SEO/SEM </a></li>
                                <li><a href="#">Web design </a></li>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Digital marketing</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Souscrire
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Souscrire</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!--/ footer end  -->

        <!-- link that opens popup -->
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>
</body>