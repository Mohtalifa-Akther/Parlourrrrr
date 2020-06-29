@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Employee</h3>


              <div class="box-tools pull-right">

              </div>
            </div>
            <form action="{{ url('/admin/employees/store') }}" method="post" enctype="multipart/form-data" data-parsley-validate>
                @csrf
            <!-- /.box-header -->
            <div class="box-body">


                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Employee Name" required>
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Speciality</label>
                  <input type="text" class="form-control" name="speciality" placeholder="Speciality" required>
                </div>
                    </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Short Description</label>
                  <input type="text" class="form-control" name="description" placeholder="Description" required>
                </div>

                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Employee Email" required>
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address1</label>
                  <input type="text" class="form-control" name="address1" placeholder="Address1" required>
                </div>

                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address2</label>
                  <input type="text" class="form-control" name="address2" placeholder="Address2">
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" name="city" placeholder="City" required>
                </div>
                    </div>
                    <div class="col-md-6">


                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="text" class="form-control" name="country" placeholder="Country" required>
                </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                </div>
                    </div>
                    <div class="col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text" class="form-control" name="twitter" placeholder="Twitter">
                </div>

                    </div>
                </div>




                <div class="form-group">
                  <label for="exampleInputFile">Employee Image</label> <br>
                  {{-- <img src="{{ asset('storage') }}/{{ $user->avatar }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;"> --}}
                  <br>
                  <input name="avatar" type="file" id="exampleInputFile">
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
