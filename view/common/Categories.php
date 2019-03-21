<?php 
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "barter";

    foreach($db as $key => $value) {
        define(strtoupper($key), $value);
    }

    $ccn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($ccn) {
        //echo "We are connected";
    }


?> 



<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<style>


    #kateqoriya {

        font-size: 25px;
        font-family: 'Merriweather', serif;
        color: #000;
        text-align: center;

    }

    * {
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -box-sizing: border-box;
    }

    ul {
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }
    h1,
    h2,
    h2,
    h3,
    h4,
    h5 {
        margin: 0.3em 0 0.5em 0;
        font-family: 'Merriweather', serif;

    }
#container {
  width: 200px;
  margin: 0;
  padding: 0px;
  z-index: 999;
}
#mega-menu {
  float: left;
  width: 100%;
  position: relative;

  margin: 0px auto;
}
#mega-menu>ul {
  position: relative;
  background-color: #e9e9e9;
  display: block;
  position: relative;
}
#mega-menu>ul>li {
  display: block;
  width: 100%;
  height: 55px;
  z-index: 999;
}
#mega-menu>ul>li>a {
      padding: 17px;
      color: #333;
      text-decoration: none;
      width: 100%;
      display: block;
      overflow: hidden;
      position: relative;
      border-bottom: 1px solid #ccc;
  }
  #mega-menu>ul>li:last-child>a {
      border-bottom: 0;
  }
  #mega-menu>ul>li>a:before,
  #mega-menu>ul>li>a:after {
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      transition: all 0.5s;
  }
  #mega-menu>ul>li>a:before {
      position: absolute;
      right: 0;
      top: 0;
      bottom: 0;
      width: 60px;
      background-color: transparent;
      content: "";
  }
  #mega-menu>ul>li>a:after {
      position: absolute;
      width: 0;
      height: 0;
      border: 4px transparent solid;
      border-left: 7px #333 solid;
      right: 23px;
      top: 25px;
      content: "";
  }
  #mega-menu>ul>li:hover a:before {
      background-color: #1E9ECF;
  }
  #mega-menu>ul>li:hover a:after {
      border-left-color: #fff;
  }
  #mega-menu>ul>li .mega-submenu {
      width: 0;
      visibility: hidden;
      position: absolute;
      -webkit-transition: width 0.3s;
      -moz-transition: width 0.3s;
      transition: width 0.3s;
  }
  #mega-menu>ul>li:hover .mega-submenu {
      top: 0;
      right: 0;
      left: 100%;
      z-index: 99;
      padding: 20px 30px;
      background-color: #fff;
      color: #fff;
      border: 3px solid #1E9ECF;
      overflow: hidden;
      visibility: visible;
      width: 800px;
      height: 500px;
  }
  .mega-submenu h2 {
      color: #FF0077;
      line-height: 1;
      margin: 0;
      padding-bottom: 10px;
      margin-bottom: 20px;
      border-bottom: 1px solid #eee;
  }
  .mega-submenu .submenu-content {
      display: block;
      overflow: hidden;

      position: relative;
  }
  .menu-item .submenu-content {
      margin-left: -15px;
      margin-right: -15px;
  }
  .menu-item .section {
      width: 33.333%;
      float: left;
      padding: 0 5px;
      position: relative;
  }
  .menu-item .links ul {
      margin: 0;
      padding: 0;
  }
  .menu-item .links ul li {
      display: block;
      border-bottom: 1px solid #eee;
  }
  .menu-item .links ul li:last-child {
      border-bottom: 0;
  }

  .menu-item .links ul li a {
      color: #555;
      display: block;
      text-decoration: none;
      padding: 15px 0;
  }

  .menu-item .featured-product .product-detail {
      border: 1px solid #eee;
      text-align: center;
      position: relative;
  }

  .menu-item .featured-product .product-detail .badge {
      background-color: #FE0000;
      color: #fff;
      font-size: 13px;
      padding: 5px 15px;
      position: absolute;
      right: 15px;
      top: 15px;
  }

  .menu-item .featured-product .product-detail .product-desc {
      padding: 10px 20px 30px 20px;
      font-size: 14px;

  }

  .menu-item .featured-product .product-detail .product-desc a {
      text-decoration: none;
  }

  .menu-item .featured-product .product-detail a.title {
      color: #777;
      text-transform: uppercase;
  }

  .menu-item .featured-product .product-detail a.title:hover {
      color: #1E9ECF;
  }

  .menu-item .featured-product .product-detail .price {
      color: #1E9ECF;
      display: block;
      margin: 10px auto;
      font-size: 15px;
      font-weight: 700;
  }

  .menu-item .featured-product .product-detail .btn-atc {
      color: #fff;
      display: inline-block;
      background-color: #FF0077;
      padding: 8px 15px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      -o-border-radius: 5px;
      border-radius: 5px;
  }

  .menu-item .promotions .promo {
      margin-bottom: 15px;
      padding: 0;
      display: block;
  }

  .menu-item .promotions .promo img {
      border: 1px #ddd solid;
      width: 100%;
      border-radius: 10px;
  }
  @media (max-width:300px) {



  }

