<?php
include 'header.php';

require_once "connexionPdo.php";

$connexionPdo = connexionPdo::getInstance();

$numeroChambre = $_REQUEST['numeroChambre'];
$dateArrivee = date('Y-m-d', strtotime($_REQUEST ['dateArrivee']));
$nombreNuit = $_REQUEST ['nombreNuit'];
$datedepart=strftime("%Y/%m/%d",strtotime("$dateArrivee+$nombreNuit day"));
$laChambre= $connexionPdo->getLaChambre($numeroChambre);
foreach ($laChambre as $colonne){
    $capacite= $colonne["capacite"];
    $tarif= $colonne["tarif"];
}
If(!empty($numeroChambre) && !empty($dateArrivee) && !empty($datedepart)){

    $chambreEstDiponible = $connexionPdo->chambreEstLibre($numeroChambre,$dateArrivee,$datedepart);

}
?>
<!-- banner -->
<div class="banner">
    <img src="images/photos/banner1.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Hotel de la Plage</h1>
                <p class="animated fadeInUp">confirmation de réservation</p>
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
                    <table class="table">
                        <tbody>
                        <?php
                        If ($chambreEstDiponible =! null){
                            for ($i=1; $i<=$nombreNuit;$i++){
                                $datedepart=strftime("%Y/%m/%d",strtotime("$dateArrivee+$i day"));
                                echo"<tr>";
                                $dateformatfrancais= date ('d/m/Y', strtotime($datedepart));
                                echo"<td> chambre n° ".$numeroChambre." est libre ".$dateformatfrancais;
                                echo "</tr>";
                            }
                        }
                        Else{
                            echo "<tr>";
                            echo "<td>";
                            echo "<h4>La chambre demandé n'est pas libre choisir une autre chambre pour la date saisie</h4>";
                            echo "<td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-5 col-md-4">
                <h3>Confirmation</h3>
                <form method="POST" role="form" class="wowload fadeInRight" action="commande.php">

                    <div class="form-group">
                        <label>Nom</label><input type="text"name="nom" class="form-control">
                        <input name="numeroChambre" type="hidden" value="<?php echo $numeroChambre; ?>" />
                        <input name="dateArrive" type="hidden" value="<?php echo $dateArrivee; ?>" />
                        <input name="nombreNuit" type="hidden" value="<?php echo $nombreNuit; ?>" />
                        <input name="capacite" type="hidden" value="<?php echo $capacite; ?>" />
                        <input name="tarif" type="hidden" value="<?php echo $tarif; ?>" />

                    </div>

                    <div class="form-group">
                        <label>Prénom</label><input type="text"name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mail</label><input type="email" name="mail" class="form-control">
                    </div>
                    <button class="btn btn-default">Confirmer</button>
                </form>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                        <table class="table">
                            <tbody>
                            </tbody>
                        </table>
                    </div>
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
