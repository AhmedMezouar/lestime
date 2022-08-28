@extends('layouts.index2')
@section('Slider')
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
@endsection
@section('Content')
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
					<a href="/ecommerce/magasin/{{$id_mag}}"class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Tous les Produits
					</a>

					<a  href="/ecommerce/magasin/{{$id_mag}}/Femme" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Femme
					</a>

					<a href="/ecommerce/magasin/{{$id_mag}}/Homme" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Homme
					</a>

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
				<form method="POST" action="{{route('produit.search',['id'=>$id_mag])}}">
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
						<img src="{{asset("/storage/$produit->ImageFileName1")}}" alt="IMG-PRODUCT">
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
									data-mainimage="{{asset("/storage/$produit->ImageFileName1")}}"
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
									data-mainimage="{{asset("/storage/$produit->ImageFileName1")}}"
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
										<input type="hidden" name="filepath" value="{{asset("/storage/$produit->ImageFileName1")}}">
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
								<button type="submit" name="action" value="achat" class="flex-c-m stext-101 cl1 size-1007 bg-none bor222 hov-btn33 p-lr-15 trans-04 m-r-8 m-b-10">
									Achat Directement
								</button>
							
								        
							        	<button type="submit"  name="action" value="ajout" class="flex-c-m stext-101 cl0 size-1007 bg3 bor22 hov-btn33 p-lr-15-01 trans-04 m-b-10">
									Ajouter au panier
								</button>
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
@endsection