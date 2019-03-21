<?php

require('user.php');

?>

<?php 

    //if(isset($_GET['username'])) {
        //$username = $_GET['username'];

        $ccn = mysqli_connect("localhost","root","")or die("connecton error");
		mysqli_select_db($ccn,'barter');
        
        $userquery = mysqli_query($ccn,"SELECT * FROM details WHERE Email='javid'") or die("");
        if(mysqli_num_rows($userquery) !=1) {
            die("");
        }
        while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)) {
            $firstname = $row['FirstName'];
            $lastname = $row['LastName'];
            $email = $row['Email'];
            $mobile = $row['Mob'];
            $pass = $row['password'];

        }
    //}



?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400"/>
		<?php
		require 'view/common/head.php';
		?>

		<style media="screen">

				.carousel.slide {
					margin-top: 0px;
				}



		</style>

	</head>


	<body>

		<div class="container-fluid">
			<?php

			require 'view/common/nav.php';
			?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >Istifadəçi profili</h4></div>
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2><?php echo $firstname;?> <?php echo $lastname;?></h2>           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php echo $mobile;?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $email;?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " >Daxil olma tarixi: 15 Jun 2016</div>
                      </div>
                </div>
            </div>
            </div>
            <?php
			require 'view/common/footer.php';
			?>
		</div>

	</body>
</html>