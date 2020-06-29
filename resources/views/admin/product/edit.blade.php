@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Product</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <form action="{{ url('/admin/products/update',$product) }}" method="post" enctype="multipart/form-data">
                @csrf
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                 <textarea name="description" class="form-control" rows="3" placeholder="write ...">{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" placeholder="Product price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Product Image</label> <br>
                  <img src="{{ asset('storage') }}/{{ $product->image }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;">
                  <br>
                  <input name="image" type="file" id="exampleInputFile">
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="{{ url('/admin/products') }}" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i> Back</a>
              <button type="submit" class="btn btn-sm btn-success btn-flat pull-right" > <i class="fa fa-check"></i> Update</a>
            </div>
            <!-- /.box-footer -->

        </form>
          </div>

       </div>
    </div>


@endsection
