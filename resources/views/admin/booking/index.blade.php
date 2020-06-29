@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
                     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Booking List</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Package</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @forelse($bookings as $booking)
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
                    <td>
                      <a href="{{ url('admin/bookings/changeStatus',[$booking,'accepted']) }}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i>Accept</a>
                      <a href="{{ url('admin/bookings/changeStatus',[$booking,'rejected']) }}" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-close"></i>Reject</a>
                      <a href="{{ url('admin/bookings/delete',$booking) }}" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  @empty
                  No Booking added yet
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              {{$bookings->links()}}
            </div>
            <!-- /.box-footer -->
          </div>
       </div>
    </div>
@endsection
