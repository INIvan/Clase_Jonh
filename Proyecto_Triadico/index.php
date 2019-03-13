
<?php require 'app/app.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'app/components/meta.php';?>
</head>
<body>

<header>
<?php require 'app/components/navbar.php';?>
</header>

<?php require 'app/components/slider.php';?>

       <!--  <section id="heroscreen" id="home" class="col-12 col-sm col-md col-lg col-lx">

            <div class="row">

                <div class="heroscreen_background imgLiquidNoFillLeft">
                    <img src="img/stroke.png" alt="Bienvenida">
                </div>

                <div class="heroscreen_text">

                    <h1 class="col-lx col-lg col-md col-sm col"> Oskar Schlemmer</h1>
                    <p class="info_blanco">Ballet Triádico 3D</p>
                    <a type="button" href="htpps://www.youtube.com" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">Ver video</a>
                  </div>
            </div>

</section>
 -->

<!-- SECCIONES -->

<!-- AMARILLO -->
<?php require 'app/components/amarillo.php';?>

<!-- ROSA -->
<?php require 'app/components/rosa.php';?>

<!-- NEGRO -->
<?php require 'app/components/negro.php';?>

<!-- VIDEO -->
<?php require 'app/components/video.php';?>

</main>

<!-- FOOTER -->

    <!--INFORMACIÓN - REDES -->
    <?php require 'app/components/footer.php';?>

<!-- SCRIPTS -->
    <?php require 'app/components/script.php';?>


<!-- VESTUARIO -->    
    <?php require 'app/components/leyes.php';?>



</body>
</html>