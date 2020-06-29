@extends('front.layout.app')
@section('content')
  <div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Packages </h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
				and skin care services will suit every beauty need.</p>
			</div>
        <div class="gal-btm">
         <div class="map-home">

            <div class="row">
                @forelse(\App\Package::all() as $package)
                <div class="col-md-3 team1">
                    <div class="inner-team1 text-center">

                    <h3>{{ $package->name }}</h3>

                     <ol>
                        @forelse(explode(',',$package->services) as $service)
                            <li style="padding: 5px">{{ $service }}</li>
                        @empty
                            no service
                        @endforelse
                     </ol>
                    <h4>Price: {{ setting('currency') }}{{ $package->price }}</h4>

                    <div class="team-social text-white">
                        <a href="{{ url('/bookings') }}"  class="btn btn-sm btn-success" style="color: white; border-radius:0px;">Book</a>
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
