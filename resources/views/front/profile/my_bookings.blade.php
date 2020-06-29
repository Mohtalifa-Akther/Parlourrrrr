@extends('front.layout.app')
@section('content')
  <div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">My Bookings </h3>
			</div>
        <div class="gal-btm">
         <div class="map-home">

            <div class="row">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Package</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                      @forelse(\App\Booking::where('customer_id',auth()->guard('customer')->user()->id)->get() as $booking)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->customer->name}}</td>
                    <td>{{ $booking->package->name }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>
                        @if($booking->status == "pending")
                        <span class="label label-primary">{{ $booking->status }}</span>
                        @elseif($booking->status == "accepted")
                        <span class="label label-success">{{ $booking->status }}</span>
                        @else
                        <span class="label label-danger">{{ $booking->status }}</span>
                        @endif
                    </td>

                  </tr>
                  @empty
                  No Booking added yet
                  @endforelse

                  </tbody>
                </table>
              </div>
            </div>

            <div class="clearfix"></div>
         </div>
      </div>
	</div>
</div>
@endsection

