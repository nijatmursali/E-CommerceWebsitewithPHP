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
			<div class="carousel slide" id="carousel-578920">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-578920" class="active"></li>
					<li data-slide-to="1" data-target="#carousel-578920"></li>
					<li data-slide-to="2" data-target="#carousel-578920"></li>
					<li data-slide-to="3" data-target="#carousel-578920"></li>
					<li data-slide-to="4" data-target="#carousel-578920"></li>
					<li data-slide-to="5" data-target="#carousel-578920"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<a href="#"><img alt="Carousel Bootstrap First" src="productimages/1.jpg" style="width: 100%; height: 700px; ">
						</a>
					</div>
					<div class="item">
						<a href=""><img alt="Carousel Bootstrap Second" src="productimages/2.jpg" style="width: 100%;height: 700px">
						</a>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="productimages/3.jpg" style="width: 100% ; height: 700px; background-position: center">
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap First" src="productimages/mac1.jpg" style="width: 100%;height: 700px">
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap First" src="productimages/5s.jpg" style="width: 100%;height: 700px">
						</div>
					<div class="item">
						<img alt="Carousel Bootstrap First" src="productimages/6.jpg" style="width: 100%;height: 700px">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-578920" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-578920" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<hr />
			<div class="row">
				<?php
				require 'view/common/categories.php';
				?>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail First" src="productimages/tv.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Elektronika </h3>
									<p>
										Bütün elektronika məhsullarını burda tapa bilərsiniz.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=1">Bax</a>
										
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail First" src="productimages/house1.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Daşınmaz əmlak </h3>
									<p>
										Bütün daşınmaz əmlak tipli elanlar burdadır. Girin baxın.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=2">Bax</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail Second" src="productimages/car.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Avtomobillər </h3>
									<p>
										Əjdaha kimi maşınlar burdadır. Girin və yoxlayın.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=3">Bax</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail Third" src="productimages/gaming.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Hobbi </h3>
									<p>
										Hobbi gobbi LOL. Girin və yoxlayın necə olduğunu.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=4">Bax</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail First" src="productimages/watch.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Şəxsi əşyalar </h3>
									<p>
										Şəxsi əşyalarınızı götürməyi unutmayın. Zarafatsız.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=5">Bax</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail First" src="productimages/house1.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Ev və bağ </h3>
									<p>
										Ev və bağ məhsulları burdadır. Girin və həzz alın.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=6">Bax</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail Second" src="productimages/sports.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> İdman </h3>
									<p>
										Kateqoriyaya əlavələr olacaq. Bir neçə hissə əlavə olacaq.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=8">Bax</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail" style="border-radius:15px;">
								<img alt="Bootstrap Thumbnail Third" src="productimages/sports.jpg" style="width: 100%; height: 220px">
								<div class="caption">
									<h3> Əlavə kateqoriya 2 </h3>
									<p>
										Kateqoriyaya əlavələr olacaq. Bir neçə hissə əlavə olacaq.
									</p>
									<p>
										<a class="btn btn-primary" style="position: relative; top: 50%;width: 100%;background: rgba(59,173,227,1);
    background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);border-radius:15px;" href="products.php?op=list&cat=8">Bax</a>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
				<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
			</div>
			<?php
			require 'view/common/footer.php';
			?>
		</div>

	</body>
</html>
