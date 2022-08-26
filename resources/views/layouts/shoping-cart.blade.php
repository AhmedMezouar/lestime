<!DOCTYPE html>
<html lang="en">
<head>
	<title>L'ESTIME :: Finaliser la Commande</title>
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
	<header class="header-v4">
		<!-- Header desktop -->
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

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="/" class="logo">
						<img src="{{asset('images/icons/logoBlackHor.png')}}" alt="IMG-LOGO">
					</a>
					<!-- Menu desktop -->
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="/">Acceuil</a>
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
					<a href="/">Acceuil</a>
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
					<img src="{{asset('images/icons/icon-close')}}2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<form method="POST" class="bg0 p-t-75 p-b-85" action="{{route('cmd.store',['id'=>$id_mag])}}">
		@csrf
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
						     <p>No one</p>
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

		
		

	<!-- Shoping Cart -->

	
		<div class="container">
		@if ($errors->any()) 
		  @foreach ($errors->all() as $error)
		  <div class="alert alert-danger" >
			{{$error}}
		  </div>
		  @endforeach
		@endif
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Produit</th>
									<th class="column-2"></th>
									<th class="column-3">Prix</th>
									<th class="column-4">Quantité</th>
									<th class="column-5">Total</th>
									<th class="column-6">Action</th>
								</tr>
								@if (Cart::count() > 0)
				                @foreach (Cart::content() as $item)
								@if ($item->options->id_magasin == $id_mag)
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{ asset('images/').'/'.$item->options->filepath}}" alt="IMG">
										</div>
									</td>
									<td class="column-2">{{$item->name}}</td>
									<td class="column-3" id="pricec">{{$item->price}} DA</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
				
										
											<a href="/dec/{{$id_mag}}/{{$item->rowId}}" class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" >
											     <i  class="fs-16 zmdi zmdi-minus"></i>
											</a>
											
											<input class="mtext-104 cl3 txt-center num-product" type="number" name="numproduct1" value="{{$item->qty}}">
											
											<a href="/inc/{{$id_mag}}/{{$item->rowId}}" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i  class="fs-16 zmdi zmdi-plus"></i>
											</a>
											
										
										</div>
									</td>
									<td class="column-5" id="totalcol">{{$item->price*$item->qty}} DA</td>
									<td class="column-6">
									
									<a href="/sup/{{$id_mag}}/{{$item->rowId}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							               Supprimé
					             	</a>
									</td>
									@endif
								</tr>

							@endforeach
							</table>
						
					   </div>
						
						@else
						<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
										
										</div>
									</td>
									<td class="column-2">-</td>
									<td class="column-3">-</td>
									<td class="column-4">
										-
									</td>
									<td class="column-5">-</td>
								</tr>
							</table>
						</div>
						@endif
						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-1117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-117 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Valide coupon
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Total de Panier
						</h4>
						@if (Cart::count() > 0)		
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									total-Detail:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								@php
								if (Cart::count() > 0) {
								$tot = 0;
				                foreach (Cart::content() as $item) {
								if ($item->options->id_magasin == $id_mag) {
									$tot = $tot + ($item->price*$item->qty);
								}}
								echo $tot,' ','DA';
							    }
								@endphp
								</span>
							</div>
						</div>
					    @else
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									total-Detail:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									 0.00 DA
								</span>
							</div>
						</div>
						@endif
						<div class="input-commande">
							<input class="input2 plh1 stext-107 cl7" type="text" name="nomClient" placeholder="Nom Prenom">
							<input class="input2 plh1 stext-107 cl7" type="text" name="numberTele" placeholder="Numero de téléphone">
							<input class="input2 plh1 stext-107 cl7" type="text" name="email" placeholder="E-mail">
						</div>
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									La livraison:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									Veuillez remplir les informations de la livraison pour voir le prix de livraison	
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Wilaya
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="wilaya">
											<option value="1">Adrar</option>
											<option value="8">Bechar</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="Commune">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="adresse" placeholder="Adresse de livraison">
									</div>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="livraison">
											<option value="0">Livraison a Domicile</option>
											<option value="1">Livraison Stop Desk</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
									<div class="flex-w">
										<a href="" class="flex-c-m stext-107 cl2 size-1007 bg1 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Afficher le prix de livraison
										</a>
									</div>
									<div class="size-209"  style="margin: 10px 0px 0px 10px; ">
										<span class="stext-110 cl2">
											0.00 DA
										</span>
									</div>
										
								</div>
							</div>
						</div>
						@if (Cart::count() > 0)		
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								@php
								if (Cart::count() > 0) {
								$tot = 0;
				                foreach (Cart::content() as $item) {
								if ($item->options->id_magasin == $id_mag) {
									$tot = $tot + ($item->price*$item->qty);
								}}
								$tot = $tot + $tarif;
								echo $tot,' ','DA';
							    }
								@endphp
								</span>
							</div>
						</div>
						@else
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									0.00 DA
								</span>
							</div>
						</div>
						
						@endif
						<input type="hidden" name="idMag" value="{{$id_mag}}" >
						<input type="hidden" name="idprod" value="{{$id_mag}}" >
						<input type="hidden" name="tarifLaiv" value="1500" >
						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Passer la Commande
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
		
		

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
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
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
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Bleu Star
							</h4>
							<p class="pric">
								<span class="oldprice">
									1500.00 DA
								</span>
								<span class="mtext-111 cl2 newprice">
									1500.00 DA
								</span>
							</p>
							<p class="stext-102 cl3 p-t-23">
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
								<label class="option_item">
									<input type="checkbox" class="checkbox">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="images/icons/iconlestime.png" width="30%" height="30%" ></div>
									<div class="name">
										<h6>35 ML</h6>
										<h5>1200 DA</h5>
									</div>
									</div>
								</label>
								<label class="option_item">
									<input type="checkbox" class="checkbox">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="images/icons/iconlestime.png" width="30%" height="30%" ></div>
									<div class="name">
										<h6>50 ML</h6>
										<h5>1750 DA</h5>
									</div>
									</div>
								</label>
								<label class="option_item">
									<input type="checkbox" class="checkbox">
									<div class="option_inner selected">
									<div class="tickmark"></div>
									<div class="icon"><img src="images/icons/iconlestime.png" width="30%" height="30%" ></div>
									<div class="name">
										<h6>100 ML</h6>
										<h5>3700 DA</h5>
									</div>
									</div>
								</label>
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

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-1002 bg3 bor22 hov-btn33 p-lr-15 trans-04 js-addcart-detail">
											Ajouter au panier
										</button>
										
										<button class="flex-c-m stext-101 cl2 size-1002 bg-none bor2222 hov-btn33 p-lr-15 trans-04 js-addcart-detail">
											Acheter Directement
										</button>
										
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
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
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