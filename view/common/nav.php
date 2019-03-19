<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style media="screen">

	html, body {

		margin-right: 0;
	}


	#anasehife, #haqqimizda,#elaqe  {

		font-size: 16px;
		color: #fff;
		font-family: 'Raleway', sans-serif;
	}
	#anasehife:hover {
		color: #fff;
		background-color: #000;
	}

	#haqqimizda:hover {
		color: #fff;
		background-color: #000;
	}
	.btn-warning {
			margin-top: 2px;
			color: #fff;
	}
	.btn-warning:hover {

	}
	#elaqe:hover {
		color: #fff;
		background-color: #000;
	}
	.row {
		background-color: #f9f9f9;
	}
	.row.clearfix {
		background-color: #FF0077;
		margin-top: 0px;
		padding-top: 10px;

	}


.form-control {

	padding-right: 100px;
	padding-left: 10px;

}


}


nav.black. ul {
	background: #000;
}
nav ul li {
	display: inline-block;
	padding: 5px;
}

nav ul li a{
	text-decoration: none;

}



@media(max-width: 786px) {

	.showing {
		max-height: 36em;
	}
	nav ul {
		max-height: 0px;
		background: #fff;
	}
	nav ul li {
		box-sizing: border-box;
		width: 100%;
		padding: 24px;
		text-align: center;
	}


}
.header-warp {
	max-width: 1496px;
	margin: 0 auto;
	z-index: 99;
	padding: 15px 15px 0;

}
.header-social {
	background-color: #151515;
	width: 100%;
	height: 100%;
	padding-right: 8px;
}

.header-social p {
	display: inline-block;
	color: #FFF;
	font-size: 16px;
	padding-top: 4px;
}

.header-social a {
	display: -ms-inline-flex;
	display: -webkit-inline-box;
	display: -ms-inline-flexbox;
	display: inline-flex;
	width: 32px;
	height: 32px;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	border-radius: 50%;
	color: #fff;
	font-size: 15px;
	margin-left: 13px;
	-webkit-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.header-social a:hover{
	background: #b01ba5;
}
.header-social p:hover {

}
.justify-content-end{
	-ms-flex-pack:end!important
	;justify-content:flex-end!important
}

.d-flex{
	display:-ms-flexbox!important;
	display:flex!important
}
#topBtn{
  position: fixed;
  bottom: 40px;
  right: 40px;
  font-size: 22px;
  width: 50px;
  height: 50px;
  background: #FF0077;
  color: white;
  border: none;
  cursor: pointer;
  display: none;
	z-index: 1;

}



</style>
<header>
	<button type="button" name="button" id = "topBtn"><i class="fas fa-arrow-up"></i></button>
<nav>
	<div class="header-social d-flex justify-content-end">

	<a href="#"><i class="fab fa-facebook"></i></a>
	<a href="#"><i class="fab fa-instagram"></i></a>
	<a href="tel:05555555"><i class="fas fa-phone"></i></a>

	</div>

	<div class="row clearfix" >
		<div class="col-md-12 col-xs-12 column" style="color:#f9f9f9">
			<ul class="nav nav-pills navbar-static-top">

				<li>
					<a id="anasehife"href="index.php">Ana səhifə</a>
				</li>
				<li>
					<a id="haqqimizda"href="contact.php">Haqqımızda</a>
				</li>
				<li>
					<a id="elaqe"href="#">Əlaqə nömrələrimiz</a>
				</li>


				<?php
if (null !==isset( $_SESSION['user'])) {
				?>
				<li>
					<?php
					require 'view/submit_ad.php';
					?>
				</li>
				<?php } ?>


				<li class="pull-right"></li>

				<?php
if (!isset($_SESSION['user'])) {
				?>
				<li class="pull-right">
					<?php
					require 'login_signup.php'; #User eger
					?>
				</li>
				<?php } ?>

				<?php
if (isset( $_SESSION['user'])) {
				?>
				<li class="pull-right">
					<form method="post" action="user.php">
						<input name="logout"  class="btn btn-info" style = "background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);" value="Logout" type="submit" />
					</form>
				</li>
				<li class="pull-right">
				<form method="post" action="userpanel.php">
						<input name="userpanel"  class="btn btn-info" style="background: rgba(59,173,227,1);
    								background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);" value="User paneli" type="submit" />
						</form>
				
				</li>
				<?php } ?> 
				
				

				<li class="pull-right">
					<form method="get" action="products.php">
						<input name="srch" type="text" class="form-control" placeholder="Məsələn, iPhone 5S">
						<input type="submit" style="display: none;" name="search" />
					</form>

				</li>

			</ul>
		</div>
	</div>
</nav>

</header>
	<script type="text/javascript">
	/*
	$(document).ready(function() {
						$(".menu-icon").on("click", function() {
									$("nav ul").toggleClass("showing");
						});
			});

			// Scrolling Effect

			$(window).on("scroll", function() {
						if($(window).scrollTop()) {
									$('nav').addClass('black');
						}

						else {
									$('nav').removeClass('black');
						}
			})
			*/
			$(document).ready(function(){

		  $(window).scroll(function(){
		    if($(this).scrollTop() > 40){
		      $('#topBtn').fadeIn();
		    } else{
		      $('#topBtn').fadeOut();
		    }
		  });

		  $("#topBtn").click(function(){
		    $('html ,body').animate({scrollTop : 0},800);
		  });
		});



	</script>
