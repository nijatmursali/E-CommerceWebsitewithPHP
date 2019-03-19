<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require 'view/common/head.php';
		require 'view/common/nav.php';
    require_once 'config.php';
		?>
</head>
<style media="screen">

html, body {
  margin-left: 5px;
  padding-right: 6px;

}

div#contact-box {
  padding-right: 0;
  padding-bottom: 10px;
  padding-top: 30px;
  min-height: 100%;
  max-height: 100%;

}
#contact-box {

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(/hero.jpg);


}



p#contact-text {
  line-height: 1.5em;
  padding-bottom: 10px;
}

div.info-box {
  margin-bottom: 15px;
  background-color: #f9f9f9;
}

.my-info-icons {
  margin-right: 15px;
}

div#info-container {
  padding-bottom: 20px;
  padding-top: 20px;
}

i.form-control-feedback {
  padding-top: 10px;
}

i.form-control-feedback {
  padding-top: 10px;
}

div.site-form {
  padding-top: 10px;
}

button#form-btn {
  border-radius: 0;
  width: 30%;
  height: 40px;
  font-size: 1em;
  background: #fff;
}

form#my-form {
  padding-bottom: 20px;
  padding-top: 20px;
}

.col-12.col-sm-6.col-md-6 {
  background-color: #f9f9f9;

}

.btn .btn-light .btn-lg {
  color: #000;
  background-color: #000;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
  border-radius: 0 !important;
}

</style>
<body>

     <div class="container" id="info-container">
         <div class="row">
             <div class="col-md-12">
                 <h2 class="text-left text-info">Əlaqə saxlayın</h2>
             </div>
             <div class="col-12 col-sm-6 col-md-6" id="contact-box">
                 <p id="contact-text">Həyatınızda görə biləcəyiniz ən əjdaha dizayn ilə qarşınızdayıq. Cavidə özəldi bu, ay qa. </p>
                 <div class="info-box"></div>
                 <div class="info-box"><i class="fa fa-envelope my-info-icons"></i><span class="text-uppercase text-info">Mail: </span><span>javidas@gmail.com</span></div>
                 <div class="info-box"><i class="fa fa-phone-square my-info-icons"></i><span class="text-uppercase text-info">telefon: </span><span>+994......</span></div>
             </div>
             <div class="col-12 col-sm-6 col-md-6 site-form">
                 <form id="my-form">
                     <div class="form-group"><label class="sr-only" for="firstname">Adınız</label><input class="form-control" type="text" name="firstname" placeholder="Adınızı qeyd edin" autofocus="" id="firstname"></div>
                     <div class="form-group"><label class="sr-only" for="lastname">Soyadınız</label><input class="form-control" type="text" name="lastname" placeholder="Soyadınızı qeyd edin" id="lastname"></div>
                     <div class="form-group"><label class="sr-only" for="phonenumber">Əlaqə nömrəniz</label><input class="form-control" type="tel" name="phonenumber" required="" placeholder="Nömrənizi qeyd edin" id="phonenumber"></div>
                     <div class="form-group"><label class="sr-only" for="email">Mail adresiniz</label><input class="form-control" type="text" name="email" required="" placeholder="Mailinizi qeyd edin" id="email"></div>
                     <div class="form-group"><label class="sr-only" for="messages">Fikirləriniz</label><textarea class="form-control" rows="8" name="messages" required="" placeholder="Buraya qeyd edin"></textarea></div>
                     <button class="btn btn-light btn-lg" type="submit" id="form-btn">Göndər </button>

                  </form>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>

    <?php
    require 'view/common/footer.php';
    ?>
</body>
</html>
