@extends('front.layout.app')
@section('content')

<div class="contact">
	<div class="container">
		<div class="wthree_head_section">
            <h3 class="w3l_header">Sign In | Sign Up</h3>
            <hr>
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-4 book-form">
                    <h3 class="text-center">Login</h3>


                    @if(session()->has('login-error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong class="text-danger">Login Invalid!</strong> Email or Password incorrect!
                    </div>
                    @endif
                    <form action="{{ '/customer/login' }}" method="post" data-parsley-validate>
                        @csrf
					<div class="contact-left  ">
						<div class="f-control ">
							<label class="header">Email <span>:</span></label>
							<input type="email" class="email" name="email" placeholder="Email" required="">
						</div>

						<div class="f-control ">
							<label class="header">Password <span>:</span></label>
							<input type="password" name="password" placeholder="*******" required="">
						</div>
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div>
					<div class="clearfix"> </div>
					<input type="submit" class="btn-success" value="Login">
				</form>
				</div>
				<div class="col-md-8 book-form" style="border-left: 2px solid grey;">
                    <h3 class="text-center">Register</h3>
                     @if(session()->has('register-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong class="text-danger">Susccessfully Registerd!</strong> Login to continue.
                    </div>
                    @endif

                     @if(session()->has('register-error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong class="text-danger">Email exits!</strong> Email already exits! Use another one.
                    </div>
                    @endif
                    <form action="{{ '/customer/register' }}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
					<div class="col-md-12 col-sm-12 contact-left agileits-w3layouts">

						<div class="f-control">
							<label class="header">Full Name <span>:</span></label>
							<input type="text" name="name" placeholder="Name" required="">
						</div>

						<div class="f-control">
							<label class="header">Email <span>:</span></label>
							<input type="email" class="email" name="email" placeholder="Email" required="">
						</div>

						<div class="f-control">
							<label class="header">Mobile Number <span>:</span></label>
							<input type="text" name="phone" placeholder="Mobile Number" required="">
                        </div>

                        <div class="f-control">
							<label class="header">Address 1 <span>:</span></label>
							<input type="text" name="address1" placeholder="Address 1" required="">
                        </div>

                        <div class="f-control">
							<label class="header">Address 2 <span>:</span></label>
							<input type="text" name="address2" placeholder="Address 2" >
                        </div>

                        <div class="row">
                                      <div class="col-md-6">
                        <div class="f-control">
							<label class="header">City <span>:</span></label>
							<input type="text" name="city" placeholder="City" required="">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="f-control">
                                <label class="header">Country <span>:</span></label>
                                <input type="text" name="country" placeholder="Country" required="">
                            </div>
                        </div>
                        </div>

						<div class="f-control ">
							<label class="header">Password <span>:</span></label>
							<input type="password" id="password" name="password" placeholder="*******" required="" data-parsley-min="6" >
                        </div>
                        <div>
                        	<label class="header">Confirm Password <span>:</span></label>
							<input type="password" name="confirm-password" placeholder="*******" required="" data-parsley-min="6" data-parsley-equalto="#password" data-parsley-equalto-message="Password doesn't match">
						</div>
                        <div class="f-control">
							<label class="header">Image<span>:</span></label>
							<input type="file" name="avatar" placeholder="Mobile Number" required="">
                        </div>



						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div>
					<div class="clearfix"> </div>
					<input type="submit" value="Sign Up">
				</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>


@endsection
