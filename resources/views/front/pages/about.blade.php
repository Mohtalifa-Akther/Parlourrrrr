@extends('front.layout.app')

@section('content')
<div class="about">
	<div class="container">


<!-- Team section -->
<section class="team" >
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Team</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
and skin care services will suit every beauty need.</p>
			</div>
		<div class="team-grid-top">
            @forelse($employees as $employee)
			<div class="col-md-3 team1">
				<div class="inner-team1">
				<img src="{{ asset('storage') }}/{{ $employee->avatar }}" alt="" width="400" height="300" />
				<h3>{{ $employee->name }}</h3>
				<h4>{{ $employee->speciality }}</h4>
				<p>{{ $employee->description }}</p>
					<div class="team-social">
						<a href="{{ $employee->facebook }}"><i class="fa fa-facebook"></i></a>
						<a href="{{ $employee->twitter }}"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
					</div>
				</div>
            </div>
            @empty
                No Employee Found
            @endforelse

			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

	</div>
</section>
<!-- //Team section -->



@endsection
