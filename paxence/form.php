<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EPSILON - Upload</title>
</head>
<body class="bg-no-repeat min-h-[100vh] bg-gradient-to-b from-fuchsia-300 to-violet-400 text-green-600">
    <div class="w-1/4 mx-auto mt-32 h-64 bg-gradient-to-b from-white text-center rounded-lg">
        <?php include "./header.php" ?>
        <form method="post" action="form.php" enctype="multipart/form-data" class="my-5">
            <input type="file" name="uploadedFile" action="form.php"/>
            <button type="submit" name="submit" class="underline">Upload</button>
        </form>
        <p>Copyright 2024 @ Epsi Lille</p>

    </div>

</body>
</html>

<?php

if (isset($_POST["submit"])){

    $targetDirectory = "./uploadedFiles/";
    $fileToUpload = $_FILES["uploadedFile"];
    $fileName = basename($fileToUpload["name"]);
    $fileDirectory = $targetDirectory . $fileName;
    $fileExtension = substr($fileName, strpos($fileName, "."), strlen($fileName)-1);
    $extensionsAllowed = [".pdf", ".png", ".jpg", ".webp", ".doc", ".docx", ".dot", ".dotx"];

    // condition 1: vérifier si l'extension du fichier est autorisé
    if (in_array($fileExtension, $extensionsAllowed)){
        // condition 2: le fichier a bien été uploadé dans son dossier
        if (move_uploaded_file($fileToUpload["tmp_name"], $fileDirectory)){
            echo "<p class='text-center'>Fichier uploadé avec succès.</p>";
        } else {
            echo "<p class='text-center'>Echec dans l'upload du fichier.</p>";
        }
    } else {
        echo "<p class='text-center'>L'extension du fichier n'est pas valide.</p>";
    }
}

?>