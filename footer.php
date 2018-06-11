



<footer class="spacer">
        <div class="container">
            <div class="row">

                 <div class="col-sm-4">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="rooms-tariff.php">Accueil</a></li>
                        <li><a href="introduction.php">Reservation</a></li>
                        <li><a href="gallery.php">Gallerie</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Souscription</h4>

                   <form method="Get" action="footer.php">
                       <div class="input-group">
                       <input type="text" name="souscription" class="form-control" placeholder="Entrer votre adresse mail">
                       <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Souscrire</button>
                       </div>
                    </span>
                   </form>
                     <?php
                     if(isset($_GET["souscription"])){
                         $destinataire = 'testemail@toutestfacile.com';
                         echo "Ce script envoie un mail à $destinataire";
                         mail($destinataire, 'test email 1', 'merci pour ton tutoriel');
                     }
                     ?>
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Hotel de la plage<a href="http://thebootstrapthemes.com"> hotelDeLaplage.com</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>





<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>



</body>
</html>





