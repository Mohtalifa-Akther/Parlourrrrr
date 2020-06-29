@extends('front.layout.app')
@section('content')
  <div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Products </h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
				and skin care services will suit every beauty need.</p>
			</div>
        <div class="gal-btm">
         <div class="map-home">

            <div class="row">
                @forelse($products as $product)
                <div class="col-md-3 team1">
                    <div class="inner-team1 text-center">
                    <img src="{{ asset('storage') }}/{{ $product->image }}" alt="" width="200" height="180" />
                    <h3>{{ $product->name }}</h3>
                    <h4>Price: {{ setting('currency') }}{{ $product->price }}</h4>
                    <p>{{ $product->description }}</p>
                        <div class="team-social text-white">
                            <a href="javascript:void;" onclick="addToCart({{json_encode($product) }})" class="btn btn-sm btn-success" style="color: white; border-radius:0px;">Add To Cart <span class="fa fa-shopping-cart"></span></a>
                        </div>
                    </div>
                </div>
                    @empty

                @endforelse

            </div>

            <div class="clearfix"></div>
         </div>
      </div>
	</div>
</div>

@endsection
