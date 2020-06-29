@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Package</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <form action="{{ url('/admin/packages/store') }}" method="post">
                @csrf
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Package Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Services (must separated with ',' comma)</label>
                 <textarea name="services" class="form-control" rows="3" placeholder="write ..."></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" placeholder="Package price">
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="submit" class="btn btn-sm btn-success btn-flat pull-right" > <i class="fa fa-check"></i> Save</a>
            </div>
            <!-- /.box-footer -->

        </form>
          </div>

       </div>
    </div>

@endsection
