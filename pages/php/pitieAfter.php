<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title>Pokemon Go</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" type="text/css" media="screen" href="../../style/bootperso.css" />
   <link rel="stylesheet" type="text/css" media="screen" href="../../style/style.css" />
</head>

<body>
   <main class="centered">
      <div class="row col-12 col-sm-9 col-md-6 col-lg-3 centered">
         <div class="box">
            <?php
               include '../../componentPage/header.php';
                echo "Le fichier " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a été téléchargé.";
            ?>
         </div>
      </div>
   </main>
</body>

</html>