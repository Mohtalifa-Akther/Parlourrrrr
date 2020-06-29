@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Service</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <form action="{{ url('/admin/services/update',$service) }}" method="post" enctype="multipart/form-data">
                @csrf
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Service Name" value="{{ $service->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                 <textarea name="description" class="form-control" rows="3" placeholder="write ...">{{ $service->description }}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Service Image</label> <br>
                  <img src="{{ asset('storage') }}/{{ $service->image }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;">
                  <br>
                  <input name="image" type="file" id="exampleInputFile">
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="{{ url('/admin/services') }}" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Back</a>
              <button type="submit" class="btn btn-sm btn-success btn-flat pull-right" > <i class="fa fa-check"></i> Update</a>
            </div>
            <!-- /.box-footer -->

        </form>
          </div>

       </div>
    </div>

@endsection
