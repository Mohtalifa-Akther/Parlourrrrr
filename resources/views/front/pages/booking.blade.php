@extends('front.layout.app')
@section('content')
  <div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Booking </h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
				and skin care services will suit every beauty need.</p>
			</div>
        <div class="gal-btm">
         <div class="map-home">

            <div class="row">

                <div class="col-md-6 col-md-offset-3">
               @if(session()->has('register-success'))
               <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong class="text-danger">Booking Successfylly!</strong> <a href="{{ url('/packages') }}">Back to packages</a>
               </div>
               @endif
                    <form action="{{ url('/sendbookings') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Package</label>
                            <select name="package_id" id="">
                                <option value="">--select--</option>
                                @forelse(\App\Package::all() as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }}</option>
                                @empty
                                    no package

                                @endforelse

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Booking Date:</label>
                            <input type="date" name="booking_date" >
                        </div>

                        <input type="submit" value="Book" class="btn btn-success">
                    </form>
                </div>


            </div>

            <div class="clearfix"></div>
         </div>
      </div>
	</div>
</div>

@endsection

@push('scripts')


@endpush
