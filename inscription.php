<?php
include 'header.php';

require_once "connexionPdo.php";

$connexionPdo = connexionPdo::getInstance();

?>
    <!-- banner -->
    <div class="banner">
        <img src="images/photos/banner1.jpg"  class="img-responsive" alt="slide">
        <div class="welcome-message">
            <div class="wrap-info">
                <div class="information">
                    <h1  class="animated fadeInDown">Hotel de la Plage</h1>
                    <p class="animated fadeInUp">Inscription</p>
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
                    <form method="POST" role="form" class="wowload fadeInRight" action="inscription.php">
                        <div class="form-group">
                            <input type="text" name="login" class="form-control"  placeholder="Login">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mdp" class="form-control"  placeholder="Mot de passe">
                        </div>

                        <div class="form-group">
                            <input type="text" name="mdp2" class="form-control"  placeholder="Confirmez mot de passe">
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" class="form-control"  placeholder="Adresse email">
                        </div>
                        <button class="btn btn-default" type="submit">Inscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->

<?php include 'footer.php';?>