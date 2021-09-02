<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>OnePage Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?=url('/')?>/public/assets/img/favicon.png" rel="icon">
	<link href="<?=url('/')?>/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?=url('/')?>/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=url('/')?>/public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?=url('/')?>/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?=url('/')?>/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?=url('/')?>/public/assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?=url('/')?>/public/assets/vendor/aos/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=url('/')?>/public/assets/vendor/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?=url('/')?>/public/assets/vendor/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Template Main CSS File -->
	<link href="<?=url('/')?>/public/assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<style type="text/css">
		.nav-menu a{
			color: white;
		}

		a {
			color: #212529;
		}


		.slick-slide  {
			/*width: 0 !importantl*/
		}

		.slick-prev:before {
			color: black;
		}
		.slick-next:before {
			color: black;
		}
		a:hover {
			text-decoration: none;			
		}

		.shopee-searchbar {
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-align-items: stretch;
			-moz-box-align: stretch;
			-ms-flex-align: stretch;
			align-items: stretch;
			-webkit-justify-content: space-between;
			-moz-box-pack: justify;
			-ms-flex-pack: justify;
			justify-content: space-between;
			height: 2.5rem;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: .1875rem;
			border-radius: 2px;
			background: #fff;
		}

		.shopee-searchbar-input, .shopee-searchbar__main {
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-flex: 1;
			-moz-box-flex: 1;
			-ms-flex: 1;
			flex: 1;
		}
		.header-with-search-wrapper .shopee-searchbar-input {
			background-color: #fff;
			border-color: #fff;
		}
		.shopee-searchbar-input {
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding-left: .625rem;
		}
		.shopee-searchbar-input, .shopee-searchbar__main {
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-flex: 1;
			-moz-box-flex: 1;
			-ms-flex: 1;
			flex: 1;
		}
		.shopee-searchbar-input__input {
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-flex: 1;
			-moz-box-flex: 1;
			-ms-flex: 1;
			flex: 1;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			outline: none;
			border: 0;
			padding: 0;
			margin: 0;
		}
		input {
			line-height: normal;
			font-family: "Open Sans", sans-serif;
		}

		.header-with-search-wrapper .shopee-searchbar>.btn-solid-primary {
			background: #ec1f25;
		}

		.btn-solid-primary {
			color: #fff;
			background: #ec1f25;
		}
		.btn--s {
			height: 34px;
			padding: 0 15px;
			min-width: 60px;
			max-width: 190px;
		}
		.btn--inline {
			display: -webkit-inline-flex;
			display: -moz-inline-box;
			display: -ms-inline-flexbox;
			display: inline-flex;
		}
		.btn {
			overflow: hidden;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-line-clamp: 1;
			-webkit-flex-direction: column;
			-moz-box-orient: vertical;
			-moz-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			font-size: 14px;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			box-shadow: 0 1px 1px 0 rgb(0 0 0 / 9%);
			border-radius: 2px;
			border: 0;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-justify-content: center;
			-moz-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			text-transform: capitalize;
			outline: 0;
			cursor: pointer;
		}		

		# Team
		--------------------------------------------------------------*/
		.team .member {
			margin-bottom: 20px;
			overflow: hidden;
			text-align: center;
			border-radius: 4px;
			background: #fff;
			box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
		}

		.team .member .member-img {
			position: relative;
			overflow: hidden;
		}

		.team .member .social {
			position: absolute;
			left: 0;
			bottom: 0;
			right: 0;
			height: 40px;
			opacity: 0;
			transition: ease-in-out 0.3s;
			text-align: center;
			background: rgba(255, 255, 255, 0.85);
		}

		.team .member .social a {
			transition: color 0.3s;
			color: #124265;
			margin: 0 10px;
			padding-top: 8px;
			display: inline-block;
		}

		.team .member .social a:hover {
			color: #2487ce;
		}

		.team .member .social i {
			font-size: 18px;
			margin: 0 2px;
		}

		.team .member .member-info {
			padding: 25px 15px;
		}

		.team .member .member-info h4 {
			font-weight: 700;
			margin-bottom: 5px;
			font-size: 18px;
			color: #124265;
		}

		.team .member .member-info span {
			display: block;
			font-size: 13px;
			font-weight: 400;
			color: #aaaaaa;
		}

		.team .member .member-info p {
			font-style: italic;
			font-size: 14px;
			line-height: 26px;
			color: #777777;
		}

		.team .member:hover .social {
			opacity: 1;
		}		

		/*brambang*/
		#ck-wrapperWhyBrambang {
			overflow: hidden;
			text-align: center;
			width: 100%;
			height: auto;
			background-color: #f4f4f4;
			box-shadow: none;
			margin-bottom: -22px;
			margin-top: 0;
		}
		#WhyBrambangContainer {
			display: block;
			width: 940px;
			text-align: justify;
			margin: auto auto 4px;
			overflow: hidden;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 6px 14px 0 rgb(0 0 0 / 12%);
			z-index: 1;
			padding: 30px 0 0 10px;
		}
		#WhyBrambangContainer, #ck-cardContainer, .card-area, .productcat, .swiperdesc, a.anchor {
			position: relative;
		}

		.wrapperWhyBrambangCard {
			display: inline-block;
			margin: auto auto 30px;
			float: none !important;
			overflow: hidden;
			width: 225px;
			padding: 14px 0;
			vertical-align: top;
		}
		.clear {
			display: block;
			clear: both;
		}

		#ck-wrapper {
			overflow: hidden;
			text-align: center;
			width: 100%;
			padding-top: 225px;
			background-color: #fff;
			background-image: radial-gradient(circle at 50% 50%,#ffdc66,#ffc400);
			box-shadow: 0 -2px 4px 0 rgb(0 0 0 / 8%);
			height: 55%;
			margin-top: -155px;
			z-index: -1;
		}


		div.WhyBrambangTitle {
			font-size: 18px;
			line-height: 1;
			letter-spacing: .5px;
			text-align: center;
			color: #000;
			margin-top: 0;
			vertical-align: middle;
		}
		.ck-wrapperWhyBrambang-image {
			width: 53.9px;
			height: 58.5px;
			margin: auto auto 20px;
		}

		div.WhyBrambangTitle {
			font-size: 18px;
			line-height: 1;
			letter-spacing: .5px;
			text-align: center;
			color: #000;
			margin-top: 0;
			vertical-align: middle;
		}

		div.WhyBrambangSubTitle {
			margin-top: 10px;
			font-family: Nunito;
			font-size: 14px;
			line-height: 1.29;
			letter-spacing: .5px;
			text-align: center;
			color: #000;
		}

		div.WhyBrambangTitle, div.ck-title {
			font-family: MyriadPro;
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
		}		

		div.title-index {
			font-size: 24px;
			color: #000;
			margin-top: 30px;
			margin-bottom: 15px;
		}

		.btn-outline-danger > div:hover {
			color: white;
		}

		.btnAllProduct, div.title-index {
			font-style: normal;
			font-stretch: normal;
			line-height: normal;
			letter-spacing: .5px;
			text-align: center;
			font-family: MyriadPro;
			font-weight: 700;
		}		

		body {
			font-family: "Roboto", sans-serif !important;
			color: #444444;
		}

		a {
			color: #47b2e4;
		}

		a:hover {
			color: #73c5eb;
			text-decoration: none;
		}
	</style>
  <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
	{{-- modal --}}
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlInput1">Nama Penerima</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Penerima" value="Fathul">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlInput1">Nomor Handphone</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pemesan" value="085156289855">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Alamat</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Alamat">Jl. Swadaya Lorong Balitbangda No. 9 Palu</textarea>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Kota</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option>Palu</option>
									</select>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Kecamatan</label>
									<select class="form-control" id="exampleFormControlSelect1">
										<option>Palu Barat</option>
										<option>Palu Timur</option>
										<option>Palu Selatan</option>
										<option>Palu Utara</option>
									</select>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Keluarahan</label>
									<select class="form-control" id="select_kelurahan" onchange="ongkos_kirim()">
										<option>Kabonena</option>
										<option>Tipo</option>
										<option>Donggala Kodi</option>
										<option>Silae</option>
									</select>
								</div>
							</div>

						</div>
					</form>
					<div class="row" style="font-weight: 700">
						<div class="col">Total pesanan</div>
						<div class="col text-right">Rp. 50.000</div>
					</div>
					<div class="row" style="font-weight: 700">
						<div class="col">Ongkos Kirim</div>
						<div class="col text-right" id="ongkos_kirim">Rp. 7.000</div>
					</div>
				</div>
				<br>
				<div class="modal-footer justify-content-between" style="font-weight: 700">
					<div style="font-size: 28px" id="total_pesanan">
						Total : Rp. 67.000
					</div>
					<div>
						<a href="<?=url('/')?>/pesanan" type="button" class="btn btn-danger">Pesan</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	{{-- end modal --}}

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top" style="background: white; border-bottom: none; box-shadow:0 1px 1px rgb(0 0 0 / 20%); padding: 1em;">
		<div class="container d-flex align-items-center">
			<h1 class="logo mr-auto">
				<div style="">
					<img src="<?=url('/')?>/public/assets/img/logo/logo2.png" style="width: 120%;background:#ec1f25;">
				</div>
			</h1>
			<div style="width: 100%; padding-left: 1%; margin-left: 2.5%; margin-right: 5%; border-left: 2px solid #ec1f25;display: flex; align-items: center;">
				<div style="color: #ec1f25; vertical-align: center; padding-bottom: 0px; line-height: 1em; font-size: 1.4em;">Checkout</div>
			</div>
		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center" style="background: none; ">
		<div class="container" style="padding-top: 1em;">
			<div class="row" style="display: flex; justify-content: center;">
				<div class="col-12">
					<div class="card shadow p-3 mb-2 bg-white rounded" style="border: none;">
						Produk Dipesan
						<table>
							<thead>
								<th style=""></th>
								<th style="text-align: center;">Harga Satuan</th>
								<th style="text-align: center;">Jumlah</th>
								<th style="text-align: center;">Subtotal</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<div style="width: 100%; display: flex; margin-bottom: 0.5em;">
											<div style="width: 12%;">
												<img class="img-fluid" src="<?=url('/')?>/public/assets/img/produk/1.jpg" style="width: 100%; border-radius: 1em;">
											</div>
											<div style="width: 85%; margin-left: 1em; display: flex; align-items: center;">
												Fiesta Chicken Nugget
											</div>
										</div>
									</td>
									<td>
										<div style="display: flex; justify-content: space-between;">
											<div>Rp.</div> <div>27.000</div>
										</div>
									</td>
									<td style="text-align: center;">1</td>
									<td>
										<div style="display: flex; justify-content: space-between;">
											<div>Rp.</div> <div>27.000</div>
										</div>									
									</td>
								</tr>
								<tr>
									<td>
										<div style="width: 100%; display: flex; margin-bottom: 0.5em;">
											<div style="width: 12%;">
												<img class="img-fluid" src="<?=url('/')?>/public/assets/img/produk/1.jpg" style="width: 100%; border-radius: 1em;">
											</div>
											<div style="width: 85%; margin-left: 1em; display: flex; align-items: center;">
												Fiesta Chicken Nugget
											</div>
										</div>
									</td>
									<td>
										<div style="display: flex; justify-content: space-between;">
											<div>Rp.</div> <div>27.000</div>
										</div>
									</td>
									<td style="text-align: center;">1</td>
									<td>
										<div style="display: flex; justify-content: space-between;">
											<div>Rp.</div> <div>27.000</div>
										</div>									
									</td>
								</tr>
								<tr>
									<td>
										<div style="width: 100%; display: flex; margin-bottom: 0.5em;">
											<div style="width: 12%;">
												<img class="img-fluid" src="<?=url('/')?>/public/assets/img/produk/1.jpg" style="width: 100%; border-radius: 1em;">
											</div>
											<div style="width: 85%; margin-left: 1em; display: flex; align-items: center;">
												Fiesta Chicken Nugget
											</div>
										</div>
									</td>
									<td>
										<div style="display: flex; justify-content: space-between;">
											<div>Rp.</div> <div>27.000</div>
										</div>
									</td>
									<td style="text-align: center;">1</td>
									<td>
										<div style="display: flex; justify-content: space-between;">
											<div>Rp.</div> <div>27.000</div>
										</div>									
									</td>
								</tr>

							</tbody>							
						</table>
					</div>
					<div class="card shadow p-3 mb-2 bg-white rounded" style="border: none;">
						<div>Metode Pengantaran</div>
						<div style="display: flex; margin-top: 0.5em;">
							<div class="btn btn-outline-danger" id="btn_ambil_sendiri" style="border: 1px solid #dc3545;" onclick="metode_pengantaran('ambil')">Ambil Sendiri</div>
							<div class="btn btn-outline-danger" id="btn_diantarkan" style="border: 1px solid #dc3545; margin-left: 0.5em;" onclick="metode_pengantaran('diantarkan')">Diantarakan</div>
						</div>
					</div>
					<div class="card shadow p-3 mb-2 bg-white rounded" style="border: none;" hidden id="toko_as_frozen">
						<div style="display: flex;">
							<svg height="18" viewBox="0 0 12 16" width="18" class="shopee-svg-icon icon-location-marker" style="margin-top: 0.3em;"><path d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z" fill-rule="evenodd"></path>
							</svg>
							<div style="margin-left: 1em;">
								<b>Toko Asfrozen</b><br>
								Jl. Mandala No. 1, Birobuli Utara, Kec, Palu Selatan<br>
								Kota Palu, Sulawesi Tengah, 94111<br>
								<a href="https://www.google.com/maps/place/AS+FROZEN+PALU/@-0.9144415,119.8997595,16.92z/data=!4m5!3m4!1s0x2d8bef83f63e3983:0x39f3cc45d0d5d04!8m2!3d-0.9141016!4d119.8988105">Lihat maps</a>
							</div>
						</div>
					</div>


					<div class="card shadow p-3 mb-2 bg-white rounded" style="border: none;" id="alamat_penerima" hidden>
						<div style="display: flex;">
							<svg height="18" viewBox="0 0 12 16" width="18" class="shopee-svg-icon icon-location-marker" style="margin-top: 0.3em;"><path d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z" fill-rule="evenodd"></path>
							</svg>
							<div style="margin-left: 1em;">
								<b>Alamat Penerima&nbsp;(Ongkir : Rp. 15.000)</b><br>
								Fathul | (+62 851 5628 9855)<br>
								Jl. Jalur Gaza No. 9 Palu<br>
								Kabonena, Palu Barat, Kota Palu <br>
							</div>
							<div style="position: absolute; right: 2em; top: 40%;">Ubah data</div>
						</div>
					</div>

					<div class="card shadow p-3 mb-2 bg-white rounded" style="border: none;">
						<div>Metode Pembayaran</div>
						<div style="display: flex; margin-top: 0.5em;">
							<div id="btn_cod" onclick="metode_pembayaran('cod')" class="btn btn-outline-danger" style="border: 1px solid #dc3545;">COD</div>
							<div id="btn_transfer" onclick="metode_pembayaran('transfer')" class="btn btn-outline-danger" style="margin-left: 0.5em; border: 1px solid #dc3545;">Transfer</div>
						</div>
						<div id="list_bank" hidden>
							@php
							$bank = array("Bank BCA", "Bank Mandiri", "Bank BNI", "Bank BRI", "Bank BSI");
							$bank_icon = array("img_bankid_bca.png", "img_bankid_mandiri.png", 'img_bankid_bni.png', "img_bankid_bri.png","img_bankid_bsm.png");
							@endphp
							@for ($i = 0; $i < count($bank); $i++)
							<div class="stardust-radio__content" style="display: flex; margin-top: 1em;">
								<div class="icheck-danger d-inline" style="width: 10%;">
									<input type="checkbox" id="checkboxPrimary1" @if ($i == 0) checked @endif>
									<label for="checkboxPrimary1">
									</label>
								</div>
								<div class="checkout-bank-transfer-item__card" style="display: flex;">
									<div class="checkout-bank-transfer-item__icon-container">
										<img src="https://mall.shopee.co.id/static/images/{{$bank_icon[$i]}}" class="checkout-bank-transfer-item__icon" style="width: 2em; margin-right: 1em;">
									</div>
									<div>
										<div class="checkout-bank-transfer-item__main" style="line-height: 0.8em;">
											{{$bank[$i]}} (Dicek Manual)
										</div>
										<div class="checkout-bank-transfer-item__description">
											<small>Perlu upload bukti transfer</small>
										</div>
									</div>
								</div>
							</div>
							@endfor


							<div class="bank-transfer-category__body">
							</div>				
						</div>
					</div>	
					<div class="card shadow p-3 mb-2 bg-white rounded" style="border: none;">
						<div class="row">
							<div class="col-md-8">
							</div>
							<div class="col-md-2">
								Subtotal Produk
							</div>
							<div class="col-md-2" style="display: flex; justify-content: flex-end;">
								<div>Rp.</div><div>90.000</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
							</div>
							<div class="col-md-2">
								Ongkos Kirim
							</div>
							<div class="col-md-2" style="display: flex; justify-content: flex-end;">
								<div>Rp.</div><div>7.000</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
							</div>
							<div class="col-md-2">
								Total
							</div>
							<div class="col-md-2" style="display: flex; justify-content: flex-end;">
								<h3>Rp. 97.000</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
							</div>
							<div class="col-md-4">
								<a href="<?=url('/')?>/pesanan" class="btn btn-danger">Buat Pesanan</a>
							</div>
						</div>

					</div>	
				</div>
			</div>

		</div>
	</section><!-- End Hero -->


	<!-- ======= Footer ======= -->
	<footer id="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>OnePage</h3>
						<p>
							A108 Adam Street <br>
							New York, NY 535022<br>
							United States <br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
						</p>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>Join Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="container d-md-flex py-4">

			<div class="mr-md-auto text-center text-md-left">
				<div class="copyright">
					&copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
	<div id="preloader" style=""></div>

	<!-- Vendor JS Files -->
	<script src="<?=url('/')?>/public/assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/php-email-form/validate.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/counterup/counterup.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/venobox/venobox.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?=url('/')?>/public/assets/vendor/aos/aos.js"></script>
	<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
	<script type="text/javascript" src="<?=url('/')?>/public/assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript">
	</script>
	<!-- Template Main JS File -->
	<script src="<?=url('/')?>/public/assets/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
		function modal_pesan(){
			$('#exampleModal').modal('show');
		}

		function metode_pengantaran(value){
			if (value == 'ambil'){
				$("#toko_as_frozen").prop('hidden', false);
				$("#alamat_penerima").prop('hidden', true);
				$("#btn_ambil_sendiri").css('background', '#dc3545');				
				$("#btn_ambil_sendiri").css('color', 'white');				
				$("#btn_diantarkan").css('background', 'white');				
				$("#btn_diantarkan").css('color', '#dc3545');				
			}
			else {
				$("#toko_as_frozen").prop('hidden', true);
				$("#alamat_penerima").prop('hidden', false);				
				$("#btn_diantarkan").css('background', '#dc3545');				
				$("#btn_diantarkan").css('color', 'white');				
				$("#btn_ambil_sendiri").css('background', 'white');				
				$("#btn_ambil_sendiri").css('color', '#dc3545');				

			}
		}

		function metode_pembayaran(value){
			if (value == 'cod'){
				$("#btn_cod").css('background', '#dc3545');				
				$("#btn_cod").css('color', 'white');				
				$("#btn_transfer").css('background', 'white');				
				$("#btn_transfer").css('color', '#dc3545');	
				$("#list_bank").prop('hidden', true);			
			}
			else {
				$("#btn_transfer").css('background', '#dc3545');				
				$("#btn_transfer").css('color', 'white');				
				$("#btn_cod").css('background', 'white');				
				$("#btn_cod").css('color', '#dc3545');								
				$("#list_bank").prop('hidden', false);			
			}
		}

		function ongkos_kirim(){
			var kelurahan = $("#select_kelurahan").val();
			var ongkos_kirim = 0;
			var total_pesanan = 0;
			if(kelurahan == "Tipo"){
				ongkos_kirim = "20.000"
				total_pesanan = "70.000"
			}
			else if(kelurahan == "Kabonena"){
				ongkos_kirim = "18.000"
				total_pesanan = "68.000"
			}
			else if(kelurahan == "Donggala Kodi"){
				ongkos_kirim = "18.000"
				total_pesanan = "68.000"
			}
			else if(kelurahan == "Silae"){
				ongkos_kirim = "29.000"
				total_pesanan = "79.000"
			}
			else{
				ongkos_kirim = "0"
			}

			$("#ongkos_kirim").empty()
			$("#total_pesanan").empty()
			$("#total_pesanan").append("Total : Rp. "+total_pesanan)
			$("#ongkos_kirim").append("Rp. "+ongkos_kirim)
		}
	</script>
</body>

</html>