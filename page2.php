<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reservation</title>
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
    <style>
        h1, h3{
            padding : 40px;
            font-family : arial;
            margin : 10px;
        }
        .half{
            width : 50%;
            padding : 40px;
        }
        input[type=text]{
            width : 100%;
            padding : 12px 22px;
            margin : 10px;
            border : solid 2px #001D38;
            border-radius : 6px;
        }
        input[type=submit]{
            padding : 12px 20px;
            background-color : #F91842;
            border-color : #F91842;
            color : white;
            border-radius : 6px;
            margin-bottom : 40px;
        }
    </style>
</head>
<body>
    <center>
    <h1>Confirmer votre commande</h1>
    <h3>vol selecionnée</h3>

    <?php
    $connect = new Mysqli("localhost", "root", "", "gestion_vols");
    $sql = "SELECT * FROM vol WHERE id =".$_GET['id'];
    $result = mysqli_query($connect, $sql);
    
    ?>

<div>
    <div id="table_class" class="container">
        <table id="data" class="table table-bordered">
                <tr>
                    <th width="10%">Numero de vol</th>
                    <th width="10%">Lieu Depart</th>
                    <th width="10%">Lieu Arrive</th>
                    <th width="10%">Date Depart</th>
                    <th width="10%">Date Arrive</th>
                    <th width="10%">Prix (DH)</th>
                    <th width="10%">Nombre des places</th>
                </tr>
                <?php while($row = mysqli_fetch_object($result)){ ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->lieu_depart ?></td>
                    <td><?php echo $row->lieu_arrive ?></td>
                    <td><?php echo $row->date_depart ?></td>
                    <td><?php echo $row->date_arrive ?></td>
                    <td><?php echo $row->prix ?>DH</td>
                    <td><?php echo $row->nom_places ?></td>
                </tr>
                <?php } ?>
        </table>
    <form action="insert.php" method="POST">
        <div class="half">
         Nom :  <input name="Nom" type="text" placeholder="Entrer votre nom"><br>
         Prenom : <input name="Prenom" type="text" placeholder="Entrer votre prenom"><br>
         Address : <input name="Address" type="text" placeholder="Entrer votre address"><br>
         CodePostal : <input name="CodePostal" type="text" placeholder="Entrer votre codepostal"><br>
         Ville : <input name="Ville" type="text" placeholder="Entrer votre ville"><br>
         Numero Passport : <input name="NumeroPassport" type="text" placeholder="Entrer numero passport"><br>
         Nombre des places à reservées : <input name="Numplaces" type="text" placeholder="Entrer le nombres des places reservees"><br>
        </div>
        <a href="insert.php?id=<?php echo $row->id ?>"><input type="submit" value="Confirmer votre commande" name="submit"></a>
    </form>
    </div>
</div>
    </center>

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
                            <form class="newsletter_form">
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