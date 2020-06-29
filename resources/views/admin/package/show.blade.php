@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Package Details</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" disabled placeholder="Package Name" value="{{ $package->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Services</label>
                  <ol>
                      @forelse (explode(',',$package->services) as $item)
                      <li>{{ $item }}</li>
                      @empty
                          no service
                      @endforelse
                  </ol>

                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" disabled placeholder="Package price" value="{{ $package->price }}">
                </div>

              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ url('/admin/packages') }}" class="btn btn-sm btn-success btn-flat " > <i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <!-- /.box-footer -->
          </div>

       </div>
    </div>


@endsection
