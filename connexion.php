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
                    <p class="animated fadeInUp">Connexion</p>
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
                    <h3>Connexion</h3>
                    <form method="POST" role="form" class="wowload fadeInRight" action="connexion.php">
                        <div class="form-group">
                            <input type="text" name="login" class="form-control"  placeholder="Login">
                        </div>

                        <div class="form-group">
                            <input type="text" name="motDePasse" class="form-control"  placeholder="Mot de passe">
                        </div>
                        <button class="btn btn-default" type="submit">Connexion</button>
                        <button class="btn btn-default" href="inscription.php"><a href="inscription.php" style="color: white;">Inscription</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->

<?php include 'footer.php';?>