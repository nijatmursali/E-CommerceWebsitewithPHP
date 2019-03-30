<?php 

    include "../db.php";
?>
<?php 

    session_start();
?>

<?php

    if(isset($_POST['login'])) {
       $username = $_POST['username'];
       $password =  $_POST['password'];


        mysqli_real_escape_string($connection, $username);
        mysqli_real_escape_string($connection, $password);

        $query = "SELECT * FROM admin WHERE Email='{$username}'";

        $select_admin_query = mysqli_query($connection, $query);

        if(!$select_admin_query) {
            die("Query failed".mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($select_admin_query)) {
            $db_adminid = $row['uid'];
            $db_adminLogin = $row['Email'];
            $dbadminFname = $row['FirstName'];
            $dbadminLname = $row['LastName'];
            $dbadminrole = $row['role'];
            $dbadminMob = $row['Mob'];
            $dbadminpass = $row['password'];

        }

        if($username !== $db_adminLogin && $password !==$dbadminpass) {
            header("Location: ../loginForm.php");
        } else if($username == $db_adminLogin && $password == $dbadminpass) {
            $_SESSION['Email'] = $db_adminLogin ;
            $_SESSION['FirstName'] = $dbadminFname ;
            $_SESSION['LastName'] = $dbadminLname ;
            $_SESSION['role'] = $dbadminrole ;
            $_SESSION['Mob'] = $dbadminMob ;
            $_SESSION['password'] = $dbadminpass ;

            header("Location: ../loggedIn.php");
        } else {
            header("Location: ../loginForm.php");
        }
    }

?>