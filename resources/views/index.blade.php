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

						<a href="#" class="flex-c-m trans-04 p-lr-25">
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
					<a href="/" class="logo">
						<img src="{{asset('images/icons/logoBlackHor.png')}}" alt="IMG-LOGO">
					</a>
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="/">Acceuil</a>
							</li>

							<li>
							<a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Produits</a>
								<ul class="sub-menu">
									<li><a href="/product">Parfum Homme</a></li>
									<li><a href="/product">Parfum Femme</a></li>
									<li><a href="/product">Accessories</a></li>
									<li><a href="/product">Autres Produits</a></li>
								</ul>
							</li>

							<li class="label1" data-label1="NEW">
								<a href="{{route('cart.index',['id' => $id_mag,'tarif' => 0])}}">Nouvelle Arrivage</a>
							</li>

							<li>
								<a href="/actualite-blog">Actualité</a>
							</li>

							<li>
								<a href="/about">About</a>
							</li>

							<li>
								<a href="/contact">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						

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
				<a href="/"><img src="{{asset('images/icons/logoBlackHor.png')}}" alt="IMG-LOGO"></a>
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
					<a href="/ecommerce">Acceuil</a>
				</li>
				<li>
					<a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Produits</a>
					<ul class="sub-menu-m">
						<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Parfum Homme</a></li>
						<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Parfum Femme</a></li>
						<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Accessories</a></li>
						<li><a href="{{route('ecommerce.produit.show',['id' => $id_mag])}}">Autres Produits</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="/nouvelle-arrivage" class="label1 rs1" data-label1="NEW">Nouvelle Arrivage</a>
				</li>

				<li>
					<a href="/actualite-blog">Actualité</a>
				</li>

				<li>
					<a href="/about">About</a>
				</li>

				<li>
					<a href="/contact">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
			    <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
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
							
						<img src="{{ asset('images/').'/'.$item->options->filepath}}" alt="IMG">
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

		

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image:url({{url('images/slide-01.jpg')}})">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Women New-Collection 2022
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON <br> SUMMER
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image:url({{url('images/slide-02.jpg')}})">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Parfum New-Season
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image:url({{url('images/slide-03.jpg')}})">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Parfum Homme Collection 2022
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
					<img src="{{asset('images/banner-01.jpg')}}" alt="IMG-BANNER">

						<a href="/" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Femme
								</span>

								<span class="block1-info stext-102 trans-04">
									Le printemps 2022
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
					<img src="{{asset('images/banner-02.jpg')}}" alt="IMG-BANNER">

						<a href="/" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Homme
								</span>

								<span class="block1-info stext-102 trans-04">
									Le printemps 2022
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
					<img src="{{asset('images/banner-03.jpg')}}" alt="IMG-BANNER">

						<a href="/product" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									Nouvelle Tendance 
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Produit Tendance
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Tous les Produits
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Femme
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Homme
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Accessories
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Autres produits
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<form method="POST" action="{{route('produit.search',["id"=>$id_mag])}}">
					@csrf
					<div class="bor8 dis-flex p-l-15">
					
					<input type="hidden" name="idMag" value="{{$id_mag}}" >
						<button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
					    </button>
					    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Search">
				   
						
					</div>	
					</form>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Filtrage Par Marque
							</div>
							<li class="p-b-6">
							<a href="/ecommerce/magasin/{{$id_mag}}" class="filter-link stext-106 trans-04 filter-link-active">
									Tous les marques
								</a>
							</li>
							<ul>
								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/Armani" class="filter-link stext-106 trans-04">
										Armani
									</a>
								</li>

								<li class="p-b-6">
								<a href="/ecommerce/magasin/{{$id_mag}}/Aqua Di Geo" class="filter-link stext-106 trans-04">
										Aqua Di Geo
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/Chanel"  class="filter-link stext-106 trans-04">
										Chanel
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/Gucci" class="filter-link stext-106 trans-04">
										Gucci
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/Calvin Klein" class="filter-link stext-106 trans-04">
										Calvin Klein
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/Dolce & Gabbana" class="filter-link stext-106 trans-04">
										Dolce & Gabbana
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Filtrage Par Saison
							</div>

							<ul>
								<li class="p-b-6">
								<a href="/ecommerce/magasin/{{$id_mag}}" class="filter-link stext-106 trans-04 filter-link-active">
										Tous les Saisons
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/été" class="filter-link stext-106 trans-04">
										Summer ( été )
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/automne " class="filter-link stext-106 trans-04">
										Autumn ( l’automne )
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/hiver" class="filter-link stext-106 trans-04">
										Winter ( L’hiver )
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/Spring" class="filter-link stext-106 trans-04">
										Spring ( le printemps )
									</a>
								</li>
							</ul>
						</div>
						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Filtrage Par Prix
							</div>

							<ul>
								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}" class="filter-link stext-106 trans-04 filter-link-active">
										Tous les Prix
									</a>
								</li>

								<li class="p-b-6">
								<a href="/ecommerce/magasin/{{$id_mag}}/500/2500" class="filter-link stext-106 trans-04">
										500 DA - 2500 DA 
									</a>
								</li>

								<li class="p-b-6">
								<a href="/ecommerce/magasin/{{$id_mag}}/2500/5000" class="filter-link stext-106 trans-04">
										2500 DA - 5000 DA
									</a>
								</li>

								<li class="p-b-6">
								     <a href="/ecommerce/magasin/{{$id_mag}}/5000/10000" class="filter-link stext-106 trans-04">
										5000 DA - 10000 DA
									</a>
								</li>

								<li class="p-b-6">
									<a href="/ecommerce/magasin/{{$id_mag}}/10000/20000" class="filter-link stext-106 trans-04">
										10000 DA - 20000 DA
									</a>
								</li>
							</ul>
						</div>
						<!-- <div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div> -->

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="/ecommerce/magasin/{{$id_mag}}/Fashion" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="/ecommerce/magasin/{{$id_mag}}/Lifestyle" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="/ecommerce/magasin/{{$id_mag}}/Denim" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="/ecommerce/magasin/{{$id_mag}}/Streetstyle" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="/ecommerce/magasin/{{$id_mag}}/Crafts" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
			@foreach($produits as $produit)
				<div class="col-sm-6 col-md-4 col-lg-4 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
						<img src="{{ asset('images/').'/'.$produit ->ImageFileName1}}" alt="IMG-PRODUCT">
						@if ($produit->promo_35 > 0)
						<a href="#"
									data-obj = "{{$produit}}" 
									data-id="{{$produit->id}}" 
									data-name="{{$produit->nameProd}}" 
									data-description="{{$produit->Caractiristique}}" 
									data-prix="{{$produit->prix_new_35}}" 
									data-prixold="{{$produit->prix_old_35}}"
									data-name="{{$produit->nameProd}}" 
									data-promo="{{$produit->promo_35}}"
									data-mainimage="{{ asset('images/').'/'.$produit ->ImageFileName1}}"
									data-onlyimage="{{$produit ->ImageFileName1}}"
									class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Afficher le produit
						</a>
					    @else
						<a href="#" 
						data-obj = "{{$produit}}" 
									data-id="{{$produit->id}}" 
									data-name="{{$produit->nameProd}}" 
									data-description="{{$produit->Caractiristique}}" 
									data-prix="{{$produit->prix_new_35}}" 
									data-prixold="{{$produit->prix_old_35}}"
									data-name="{{$produit->nameProd}}" 
									data-promo="{{$produit->promo_35}}"
									data-mainimage="{{ asset('images/').'/'.$produit ->ImageFileName1}}"
									data-onlyimage="{{$produit ->ImageFileName1}}"
									class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Afficher le produit
						</a>
						@endif
							
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/product-detail" class="stext-105 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								{{$produit ->nameProd}}
								</a>
								@if($produit ->promo_35 > 0)
								<p class="pric">
									<span class="stext-105 cl11 p-r-15-01 oldprice">
										{{$produit ->prix_old_35}} DA
									</span>
									<span class="stext-1055 cl3 p-r-15-01 newprice">
									    {{$produit ->prix_new_35}} DA
									</span>
								</p>
								@else
								<p class="pric">
									<span class="stext-1055 cl3 p-r-15-01 newprice">
									    {{$produit ->prix_old_35}} DA
									</span>
								</p>
								@endif
							</div>
							
							<div class="block2-txt-child2 flex-r p-t-3">
							<form method="POST" action="{{route('cart.store')}}"> 
							@csrf
										<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
											<img class="icon-heart1 dis-block trans-04"  src="{{asset('images/icons/icon-heart-01.png')}}" alt="ICON">
											<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('images/icons/icon-heart-02.png')}}" alt="ICON">
										</a>
							</div>
							<input type="hidden" name="filepath" value="{{$produit ->ImageFileName1}}">
										<input type="hidden" name="id_magasin" value="{{$id_mag}}" >
										<input type="hidden" name="qteproduct" value="1" >
										<input type="hidden" name="product_id" value="{{$produit->id}}">
										<input type="hidden" name="product_name" value="{{$produit->nameProd}}">
										@if ($produit->promo_35 > 0)
										<input type="hidden" name="product_price" value="{{$produit->prix_new_35}}">
										@else
										<input type="hidden" name="product_price" value="{{$produit->prix_old_35}}">
										@endif
							<div class="header-cart-buttons flex-w w-full" >
								<button type="submit" name="achat" class="flex-c-m stext-101 cl1 size-1007 bg-none bor222 hov-btn33 p-lr-15 trans-04 m-r-8 m-b-10">
									Achat Directement
								</button>
							
								        
							        	<button type="submit" name="ajout" class="flex-c-m stext-101 cl0 size-1007 bg3 bor22 hov-btn33 p-lr-15-01 trans-04 m-b-10">
									Ajouter au panier
								</a>
								</form>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				</div>
			</div>
		
			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-1006 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Afficher plus
				</a>
			</div>
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

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="{{asset('images/product-10.jpg')}}" id="imageproddiv">
										<div class="wrap-pic-w pos-relative">
										<img src="{{asset('images/product-detail-01.jpg')}}" alt="IMG-PRODUCT" id="imageprod">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('images/product-detail-01.jpg')}}" id="imageproda">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 id="nameofProduct" class="mtext-105 cl2 js-name-detail p-b-14" >
								Lightweight Bleu Star
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
							<!-- <div class="col-md-12 col-lg-12 p-b-30 boxprice">
								<div class="col-4 p-4">
									<div class="contenance pointer colored-border" id="2012" price="1300">
									  <h6>35 ML</h6>
										<h5>1300 DA</h5>
									</div>
								</div>
								<div class="col-4 p-4">
									<div class="contenance colored-border select-active" id="2013" price="2450">
									  <h6>50 ML</h6>
										<h5>2450 DA</h5>
									</div>
								</div>
								<div class="col-4 p-4">
									<div class="contenance colored-border" id="2014" price="3700">
									  <h6>100 ML</h6>
										<h5>3700 DA</h5>
									</div>
								</div>
							</div>-->
							<div class="container01">
							<div id="div35">
								<label class="option_item">
							     	
									<input type="checkbox" class="checkbox" name="check35">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="{{asset('images/icons/iconlestime.png')}}" width="30%" height="30%" ></div>
									<div class="name">
										<h6>35 ML</h6>
										<h5 id="prix35">1200 DA</h5>
									</div>
									</div>
									
								</label>
								</div>
								<div id="div50">
								<label class="option_item">
									
									<input type="checkbox" class="checkbox" name="check100">
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
								<label class="option_item">
								   
									<input type="checkbox" class="checkbox" name="check100">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="{{asset('images/icons/iconlestime.png')}}" width="30%" height="30%" ></div>
									<div class="name">
										<h6>100 ML</h6>
										<h5 id="prix">3700 DA</h5>
									</div>
									</div>
									
								</label>
								</div>
							</div>
							<!--  
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size 35 ML</option>
												<option>Size 50 ML</option>
												<option>Size 100 ML</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>-->
								<form method="POST" action="{{route('cart.storeQte')}}"> 
								@csrf
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="numproduct" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
										
										<input type="hidden" name="obj" value="" id="inputprodobj">
										<input type="hidden" name="filepath" value="" id="inputprodimage">
										<input type="hidden" name="imagename" value="" id="imageNameInput">
										<input type="hidden" name="id_magasin" value="{{$id_mag}}" >
										<input type="hidden" name="product_id" value="0" id="inputprodid">
										<input type="hidden" name="product_name" value="0" id="inputprodname">
										<input type="hidden" name="product_price" value="0" id="inputprodprice">
										<button type="submit" name="ajout" class="flex-c-m stext-101 cl0 size-1002 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Ajouter au panier
										</button>
										
										<button type="submit" name="achat" class="flex-c-m stext-101 cl0 size-1002 bg3 bor1 hov-btn33 p-lr-15 trans-04 js-addcart-detail">
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
	</script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>