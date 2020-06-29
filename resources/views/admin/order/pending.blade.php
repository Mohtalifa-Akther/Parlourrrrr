@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
                     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Order List</h3>

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
                    <th>Total</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @forelse($orders as $order)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->customer->name}}</td>
                    <td>{{ setting('currency') }}{{ $order->total }}</td>

                    <td>
                        @if($order->status == "pending")
                        <span class="label label-primary">{{ $order->status }}</span>
                        @elseif($order->status == "accepted")
                        <span class="label label-success">{{ $order->status }}</span>
                        @else
                        <span class="label label-danger">{{ $order->status }}</span>
                        @endif
                    </td>
                     <td>{{ $order->created_at }}</td>
                    <td>
                      <a href="{{ url('admin/orders/show',$order) }}" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-eye"></i>View</a>
                      <a href="{{ url('admin/orders/changeStatus',[$order,'accepted']) }}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i>Accept</a>
                      <a href="{{ url('admin/orders/changeStatus',[$order,'rejected']) }}" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-close"></i>Reject</a>
                      <a href="{{ url('admin/orders/delete',$order) }}" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  @empty
                  No pending order
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              {{-- {{$orders->links()}} --}}
            </div>
            <!-- /.box-footer -->
          </div>
       </div>
    </div>
@endsection
