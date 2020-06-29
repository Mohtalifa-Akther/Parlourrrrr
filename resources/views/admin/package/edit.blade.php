@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Package</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <form action="{{ url('/admin/packages/update',$package) }}" method="post" >
                @csrf
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Package Name" value="{{ $package->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Services</label>
                 <textarea name="services" class="form-control" rows="3" placeholder="write ...">{{ $package->services }}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" placeholder="Package price" value="{{ $package->price }}">
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="{{ url('/admin/packages') }}" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Back</a>
              <button type="submit" class="btn btn-sm btn-success btn-flat pull-right" > <i class="fa fa-check"></i> Update</a>
            </div>
            <!-- /.box-footer -->

        </form>
          </div>

       </div>
    </div>
@endsection
