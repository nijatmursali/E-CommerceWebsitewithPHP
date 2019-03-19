<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
	<head>
<link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>

		<?php
		require 'common/head.php';
		?>
		<link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container-fluid">
			<?php
			require 'common/nav.php';
			?>

<style media="screen">
	#mainBody {/* background: url(../images/seperator.png) repeat-x 0 0; */
		border-top:2px solid #dedede;
		padding-top: 18px;
	}
</style>

<div id="mainBody">
	<div class="container">
	<div class="row">
<div class="span9">
	<ul class="breadcrumb">
	<li><a href="index.html">Əsas səhifə</a> <span class="divider">/</span></li>
	<li><a href="products.html">Məhsullar</a> <span class="divider">/</span></li>
	<li class="active">Məhsul detalları</li>
	</ul>
<div class="row">
		<div id="gallery" class="span3">
					<a href="<?php echo $product -> image; ?>" title="">
			<img src="<?php echo $product -> image; ?>" style="width:100%" alt=""/>
					</a>
		<div id="differentview" class="moreOptopm carousel slide">
							<div class="carousel-inner">
								<div class="item active">
								 <a href="<?php echo $product -> image; ?>"> <img style="width:29%" src="<?php echo $product -> image; ?>" alt=""/></a>
								 <a href="<?php echo $product -> image; ?>"> <img style="width:29%" src="<?php echo $product -> image; ?>" alt=""/></a>
								 <a href="<?php echo $product -> image; ?>" > <img style="width:29%" src="<?php echo $product -> image; ?>" alt=""/></a>
								</div>
								<div class="item">
								 <a href="<?php echo $product -> image; ?>" > <img style="width:29%" src="<?php echo $product -> image; ?>" alt=""/></a>
								 <a href="<?php echo $product -> image; ?>"> <img style="width:29%" src="<?php echo $product -> image; ?>" alt=""/></a>
								 <a href="<?php echo $product -> image; ?>"> <img style="width:29%" src="<?php echo $product -> image; ?>" alt=""/></a>
								</div>
							</div>

						</div>


		</div>
		<div class="span6">
			<h3><?php echo $product -> title; ?> </h3>

			<div class="services-container">
				<ul class="services">

						<li class="services-i-container action vip">
							<a id="set_vipped" class="services-i services-i_activated" href="#"><span class="fas fa-thumbs-up"></span>VIP Elan
								</a>
							</li>
							<li class="services-i-container action feature">
								<a id="set_featured" class="services-i " href="#"><span class="fas fa-thumbs-up"></span>Premium et</a>
								</li>

				</ul>
			</div>

			<form class="form-horizontal qtyFrm pull-right">

			</form>

			<p>
			<?php echo $product -> descri; ?>

			</p>
			<a class="btn btn-small pull-right" href="#detail">Əlavə məlumat</a>
			<br class="clr"/>
		<a href="#" name="detail"></a>
		<hr class="soft"/>
		</div>

		<div class="span9">
					<ul id="productDetail" class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">Məhsul haqqında</a></li>
						<li><a href="#profile" data-toggle="tab">Oxşar elanlar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="home">
			<h4>Məhsul haqqında məlumat</h4>
							<table class="table table-bordered">
			<tbody>
			<tr class="techSpecRow"><th colspan="2">Detallar</th></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2"><?php echo $product -> title; ?> </td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Modeli:</td><td class="techSpecTD2"><?php echo $product -> title; ?> </td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Barter üstünlüyü:</td><td class="techSpecTD2"><b><?php echo $product -> title; ?> </b></td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Alınma tarixi:</td><td class="techSpecTD2"> 2011-01-28</td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Şəhər:</td><td class="techSpecTD2"> Bakı</td></tr>
			<tr class="techSpecRow"><td class="techSpecTD1">Əlaqə:</td><td class="techSpecTD2"><div class="name">
			 <h4><?php echo $product -> name; ?></h4>
			 <a href="tel:<?php echo $product -> mob; ?>">	<h4 class="phone"><?php echo $product -> mob; ?></h4></a>
			 <h4><?php echo $product -> email; ?></h4>
			 </div></td></tr>
			</tbody>
			</table>

			<h5>Məlumatlar</h5>
			<p>
			<?php echo $product -> descri; ?>
			</p>

						</div>

	</div>
				</div>

</div>
</div>
</div>

</div>

		<?php
		require 'common/footer.php';
 ?>
	</body>

</html>

<style media="screen">

	.services-container {

		margin-top: 20px;
		margin-bottom: 20px;

		background-color: #f2f2f2;
		display: block;
	}
	.services {
		text-align: center;
		list-style: none;
	}
	.services ul, menu, dir {
		display: block;
		margin-block-start:1em;
		margin-block-end:1em;

		margin-inline-start:40px;
	}
	.services-i-container:first-child {
		margin-left: 0;
	}
	.services-i-container {
		display: inline-block;
		vertical-align: top;

	}
	.services-i-container li {
		text-align: -webkit-match-parent;

	}
	.services-i {
		font-weight: 600;
		color: #ff0077;
		margin-top: 12px;
		line-height: 38px;
		text-decoration: underline;
		text-align: left;
		font-size: 16px;
		z-index: 1;
		display: block;
		box-sizing: border-box;
		border: 1px solid #ff0077;
		border-radius: 4px;
		padding: 0 5px 0 20px;
		background-color: #fff;
	}
	.services-i-price {
		font-weight: 600;
		position: absolute;
		border-radius: 4px;
		padding: 0 9px;
		color: #fff;
		background: #ff6617;
		line-height: 20px;
		font-size: 11px;
	}
	.price-val {
		font-weight: bold;
	}
	.services-i-price .price-cur {
		font-weight: 600;
		padding-left: 0.3em;
		left: 5px;
		vertical-align: baseline;
		font-size: 11px;
		font-style: normal;
	}
	.services-i#set_bumped {
		left: 12px;
	}

</style>


<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>
