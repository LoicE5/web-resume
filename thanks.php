<?php include 'assets/.connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks | Loïc Etienne</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body class="thankyou">
    <h1>Thanks you for your message !</h1>
    <h2>I will read it as soon as I can !</h2>
    <a href="index.php" class="mainButton" id="goback">Home Page</a>
</body>
</html>
<?php
        if(isset($_POST["submit"])){
            $mail = mysqli_real_escape_string($conn,$_POST["mail"]);
            $message = mysqli_real_escape_string($conn,$_POST["message"]);
            $query = mysqli_query($conn,"INSERT INTO `cv_data` (mail,message) VALUES ('$mail','$message')") or die('ÇA MARCHE PAS');

        } else {
            echo 'ERROR, please try again';
        }
?>