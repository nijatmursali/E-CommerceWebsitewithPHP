<style media="screen">

.form-group {

	color: #000;
}
@media(max-width:760px) {
	.btn .btn-success .pull-right {
		text-align: left;
		padding-right: 50px;
		margin-right: 50px;
	}

}


</style>



<button type="button" id="buttongirish"class="btn btn-success pull-right" data-toggle="modal" data-target=".bs-example1-modal-lg">
	Giriş
</button>
<div class="modal fade bs-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div style="background-image: url('productimages/hero.jpg');background-position = center; background-repeat: no-repeat; background-size:cover;" class="modal-content">
			<div class="container">
				<div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-info" >
						<div class="panel-heading">
							<div class="panel-title">
								Sistemə daxil ol.
							</div>

							<div style="float:right; font-size: 100%; position: relative; top:-10px">
								İstifadəçi
							</div>
						</div>
						<div style="padding-top:30px" class="panel-body" >

							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

						<form id="loginform" method="post" action="user.php" class="form-horizontal" role="form">

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" required name="user" type="text" class="form-control" name="user" value="" placeholder="istifadəçi adı və ya maili daxil edin">
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="login-password" required name="password" type="password" class="form-control" name="password" placeholder="parolu daxil edin">
							</div>

							<div style="margin-top:10px" class="form-group">
								<!-- Button -->
								<div class="col-md-offset-3 col-md-9">
									<input name="signin"  class="btn btn-info" value="Sistemə daxil ol" type="submit" />

								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										Hesabım yoxdur.
										<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Burdan qeydiyyatdan keçin. </a>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
			<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							Qeydiyyatdan keç
						</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px">
							<a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Giriş et</a>
						</div>
					</div>
					<div class="panel-body" >
						<form id="signupform" class="form-horizontal" role="form" method="post" action="user.php">

							<div class="form-group">
								<label for="email" class="col-md-3 control-label">İstifadəçi adı:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" name="email" placeholder="İstifadəçi adı">
								</div>
							</div>

							<div class="form-group">
								<label for="firstname" class="col-md-3 control-label">Adınız:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" name="firstname" placeholder="Adınız">
								</div>
							</div>
							<div class="form-group">
								<label for="lastname" class="col-md-3 control-label">Soyadınız:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" name="lastname" placeholder="Soyadınız">
								</div>
							</div>
							<div class="form-group">
								<label for="number" class="col-md-3 control-label">Əlaqə nömrəniz:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" maxlength="10" name="number" placeholder="Əlaqə nömrəniz" onkeypress="return isNaN">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Parolunuz:</label>
								<div class="col-md-9">
									<input type="password" required class="form-control" name="passwd" placeholder="Parolunuz">
								</div>
							</div>

							<div class="form-group">
								<!-- Button -->
								<div class="col-md-offset-3 col-md-9">
									<input id="btn-signup" type="submit" name="signup" value="Qeydiyyatdan keç" class="btn btn-info" />

								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
