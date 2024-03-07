<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title>Uploadé</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" type="text/css" media="screen" href="../assets/style/bootperso.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="../assets/style/style.css" />
</head>

<body>
   <main class="centered">
      <div class="row col-12 col-sm-9 col-md-6 col-lg-3 centered">
         <div class="box">
            <?php
               include 'layout/header.php';

            ?>
            <div class="centeredBis">
            <?php
               if(isset($_SESSION['message'])){
                  echo $_SESSION['message'];
                  unset($_SESSION['message']); // supprimez le message après l'avoir affiché
               }
            ?>
            </div>

            <p><a href="../index.php">Retour</a></p>

         </div>
      </div>
   </main>
</body>

</html>