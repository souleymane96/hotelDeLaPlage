<?php
include 'header.php';

require_once "connexionPdo.php";

$connexionPdo = connexionPdo::getInstance();

$numeroChambre=$_REQUEST["numeroChambre"];
$dateArrivee=$_REQUEST["dateArrive"];
$nombreNuit=$_REQUEST["nombreNuit"];
$capacite=$_REQUEST["capacite"];
$tarif=$_REQUEST["tarif"];
$nom=$_REQUEST["nom"];
$prenom=$_REQUEST["prenom"];
$mail=$_REQUEST["mail"];


?>
    <!-- banner -->
    <div class="banner">
        <img src="images/photos/banner1.jpg"  class="img-responsive" alt="slide">
        <div class="welcome-message">
            <div class="wrap-info">
                <div class="information">
                    <h1  class="animated fadeInDown">Hotel de la Plage</h1>
                    <p class="animated fadeInUp">Finalisation de la réservation</p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-->


    <!-- reservation-information -->
    <div id="information" class="spacer reserve-info ">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                        <p style="text-align: center">Récapitulatif du séjour</p>
                        <table class="table">
                            <tbody class="thead-dark">
                            <tr>
                                <?php
                                for ($i=1; $i<=$nombreNuit;$i++){
                                    $datedepart=strftime("%Y/%m/%d",strtotime("$dateArrivee+$i day"));
                                    echo"<tr>";
                                    $dateformatfrancais= date ('d/m/Y', strtotime($datedepart));
                                    echo"<td> chambre n° ".$numeroChambre." est libre ".$dateformatfrancais;
                                    echo "</tr>";
                                }
                                ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                        <?php
                        $dateReservation=date ('Y-m-d');
                        if (!empty($numeroChambre) &&!empty($dateReservation)&& !empty($nom)&& !empty($prenom)&& !empty($mail)){
                            $connexionPdo->insertReservation($numeroChambre,$dateReservation,$nom,$prenom,$mail);
                        }
                        echo "<p>Réserver au nom de ".$prenom  ." ".$nom."</p>";
                        echo "<p> Chambre pour ".$capacite." personnes";
                        echo "<p> mail : ".$mail."</p>";
                        //echo "chambre pour : ".$nombre;
                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- reservation-information -->



    <!-- services -->
    <div class="spacer services wowload fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->


<?php include 'footer.php';?>