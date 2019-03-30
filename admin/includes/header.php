
<?php 
    include "../db.php"
?>
<?php 
    session_start();
?>


<?php 

if(isset($_SESSION['role'])) {
    if($_SESSION['role'] !== 'admin' || $_SESSION == null) {
        header("Location: loginForm.php");
        
    }
}

?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>