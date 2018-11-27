<!DOCTYPE html>
<html lang="en">
    <head>

      <meta charset="utf-8" />
      <!--Import Google Icon Font-->
      <link rel = "stylesheet" href = "fonts/fonts.css">
      <link rel = "stylesheet" type = "text/css" href = "css/index.css">
      <!-- Import Boostrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">

      <!--Opmtimisation pour mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Restaurant</title>
    </head>
    <body>
          <div class="container-fluid">
          <!--L'en-tête -->

            <?php include ("view/menu-top.php");?>


          <!-- Le corps -->
          <?php include ("controler.php"); ?>


          <!-- Import Jquery -->
          <script src="js/jquery-3.3.1.js"></script>
          <!-- Import Boostrap javascript  -->
          <script src="js/bootstrap.js"></script>
        </div>
      </div>
    </div>
    </body>
</html>
