<?php
    include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Roboto:400"/>
		<?php
		require 'header.php';
		?>

		<style media="screen">

				.carousel.slide {
					margin-top: 0px;
				}



		</style>

	</head>


	<body>

		<div class="container-fluid">

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
                            <h2><?php echo $_SESSION['FirstName'];?></h2>           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><?php echo $_SESSION['Mob'];?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $_SESSION['Email'];?></p></li>
                          </ul>
                          <hr>
                          <div class="col-sm-5 col-xs-6 tital " >Daxil olma tarixi: 15 Jun 2016</div>
                      </div>
                </div>
            </div>
            </div>
           
		</div>

	</body>
</html>