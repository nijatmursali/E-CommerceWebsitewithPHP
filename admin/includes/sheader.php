<?php 
    include "../db.php"
?>
<?php 
    session_start();
?>


<?php 

if(isset($_SESSION['role'])) {
    if($_SESSION['role'] !== 'admin') {
        header("Location: loginForm.php");
        session_destroy();
    } 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nedeten</title>

    <link href="../view/css/bootstrap.min.css" rel="stylesheet">
    <script src="../view/js/jquery.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>

    </head>

<body>