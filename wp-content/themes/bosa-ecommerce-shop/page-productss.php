<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Products</title>
	</head>
	<style>
.product-info{
	margin: 0 5%;
  margin-top: 1%;
  display: grid;
  grid-template-columns:25% 25% 25% 25% 25%;
  gap: 1%;
},
.image {
  height: auto;
  width: 100%;
}
.card{
  padding: 5px;
  border:2px solid burlywood;
  border-radius: 10px;
}
.card-img-top{
  width: 180px;
}
.btn-primary{
  color: rgb(36, 109, 165);
},
#product-name{
	font-size:14px;
	width: 1rem;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
  overflow: hidden;
}
	</style>
	<body>
		<div class="container py-2 card border-0">
			<div class="bar">
				<div class="flashsale__countdown">
					<h2 class="heading-bar">
						<a class="link" href="san-pham-khuyen-mai-1" title="GIÁ SỐC HÔM NAY">GIÁ
							SỐC HÔM NAY</a>
						<span class="ega-dot"><span class="ega-ping"></span></span></h2>
					<!-- <div class="date-time">
						<span class="flashsale__countdown-label " style="">Kết thúc sau</span>
						<div class="flashsale__countdown" data-countdown-type="hours"
							data-countdown=""><div class="ega-badge-ctd">
								<div><div class="ega-badge-ctd__item ega-badge-ctd__h">10</div><span>Giờ</span>
								</div> <div class="ega-badge-ctd__colon"> : </div><div><div
										class="ega-badge-ctd__item ega-badge-ctd__m">17</div><span>Phút</span></div>
								<div class="ega-badge-ctd__colon"> : </div><div><div
										class="ega-badge-ctd__item ega-badge-ctd__s">55</div><span>Giây</span></div>
							</div></div>
					</div> -->
				</div>
			</div>
			<hr>
			<div>
				<div class="row mt-3" style="--limit-column: 5">
					<div class="product">
						<?php

							$url= curl_init();

							curl_setopt_array($url, array(
							CURLOPT_URL=>
							'https://62b13ad7196a9e987031ac4a.mockapi.io/W-Products',
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => '',
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 0,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => 'GET',
							));

							$response = curl_exec($url);

							curl_close($url);


							$data = json_decode($response);

							?>
							<div class="product-info">
								<?php
									foreach ($data as $value) { ?>
									<div class="card" style="width: 12rem;">
										<img class="card-img-top" src="<?= $value->image ?>" alt="Card image
										cap">
										<div class="card-body">
											<h6 id="product-name"><a
													href="<?= $value->detail ?>" id="text-title"><?=
														$value->title ?></a></h6>
												<div class="price-box">
													<span class="price"><?= $value->price ?>₫</span>
														<span class="compare-price" style="text-decoration:
															line-through;"><?= $value->originalPrice ?>₫</span>
														</div>

													</form> <div class="flashsale__bottom" style="">
														<div class="flashsale__label">
															còn lại
															<b class="flashsale__sold-qty">111</b> sản phẩm
														</div>
														<div class="flashsale__progressbar">
															<div class="flashsale___percent" style="width: 63%;"></div>
														</div>
													</div>
												</div>
											</div>


											<?php } ?>
											</div>
										</div>
										<div class="flashsale__item col-12 col-md-15" data-pd-id="19861953"
											data-inventory-quantity="1289" data-available="true">
											<div class="item_product_main">

											</div>
										</div>
										<br>
										
									</body>
								</html>