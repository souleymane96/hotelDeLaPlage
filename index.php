<?php
include 'header.php';

require_once "connexionPdo.php";

$connexionPdo = connexionPdo::getInstance();

$lesChambres = $connexionPdo->getLesChambres();
?>
<!-- banner -->
<div class="banner">
    <img src="images/photos/banner1.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Hotel de la Plage</h1>
                <p class="animated fadeInUp">Site de réservation des chambres de l'Hotel de la Plage</p>
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
            <thead class="thead-dark">
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Description</th>
                <th scope="col">Personnes</th>
                <th scope="col">Tarif</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($lesChambres as $uneChambre) {
                echo "<tr>";
                    echo "<td>".$uneChambre["numero"]."</td>";
                    echo "<td>".$uneChambre["description"]."</td>";
                    echo "<td>".$uneChambre["capacite"]."</td>";
                    echo "<td>".$uneChambre["tarif"]."£"."</td>";
                echo "</tr>";
                }
             ?>
            </tbody>
        </table>
    </div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Réservation</h3>
    <form method="POST" role="form" class="wowload fadeInRight" action="confirmation.php">
        <div class="form-group">
            <input type="text" name="numeroChambre" class="form-control"  placeholder="Numero de chambre">
        </div>

        <div class="form-group">
            <label>Date d'arrivée</label><input type="date" name="dateArrivee" class="form-control"  placeholder="Date">
        </div>

        <div class="form-group">
            <input type="text" name="nombreNuit" class="form-control"  placeholder="Nombre de nuits">
        </div>
        <button class="btn btn-default">Réserver</button>
    </form>    
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
            <div class="caption">Nos chambres<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
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
            <div class="caption">Forfaits touristiques<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
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
            <div class="caption">Services de chambres<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>