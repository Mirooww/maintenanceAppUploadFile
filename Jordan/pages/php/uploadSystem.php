<?php
session_start();
$target_dir = "../../assets/uploadedImage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $_SESSION['message'] = "Sorry, your file is too large.";
    header("Location: ../afterUpload.php");


  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "pdf" ) {
    $_SESSION['message'] = "    Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
    header("Location: ../afterUpload.php");

  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['message'] = "Sorry, your file was not uploaded.";
    header("Location: ../afterUpload.php");


// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $_SESSION['message'] = "Your file was uploaded";
    header("Location: ../afterUpload.php");

    exit;   } else {
        $_SESSION['message'] = "Sorry, there was an error uploading your file.";
        header("Location: ../afterUpload.php");


  }
}
?>
