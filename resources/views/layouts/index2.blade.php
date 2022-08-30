<!DOCTYPE html>
<html lang="en">
<head>
	<title>L'ESTIME :: Acceuil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}" />
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}" />
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/MagnificPopup/magnific-popup.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- Header -->
	<header>
		<!-- Header desktop   -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Livraison gratuite pour une commande standard supérieure à 10 000 DA
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="/login" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							FR
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Dinar Algérien ( DA )
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->
					<a href="{{route('ecommerce.show',['id' => $id_mag])}}" class="logo">
						<img src="{{asset('images/icons/logoBlackHor.png')}}" alt="IMG-LOGO">
					</a>
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="{{route('ecommerce.show',['id' => $id_mag])}}">Acceuil</a>
							</li>

							<li>
							<a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Produits</a>
								<ul class="sub-menu">
									<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Parfum Homme</a></li>
									<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Parfum Femme</a></li>
									<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Accessories</a></li>
									<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Autres Produits</a></li>
								</ul>
							</li>

							<li class="label1" data-label1="NEW">
								<a href="{{route('ecommerce.newArriv.show',['idmagnewA' => $id_mag])}}">Nouvelle Arrivage</a>
							</li>

							<li>
								<a href="{{route('ecommerce.showBlog',['idmag'=>$id_mag])}}">Actualité</a>
							</li>

							<li>
							<a href="{{route('ecommerce.showAbout',['idmag'=>$id_mag])}}">About</a>
							</li>

							<li>
								<a href="{{route('ecommerce.showContact',['idmag'=>$id_mag])}}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{sizeof(Cart::content())}}">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{route('ecommerce.show',['id' => $id_mag])}}"><img src="{{asset('images/icons/logoBlackHor.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{sizeof(Cart::content())}}">
							<i class="zmdi zmdi-shopping-cart"></i>
				</div>

			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Livraison gratuite pour une commande standard supérieure à 10 000 DA
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							FR
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Dinar Algérien ( DA )
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li class="active-menu">
					<a href="{{route('ecommerce.show',['id' => $id_mag])}}">Acceuil</a>
				</li>
				<li>
					<a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Produits</a>
					<ul class="sub-menu-m">
						<li><a href="/product">Parfum Homme</a></li>
						<li><a href="/product">Parfum Femme</a></li>
						<li><a href="/product">Accessories</a></li>
						<li><a href="/product">Autres Produits</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				            <li class="label1" data-label1="NEW">
								<a href="{{route('ecommerce.newArriv.show',['idmagnewA' => $id_mag])}}">Nouvelle Arrivage</a>
							</li>

							<li>
								<a href="{{route('ecommerce.showBlog',['idmag'=>$id_mag])}}">Actualité</a>
							</li>

							<li>
							<a href="{{route('ecommerce.showAbout',['idmag'=>$id_mag])}}">About</a>
							</li>

							<li>
								<a href="{{route('ecommerce.showContact',['idmag'=>$id_mag])}}">Contact</a>
							</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
				</button>

				<form method="POST" action="{{route('produit.search',['id'=>$id_mag])}}" class="wrap-search-header flex-w p-l-15">
					@csrf
					<input type="hidden" name="idMag" value="{{$id_mag}}" >
					<button type="submit" class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Recherche...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Votre panier
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				@if (Cart::count() > 0)
				@foreach (Cart::content() as $item)
					@if ($item->options->id_magasin == $id_mag)
					<li class="header-cart-item flex-w flex-t m-b-12">
					
						<div class="header-cart-item-img">
						<img src="{{$item->options->filepath}}" alt="IMG">
						</div>
						
						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								{{$item->name}}
							</a>

							<span class="header-cart-item-info">
							{{$item->qty}} x {{$item->price}} 
							</span>
						</div>
						
					</li>
					@endif
					@endforeach
						@else 
						     <p class="stext-107 cl7 size-201">panie est vide</p>
						@endif	
					
				</ul>
					<div class="header-cart-buttons flex-w w-full">
						<a href="{{route('cart.index',['id' => $id_mag,'tarif' => 0])}}" class="flex-c-m stext-101 cl0 size-1002 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Finaliser la commande
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	@yield('Slider')
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			@yield('Content')
		</div>
	</section> 
	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Nos Produits
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Homme
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Femme
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Accessories
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Autres produits
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Contact
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Nos magasin 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								La livraison
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Des questions? Faites-le nous savoir en magasin au Alger Plage, Algiers, Alger 16001 ou appelez-nous au (+213) 12 345 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Nouvelle par mail
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								S'abonner
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<!-- <div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div> -->

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Golden Ideas</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">Bleu Star</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
				<img src="{{asset('images/icons/icon-close.png')}}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="item-slick3">
										<div class="wrap-pic-w pos-relative">
										<img src="{{asset('images/product-detail-01.jpg')}}" alt="IMG-PRODUCT" id="imageprod">
										</div>
									</div>
								
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 id="nameofProduct" class="mtext-105 cl2 js-name-detail p-b-14" >
								
							</h4>
							<p class="pric">
								<span class="oldprice" id="oldprice">
									
								</span>
								<span class="mtext-111 cl2 newprice" id="newprice">
									
								</span>
							</p>
							<p id="descprod" class="stext-102 cl3 p-t-23" >
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							<div class="container01">
							<div id="div35">
								<label class="option_item" data-val="35">
									<input type="radio" name="volume" id="35" class="checkbox" value="35" checked onchange="changeVolum()">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="{{asset('images/icons/iconlestime.png')}}" width="30%" height="30%" ></div>
									<div class="name">
										<h6>35 ML</h6>
										<h5 id="prix35">1750 DA</h5>
									</div>
									</div>
								</label>
								</div>
								<div id="div50">
								<label class="option_item" data-val="50">
									<input type="radio" name="volume" id="50" class="checkbox" value="50" onchange="changeVolum()">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="{{asset('images/icons/iconlestime.png')}}" width="30%" height="30%" ></div>
									<div class="name">
										<h6>50 ML</h6>
										
										<h5 id="prix50">1750 DA</h5>
									</div>
									</div>
								</label>
								</div>
								<div id="div100">
								<label class="option_item" data-val="100">
									<input type="radio" name="volume" id="100" class="checkbox" value="100" onchange="changeVolum()">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="{{asset('images/icons/iconlestime.png')}}" width="30%" height="30%" ></div>
									<div class="name">
										<h6>100 ML</h6>
										<h5 id="prix100">1750 DA</h5>
									</div>
									</div>
								</label>
							</div>
						</div>
								<form method="POST" action="{{route('cart.storeQte')}}"> 
								@csrf
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" id="qtecart" name="numproduct" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
										<input type="hidden" name="qtestock_35" value="" id="inputqte_35">
										<input type="hidden" name="qtestock_50" value="" id="inputqte_50">
										<input type="hidden" name="qtestock_100" value="" id="inputqte_100">
										<input type="hidden" name="volume" value="" id="inputvolume">
										<input type="hidden" name="obj" value="" id="inputprodobj">
										<input type="hidden" name="objacc" value="" id="inputprodobjacc">
										<input type="hidden" name="filepath" value="" id="inputprodimage">
										<input type="hidden" name="imagename" value="" id="imageNameInput">
										<input type="hidden" name="id_magasin" value="{{$id_mag}}" >
										<input type="hidden" name="product_id" value="0" id="inputprodid">
										<input type="hidden" name="product_name" value="0" id="inputprodname">
										<input type="hidden" name="product_price" value="0" id="inputprodprice">
										<input type="hidden" name="product_type" value="0" id="inputproduct_type">
										<input type="hidden" name="product_price50" value="0" id="inputprodprice50">
										<input type="hidden" name="product_price100" value="0" id="inputprodprice100">
										<input type="hidden" name="acc_qte_stock" value="0" id="inputacc_qte_stock">
										<button type="submit" name="action" value="ajout" class="flex-c-m stext-101 cl0 size-1002 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Ajouter au panier
										</button>
										
										<button type="submit" name="action" value="achat" class="flex-c-m stext-101 cl0 size-1002 bg3 bor1 hov-btn33 p-lr-15 trans-04 js-addcart-detail">
											Acheter Directement
										</button>
										</form>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
		function changeVolum() {
			document.getElementById("qtecart").value = 1;
		}
	</script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>