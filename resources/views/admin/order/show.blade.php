@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Order Details</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group form-inline">
                  <label for="exampleInputEmail1">Customer: {{ $order->customer->name }}</label>

                  <input type="text" class="form-control" name="name" disabled placeholder="Package Name" value="{{ $order->customer->name }}">
                </div>
                <div class="form-group">
                     <label for="exampleInputEmail1">Phone: {{ $order->customer->phone }}</label>
                </div>
                <div class="form-group form-inline">
                     <label for="exampleInputEmail1">Shipping Address: </label>
                     <address>
                        {{ $order->customer->address1 }}, {{ $order->customer->city }}, {{ $order->customer->country }}
                     </address>
                </div>
                <div class="form-group">
                     <label for="exampleInputEmail1">Payment Method: <span class="label label-success"> {{ $order->paid_by }}</span></label>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Products</label>
                  <table class="table">
                      <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Qty</th>
                          <th>Subtotal</th>
                      </tr>
                      @php

                      @endphp
                      @foreach($order->products as $product)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->pivot->qty }}</td>
                          <td>{{ setting('currency') }}{{ $product->pivot->subtotal }}</td>
                      </tr>
                      @endforeach
                  </table>
                </div>

                <div class="form-group form-inline">
                  <label for="exampleInputEmail1" >Total: </label>
                  <input type="text" class="form-control" name="price" disabled placeholder="Package price" value="{{ setting('currency') }} {{ $order->total }}">
                </div>

              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ url('/admin/orders') }}" class="btn btn-sm btn-success btn-flat " > <i class="fa fa-arrow-left"></i> Back</a>
                <a href="{{ url('admin/orders/changeStatus',[$order,'accepted']) }}" class="btn btn-flat btn-sm btn-success pull-right"><i class="fa fa-check"></i>Accept</a>
                <a href="{{ url('admin/orders/changeStatus',[$order,'rejected']) }}" class="btn btn-flat btn-sm btn-warning pull-right"><i class="fa fa-close"></i>Reject</a>
            </div>
            <!-- /.box-footer -->
          </div>

       </div>
    </div>


@endsection
