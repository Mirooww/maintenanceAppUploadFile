<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Page d'upload</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" type="text/css" media="screen" href="../assets/style/bootperso.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="../assets/style/style.css" />
   </head>
   <body>
      <main class="centered">
         <div class="row col-12 col-sm-10 col-md-6 col-lg-3 centered">
            <div class="box">
               <?php
                  include 'layout/header.php';
               ?>
               <div class="centeredBis">
                  <form action="php/uploadSystem.php" method="post" enctype="multipart/form-data">
                     <p>Select image to upload:</p>
                     <input type="file" name="fileToUpload" id="fileToUpload" />
                     <input type="submit" value="Upload Image" name="submit" />
                  </form>
               </div>
               <p><a href="../index.php">Retour</a></p>

               
            </div>
         </div>
      </main>
   </body>
</html>
