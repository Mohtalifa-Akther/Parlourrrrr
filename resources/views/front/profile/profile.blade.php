@extends('front.layout.app')
@section('content')
  <div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Profile </h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
				and skin care services will suit every beauty need.</p>
			</div>
        <div class="gal-btm">
         <div class="map-home">
                            @if(session()->has('profile_update'))
               <div class="alert alert-success alert-dismissible text-center" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong class="text-success"> Profile Updated Successfully </strong>
               </div>
               @endif
             <form action="{{ url('profile/update',$customer) }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="box-body">



            <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Employee Name" value="{{ $customer->name }}">
                </div>

                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Employee Email" value="{{ $customer->email }}">
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $customer->phone }}">
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address1</label>
                  <input type="text" class="form-control" name="address1" placeholder="Address1" value="{{ $customer->address1 }}">
                </div>

                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Address2</label>
                  <input type="text" class="form-control" name="address2" placeholder="Address2" value="{{ $customer->address2 }}">
                </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">

                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" name="city" placeholder="City" value="{{ $customer->city }}">
                </div>
                    </div>
                    <div class="col-md-6">


                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                  <input type="text" class="form-control" name="country" placeholder="Country" value="{{ $customer->country }}">
                </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Password: </label>
                    <input type="password" name="password" value="{{ $customer->password }}">
                </div>






                <div class="form-group">
                  <label for="exampleInputFile">Employee Image</label> <br>
                  <img src="{{ asset('storage') }}/{{ $customer->avatar }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;">
                  <br>
                  <input name="avatar" type="file" id="exampleInputFile">
                </div>
              </div>
            <!-- /.box-body -->
            <div class="from-group">
                <input type="submit" value="Update" class="btn btn-success pull-right">
            </div>
            </form>
            <div class="clearfix"></div>
         </div>
      </div>
	</div>
</div>
@endsection

