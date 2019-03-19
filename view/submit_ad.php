<style media="screen">

#option1 , #option2, #option3 {

	padding-left: 10px;
	text-align: center;
	direction: rtl;
}
body {

	background-color: #f9f9f9;
}
.control-group {
	background-color: #fff;
}
.control-group {
	color: #000;
}
#container {
	background-color: #f9f9f9;
	color: #bd0000;
	width: 1000px;
}


#Inputimg {

	border-radius: 5px;
}

.pond-inner {
	position: relative;
	overflow: hidden;
}
.pond-new-img-button {
	float: none;
	width: auto;
	display: inline-block !important;
	cursor: pointer;
	margin: 0;
	padding: 6px 10px;
	border-radius: 5px;
	border: 1px solid #ccc;
	background-color: #eee;
	background-image: linear-gradient(rgb(238, 238, 238), rgb(221, 221, 221));
	box-shadow: inset 0px 0px 2px #fff;
	text-shadow: 1px 1px 0px #f0f0f0;
}
.lot-form input {
	vertical-align: middle;
}
.pond-new-img-field {
	position: absolute;
	z-index: 0;
	top: 0px;
	left: 0px;
	width: 1px;
	height: 1px;
	opacity: 0;
}
.pond-message {
	margin-top: 10px;
}
.pond-img-list {
	width: 390px;
	overflow: hidden;
	white-space: normal;
	margin-top: 20px;
	margin-left: -10px;
}
#something {
	background-color: #f9f9f9;
}


</style>



<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example3-modal-lg">
	Elanı yerləşdirin!
</button>
<div class="modal fade bs-example3-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="container-fluid" id = "something">
				<h1 style="color:#000;">Yeni elan</h1>

				<form id="registerForm" action="add.php" method="post"  enctype="multipart/form-data" class="form-horizontal span8">
					<div class="control-group">
						<label class="control-label" for="ad_title">Elanın adı</label>
						<div class="controls">
							<input type="text" required id="user_ad_title" class="form-control" name="Title" maxlength="15" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="city">Şəhər</label>
						<div class="controls">
							<input type="text" required id="user_city" class="form-control" name="Sheher" maxlength="15" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="discription">Əlavə məlumat</label>
						<div class="controls">
							<textarea class="form-control" rows="3" cols="17" name="Description"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="last_name">Qiyməti</label>
						<div class="controls">
							<input type="text" required class="form-control" name="price" id="user_price" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="discription">Hansı kateqoriyaya aiddir</label>
						<div class="controls">
							<select name="Category" >
								<option value="Antique" disabled selected>Siyahıdan seçin</option>

								<option value="1">Elektronika</option>
								<option value="2" id="option1">Telefonlar</option>
								<option value="3" id="option1">Nömrələr və SİM-kartlar</option>
								<option value="4"id="option1">Audio və video</option>
								<option value="5"id="option1">Kompyüter aksesuarları</option>
								<option value="6"id="option1">Komponentlər və monitorlar</option>
								<option value="7"id="option1">Noutbuklar və Netbuklar</option>
								<option value="8"id="option1">Oyunlar, pultlar və proqramlar</option>
								<option value="9"id="option1">Foto texnika</option>
								<option value="10"id="option1">Ofis avandanlığı və istehlak</option>
								<option value="11"id="option1">Masaüstü kompyuterlər</option>

								<option value="12">Daşınmaz əmlak</option>
								<option value="13"id="option2">Mənzillər</option>
								<option value="14"id="option2">Villalar, bağ evləri</option>
								<option value="15"id="option2">Torpaq</option>
								<option value="16"id="option2">Obyetklər və ofislər</option>
								<option value="17"id="option2">Xaricdə əmlak</option>
								<option value="18"id="option2">Qarajlar</option>

								<option value="19">Avtomobillər</option>
								<option value="20"id="option2">Ehtiyat hissələri və aksesuarlar</option>
								<option value="21"id="option2">Avtomobillər</option>
								<option value="22"id="option2">Avtobuslar və xüsusi texnika</option>
								<option value="23"id="option2">Motosikletlər</option>

								<option value="24">Hobbi</option>
								<option value="25" id="option2">İdman və asudə</option>
								<option value="26"id="option2">Musiqi alətləri</option>
								<option value="27"id="option2">Kolleksiya</option>
								<option value="28"id="option2">Kitab və jurnallar</option>
								<option value="29"id="option2">Velosipedlər</option>
								<option value="27"id="option2">Biletlər və səyahət</option>

								<option value="30">Şəxsi əşyalar</option>
								<option value="31"id="option2">Saat və zinət əşyaları</option>
								<option value="32"id="option2">Geyim və ayaqqabılar</option>
								<option value="33"id="option2">Sağlamlıq və gözəllik</option>
								<option value="34"id="option2">Aksesuarlar</option>

								<option value="35">Ev və bağ</option>
								<option value="36"id="option2">Mebel və interyer</option>
								<option value="37"id="option2">Məişət texnikası</option>
								<option value="38"id="option2">Təmir və tikinti</option>
								<option value="39"id="option2">Qab-qacaq</option>

								<option value="7">İdman</option>
								<option value="7"id="option2">Her hansi</option>
								<option value="7"id="option2">Her hansi</option>
								<option value="7"id="option2">Her hansi</option>
								<option value="7"id="option2">Her hansi</option>

								<option value="8">Telefonlar</option>
								<option value="8"id="option2">Her hansi</option>
								<option value="8"id="option2">Her hansi</option>
								<option value="8"id="option2">Her hansi</option>
								<option value="8"id="option2">Her hansi</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-lebel" for="" style="margin-top: 5px;"> Şəkil əlavə edin! </label>
						<div class="controls"></div>

						<div class="pond-inner" >
							<label class="pond-new-img-button pond-new-img" for="Inputimg">Şəkil əlavə etmək</label>
							<input name="file" class="pond-new-img-field" id="Inputimg" type="file" accept="image/*">
							<div class="pond-message">

							</div>
							<div class="pond-img-list ui-sortable">

							</div>
						</div>
					</div>

					<hr />
					<div class="control-group">
						<label class="control-label" for="first_name">Adınız</label>
						<div class="controls">
							<input type="text" required class="form-control" name="name" id="user_first_name" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="email">Mailiniz və ya username</label>
						<div class="controls">
							<input type="text" required class="form-control" name="email" id="user_email" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="text">Telefon nömrəniz</label>
						<div class="controls">
							<input type="text" required class="form-control" name="number" id="user_number" />
						</div>
					</div>
					<br />
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-primary btn-lg btn-block" style="position:relative; z-index:1; cursor:pointer; display:inline-block; background-color:#ff6617;-webkit-transition:all cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.3s; transition:all cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.3s;" name="submit" value="Elanı yerləşdir!"/>


						</div>
					</div>
					<br />
				</form>

			</div>

		</div>
	</div>
</div>