</style>

<!--<img id="telefonicon"src="/icons/mobile-512.png" alt=""> -->

<div class="col-md-2" id="container">
    <div class="list-group" id="wrapper">
        <div class="" id="holder">

            <a class="list-group-item">
                <h1 id="kateqoriya">Kateqoriya</h1>
            </a>

              <div id = "mega-menu">

                <ul class="list-unstyled">

                    <?php 
    
                    $query = "SELECT * FROM menu";
                    $select_all_cat_query = mysqli_query($ccn, $query);
                    
                    while($row = mysqli_fetch_assoc($select_all_cat_query)) {
                        $cat_title = $row['label'];

                        //echo "<li class = 'menu-item menu-1'><a href='#'>{$cat_title}</a></li>";
                    }

                    ?>


                    <li class="menu-item menu-1"><a href="products.php?op=list&cat=1" class='list-group-item'>Elektronika <span class="sub-arrow"></span>
                        </a>
                        <div class="mega-submenu">
                            <h2>Elektronika</h2>

                        <div class="submenu-content">
                            <div class="section links">
                                <ul>
                                    <li class="list-inline-item"><a href="products.php?op=list&cat=2"><span class="fas fa-mobile-alt"></span>Telefonlar</li></a>
                                    <li class="list-inline-item"><a href="products.php?op=list&cat=3"><span class="fas fa-sim-card"></span>Nömrələr</li></a>
                                    <li class="list-inline-item"><a href="products.php?op=list&cat=4"><span class="fas fa-volume-up"></span>Audio və video</li></a>
                                    <li class="list-inline-item"><a href="products.php?op=list&cat=5"><span class="fas fa-laptop"></span>Kompyüter aksesuarları</li></a>
                                    <li class="list-inline-item"><a href="products.php?op=list&cat=6"><span class="fas fa-desktop"></span>Komponentlər və monitorlar</li></a>
                                    <li class="list-inline-item"><a href="7"><span class="fas fa-laptop"></span>Noutbuklar və Netbuklar</li></a>
                                    <li class="list-inline-item"><a href="8"><span class="fas fa-gamepad"></span>Oyunlar, pultlar və proqramlar</li></a>
                                    <li class="list-inline-item"><a href="9"><span class="fas fa-camera"></span>Foto texnika</li></a>
                                    <li class="list-inline-item"><a href="10"><span class="fas fa-briefcase"></span>Ofis avandanlığı və istehlak</li></a>
                                    <li class="list-inline-item"><a href="11"><span class="fas fa-desktop"></span>Masaüstü kompyuterlər</li></a>
                                </ul>
                            </div>
                            <div class="section featured-product">
                                <div class="product-detail">
                                    <div class="badge">Önə çıxanlar</div>
                                    <img src="https://media.wired.com/photos/5b22c5c4b878a15e9ce80d92/master/pass/iphonex-TA.jpg" class="thumb" />
                                    <div class="product-desc">
                                        <a class="title" href="#">Telefon satılır</a>
                                        <div class="price">500 AZN</div>
                                        <a href="#" class="btn-atc">Alış veriş</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section promotions">
                                <a href="#" class="promo promo 1">
                                    <img src="https://media.wired.com/photos/5b22c5c4b878a15e9ce80d92/master/pass/iphonex-TA.jpg" class="thumb" />
                                </a>
                                <a href="#" class="promo promo 2">
                                    <img src="https://media.wired.com/photos/5b22c5c4b878a15e9ce80d92/master/pass/iphonex-TA.jpg" class="thumb" />
                                </a>
                            </div>
                          </div>
                        </div>
                    </li>

                    <li class="menu-item menu-2"><a href="products.php?op=list&cat=2" class='list-group-item'>Daşınmaz əmlak <span class="sub-arrow"></span>
                        </a>
                        <div class="mega-submenu">
                            <h2>Daşınmaz əmlak</h2>
                            <div class="submenu-content">

                              <div class="section links">



                        <ul>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-building"></span>Mənzillər</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-home"></span>Villalar, bağ evləri</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-landmark"></span>Torpaq</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-briefcase"></span>Obyetklər və ofislər</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-globe-europe"></span>Xaricdə əmlak</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-warehouse"></span>Qarajlar</li></a>
                        </ul>
                        </div>
                        <div class="section featured-product">
                            <div class="product-detail">
                                <div class="badge">Featured</div>
                                <img src="https://pmcvariety.files.wordpress.com/2018/07/bradybunchhouse_sc11.jpg" class="thumb" />
                                <div class="product-desc">
                                    <a class="title" href="#">Ev satılır</a>
                                    <div class="price">170.000 AZN</div>
                                    <a href="#" class="btn-atc">Alış veriş</a>
                                </div>
                            </div>
                        </div>
                        <div class="section promotions">
                            <a href="#" class="promo promo 1">
                                <img src="https://pmcvariety.files.wordpress.com/2018/07/bradybunchhouse_sc11.jpg" class="thumb" />
                            </a>
                            <a href="#" class="promo promo 2">
                                <img src="https://pmcvariety.files.wordpress.com/2018/07/bradybunchhouse_sc11.jpg" class="thumb" />
                            </a>
                        </div>
                        </div>
                        </div>
                    </li>
                    <li class="menu-item menu-3"><a href="products.php?op=list&cat=3" class='list-group-item'>Avtomobillər<span class="sub-arrow"></span>
                        </a>
                        <div class="mega-submenu">
                            <h2>Avtomobillər</h2>
                            <div class="submenu-content">

                              <div class="section links">
                        <ul class="list-unstyled">
                            <li class="list-inline-item"><a href="#"><span class="fas fa-car"></span>Ehtiyat hissələri və aksesuarlar</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-car"></span>Avtomobillər</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-bus"></span>Avtobuslar və xüsusi texnika</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-motorcycle"></span>Motosikletlər</li></a>
                        </ul>
                      </div>
                      <div class="section featured-product">
                          <div class="product-detail">
                              <div class="badge">Önə çıxan</div>
                              <img src="http://www.auto.az/uploads/az/1112/0621640001323015764.jpg" class="thumb" />
                              <div class="product-desc">
                                  <a class="title" href="#">SATILIR</a>
                                  <div class="price">170.000 AZN</div>
                                  <a href="#" class="btn-atc">Alış veriş</a>
                              </div>
                          </div>
                      </div>
                      <div class="section promotions">
                          <a href="#" class="promo promo 1">
                              <img src="http://www.auto.az/uploads/az/1112/0621640001323015764.jpg" class="thumb" />
                          </a>
                          <a href="#" class="promo promo 2">
                              <img src="http://www.auto.az/uploads/az/1112/0621640001323015764.jpg" class="thumb" />
                          </a>
                      </div>
                      </div>
                      </div>
                    </li>

                    <li class="menu-item menu-3"><a href="products.php?op=list&cat=4" class='list-group-item'>Hobbi<span class="sub-arrow"></span>
                        </a>
                        <div class="mega-submenu">
                            <h2>Hobbi</h2>
                            <div class="submenu-content">

                              <div class="section links">
                        <ul class="list-unstyled">
                            <li class="list-inline-item"><a href="#"><span class="fas fa-basketball-ball"></span>İdman və asudə</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-guitar"></span>Musiqi alətləri</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-money-bill-alt"></span>Kolleksiya</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-book"></span>Kitab və jurnallar</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-bicycle"></span>Velosipedlər</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-ticket-alt"></span>Biletlər və səyahət</li></a>
                        </ul>
                      </div>
                      <div class="section featured-product">
                          <div class="product-detail">
                              <div class="badge">Önə çıxan</div>
                              <img src="https://cdn.shopify.com/s/files/1/0550/6737/products/ORANGEWOOD_OLIVER_CYPRUS_SOLID_TOP_GRAND_CONCERT_ACOUSTIC_GUITAR-2_2000x.png?v=1524595861" class="thumb" />
                              <div class="product-desc">
                                  <a class="title" href="#">Wellness Echinacia</a>
                                  <div class="price">350 AZN</div>
                                  <a href="#" class="btn-atc">Alış veriş</a>
                              </div>
                          </div>
                      </div>
                      <div class="section promotions">
                          <a href="#" class="promo promo 1">
                              <img src="https://cdn.shopify.com/s/files/1/0550/6737/products/ORANGEWOOD_OLIVER_CYPRUS_SOLID_TOP_GRAND_CONCERT_ACOUSTIC_GUITAR-2_2000x.png?v=1524595861" class="thumb" />
                          </a>
                          <a href="#" class="promo promo 2">
                              <img src="https://cdn.shopify.com/s/files/1/0550/6737/products/ORANGEWOOD_OLIVER_CYPRUS_SOLID_TOP_GRAND_CONCERT_ACOUSTIC_GUITAR-2_2000x.png?v=1524595861" class="thumb" />
                          </a>
                      </div>
                      </div>
                      </div>
                    </li>

                    <li class="menu-item menu-4"><a href="products.php?op=list&cat=5" class='list-group-item'>Şəxsi əşya <span class="sub-arrow"></span></a>
                      <div class="mega-submenu">
                          <h2>Şəxsi Əşya</h2>
                          <div class="submenu-content">

                            <div class="section links">
                        <ul class="list-unstyled">
                            <li class="list-inline-item"><a href="#"><span class="fas fa-clock"></span>Saat və zinət əşyaları</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-shoe-prints"></span>Geyim və ayaqqabılar</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-briefcase-medical"></span>Sağlamlıq və gözəllik</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-headphones-alt"></span>Aksesuarlar</li></a>

                        </ul>
                      </div>
                      <div class="section featured-product">
                          <div class="product-detail">
                              <div class="badge">Önə çıxanlar</div>
                              <img src="https://images-na.ssl-images-amazon.com/images/I/71QHGTKiwAL._UX522_.jpg" class="thumb" />
                              <div class="product-desc">
                                  <a class="title" href="#">Saat satılır</a>
                                  <div class="price">300 AZN</div>
                                  <a href="#" class="btn-atc">Alış veriş</a>
                              </div>
                          </div>
                      </div>
                      <div class="section promotions">
                          <a href="#" class="promo promo 1">
                              <img src="https://images-na.ssl-images-amazon.com/images/I/71QHGTKiwAL._UX522_.jpg" class="thumb" />
                          </a>
                          <a href="#" class="promo promo 2">
                              <img src="https://images-na.ssl-images-amazon.com/images/I/71QHGTKiwAL._UX522_.jpg" class="thumb" />
                          </a>
                      </div>
                      </div>
                      </div>
                    </li>

                    <li class="menu-item menu-5"><a href="products.php?op=list&cat=6" class='list-group-item'>Ev və bağ<span class="sub-arrow"></span>
                        </a>
                        <div class="mega-submenu">
                            <h2>Ev və bağ</h2>
                            <div class="submenu-content">

                              <div class="section links">
                        <ul class="list-unstyled">
                            <li class="list-inline-item"><a href="#"><span class="fas fa-couch"></span>Mebel və interyer</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-bath"></span>Məişət texnikası</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-bed"></span>Təmir və tikinti</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fas fa-bath"></span>Qab-qacaq</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-canadian-maple-leaf"></span>Bitkilər</li></a>
                        </ul>
                      </div>
                      <div class="section featured-product">
                          <div class="product-detail">
                              <div class="badge">Önə çıxanlar</div>
                              <img src="https://lab.devaradise.com/codepen-assets/featured-product.jpg" class="thumb" />
                              <div class="product-desc">
                                  <a class="title" href="#">Wellness Echinaciae</a>
                                  <div class="price">170 AZN</div>
                                  <a href="#" class="btn-atc">Alış veriş</a>
                              </div>
                          </div>
                      </div>
                      <div class="section promotions">
                          <a href="#" class="promo promo 1">
                              <img src="https://lab.devaradise.com/codepen-assets/promo-1.jpg" class="thumb" />
                          </a>
                          <a href="#" class="promo promo 2">
                              <img src="https://lab.devaradise.com/codepen-assets/promo-2.jpg" class="thumb" />
                          </a>
                      </div>
                      </div>
                      </div>
                    </li>
                    <li class="menu-item menu-6"><a href="products.php?op=list&cat=7" class='list-group-item'>İdman<span class="sub-arrow"></span>
                        </a>
                        <div class="mega-submenu">
                            <h2>İdman</h2>
                            <div class="submenu-content">

                              <div class="section links">
                        <ul class="list-unstyled">
                            <li class="list-inline-item"><a href="#"><span class="fab fa-canadian-maple-leaf"></span>Kitab və jurnallar</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-canadian-maple-leaf"></span>Iki</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-canadian-maple-leaf"></span>Uch</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-canadian-maple-leaf"></span>Dord</li></a>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-canadian-maple-leaf"></span>Besh</li></a>
                        </ul>
                      </div>
                      <div class="section featured-product">
                          <div class="product-detail">
                              <div class="badge">Önə çıxanlar</div>
                              <img src="https://lab.devaradise.com/codepen-assets/featured-product.jpg" class="thumb" />
                              <div class="product-desc">
                                  <a class="title" href="#">Wellness Echinaciae</a>
                                  <div class="price">170 AZN</div>
                                  <a href="#" class="btn-atc">Alış veriş</a>
                              </div>
                          </div>
                      </div>
                      <div class="section promotions">
                          <a href="#" class="promo promo 1">
                              <img src="https://lab.devaradise.com/codepen-assets/promo-1.jpg" class="thumb" />
                          </a>
                          <a href="#" class="promo promo 2">
                              <img src="https://lab.devaradise.com/codepen-assets/promo-2.jpg" class="thumb" />
                          </a>
                      </div>
                      </div>
                      </div>
                    </li>


        </div>
    </div>
    </div>
</div>
