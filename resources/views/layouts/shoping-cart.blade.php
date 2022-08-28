@extends('layouts.index2')
@section('Slider')
	<section class="bg-img1 txt-center p-lr-15 p-tb-92">
		<h2 class="ltext-105 cl0 txt-center">
		
		</h2>
	</section>	
@endsection
@section('Content')
	<!-- Shoping Cart -->

	
		<div class="container">

			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
				
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
						@if ($errors->any()) 
		  @foreach ($errors->all() as $error)
		  <div class="alert alert-danger" >
			{{$error}}
		  </div>
		  @endforeach
		@endif
						<div class="alert alert-warning" role="alert">
  							Doit calculer le tarif de Liviraison avent remplir le formulaire
							</div>
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
											<img src="{{$item->options->filepath}}" alt="IMG">
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
								<form method="POST" action="{{route('cart.updatetarif',['id' => $id_mag])}}">
									@csrf
									<input type="hidden" name="idmag" value="{{$id_mag}}"/>
									<input type="hidden" name="tarifo" value="{{$tarif}}"/>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select id="wilayaid" class="js-select2" name="wilaya">
										   
											<option value="1">Adrar</option>
											<option value="2">Chlef</option>
											<option value="3">Laghouat</option>
											<option value="4">Oum El Bouaghi</option>
											<option value="5">Batna</option>
											<option value="6">Béjaïa</option>
											<option value="7">Biskra</option>
											<option value="8">Béchar</option>
											<option value="9">Blida</option>
											<option value="10">Bouira</option>

											<option value="11">Tamanrasset</option>
											<option value="12">Tébessa</option>
											<option value="13">Tlemcen</option>
											<option value="14">Tiaret</option>
											<option value="15">Tizi Ouzou</option>
											<option value="16">Alger</option>
											<option value="17">Djelfa</option>
											<option value="18">Jijel</option>
											<option value="19">Sétif</option>
											<option value="20">Saïda</option>

											<option value="21">Skikda</option>
											<option value="22">Sidi Bel Abbès</option>
											<option value="23">Annaba</option>
											<option value="24">Guelma</option>
											<option value="25">Constantine</option>
											<option value="26">Médéa</option>
											<option value="27">Mostaganem</option>
											<option value="28">M'Sila</option>
											<option value="29">Mascara</option>
											<option value="30">Ouargla</option>

											<option value="31">Oran</option>
											<option value="32">El Bayadh</option>
											<option value="33">Tlemcen</option>
											<option value="34">Tiaret</option>
											<option value="35">Tizi Ouzou</option>
											<option value="36">El Tarf</option>
            <option value="37">Tindouf</option>
            <option value="38">Tissemsilt</option>
            <option value="39">El Oued</option>
            <option value="40">Khenchela</option>
            <option value="41">Souk Ahras</option>
            <option value="42">Tipaza</option>
            <option value="43">Mila</option>
            <option value="44">Aïn Defla</option>
            <option value="45">Naâma</option>
            <option value="46">Aïn Témouchent</option>
            <option value="47">Ghardaïa</option>
            <option value="48">Relizane</option>

            <option value="49">El M'Ghair</option>
            <option value="50">El Meniaa</option>
            <option value="51">Ouled Djellal</option>
            <option value="52">Bordj Badji Mokhtar</option>
            <option value="53">Béni Abbès</option>
            <option value="54">Timimoun</option>
            <option value="55">Touggourt</option>
            <option value="56">Djanet</option>
            <option value="57">In Salah</option>
            <option value="58">In Guezzam</option>
			</select>
										<div class="dropDownSelect2"></div>
									</div>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select id="livraisonid" class="js-select2" name="livraison">
											<option value="0">Livraison a Domicile</option>
											<option value="1">Livraison Stop Desk</option>
										</select>
							
										<div class="dropDownSelect2"></div>
									</div>
									<div class="flex-w">
										<button type="submit" class="flex-c-m stext-107 cl2 size-1007 bg1 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Afficher le prix de livraison
										</button>
									</div>
									<div class="size-209"  style="margin: 10px 0px 0px 10px; ">
										@if ($tarif > 0)
										<span class="stext-110 cl2">
											{{$tarif}} DA
										</span>
										@else 
										<span class="stext-110 cl2">
											 0.00 DA
										</span>
										@endif
									</div>
									
								
								</div>
								</form>	
								<form method="POST" action="{{route('cmd.store',['id'=>$id_mag])}}">
									@csrf
						</div>	
						@if ($tarif > 0)
						<div class="input-commande">
					     	<input type="hidden" name="wilaya" value="{{$wil}}"/>
					    	<input type="hidden" name="livraison" value="{{$typeL}}"/>
							<input type="hidden" name="idmag" value="{{$id_mag}}"/>
							<input class="input2 plh1 stext-107 cl7" type="text" name="nomClient" placeholder="Nom Prenom">
							<input class="input2 plh1 stext-107 cl7" type="text" name="numberTele" placeholder="Numero de téléphone">
							<input class="input2 plh1 stext-107 cl7" type="text" name="email" placeholder="E-mail">
							<input class="input2 plh1 stext-107 cl7" type="text" name="state" placeholder="Commune">
							<input class="input2 plh1 stext-107 cl7" type="text" name="adresse" placeholder="Adresse de livraison">

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
						<input type="hidden" name="idMag" value="{{$id_mag}}" id="inputidmag">
						<input type="hidden" name="idprod" value="{{$id_mag}}" >
						<input type="hidden" name="tarifLaiv" value="{{$tarif}}" >
						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Passer la Commande
						</button>
						</form>
						@endif
					</div>
				
				</div>
			</div>
		</div>
	
@endsection