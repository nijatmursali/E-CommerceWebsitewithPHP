
<?php 
    session_start();
?>

<?php

    $_SESSION['Email'] = null ;
    $_SESSION['FirstName'] = null ;
    $_SESSION['LastName'] = null ;
    $_SESSION['role'] = null ;
    $_SESSION['Mob'] = null ;
    $_SESSION['password'] = null ;

    header("Location: ../index.php");


?>

