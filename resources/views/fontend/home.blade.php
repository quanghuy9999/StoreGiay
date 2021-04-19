@extends('master')
@section('content')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						@foreach($all_product as $key =>$product)
						<a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="200" width="100" alt="" />
											<h2>{{number_format($product->product_price)}} VNĐ</h2>
											<p>{{$product->product_name}}</p>
											<a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
						</div>	
						</a>
						@endforeach
                    </div><!--features_items-->
                    
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<?php
									$i = 0;
								?>
								@foreach($brand as $key=> $brand_tab)
								<?php
									$i++;
								?>
								<li class="tabs_product {{$i==1 ? 'active' : '' }}" data-id="{{$brand_tab->brand_id}}"><a href="#tshirt" data-toggle="tab">{{$brand_tab->brand_name}}</a></li>
								
								@endforeach
							</ul>
						</div>
						<div id="tabs_product"></div>
						
					</div><!--/category-tab-->

@endsection