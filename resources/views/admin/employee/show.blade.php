@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Employee Details</h3>


              <div class="box-tools pull-right">

              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">


                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Employee Name" value="{{ $employee->name }}" disabled>
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Speciality</label>
                  <input type="text" class="form-control" name="speciality" placeholder="Speciality" value="{{ $employee->speciality }}" disabled>
                </div>
                    </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Short Description</label>
                  <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $employee->description }}" disabled>
                </div>

                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Employee Email" value="{{ $employee->email }}" disabled>
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $employee->phone }}" disabled>
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address1</label>
                  <input type="text" class="form-control" name="address1" placeholder="Address1" value="{{ $employee->addrss1 }}" disabled>
                </div>

                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address2</label>
                  <input type="text" class="form-control" name="address2" placeholder="Address2" value="{{ $employee->address2 }}" disabled>
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" name="city" placeholder="City" value="{{ $employee->city }}" disabled>
                </div>
                    </div>
                    <div class="col-md-6">


                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="text" class="form-control" name="country" placeholder="Country" value="{{ $employee->country }}" disabled>
                </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ $employee->facebook }}" disabled>
                </div>
                    </div>
                    <div class="col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="{{ $employee->twitter }}" disabled>
                </div>

                    </div>
                </div>




                <div class="form-group">
                  <label for="exampleInputFile">Employee Image</label> <br>
                  <img src="{{ asset('storage') }}/{{ $employee->avatar }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;" >
                  <br>
                  {{-- <input name="avatar" type="file" id="exampleInputFile"> --}}
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{ url('/admin/employees') }}" class="btn btn-sm btn-success btn-flat pull-right" > <i class="fa fa-check"></i> Back</a>
            </div>
            <!-- /.box-footer -->
          </div>

       </div>
    </div>


@endsection
