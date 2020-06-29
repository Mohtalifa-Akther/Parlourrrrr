@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Profile</h3>


              <div class="box-tools pull-right">
              <button id="btnEdit" class="btn btn-flat btn-default" onclick="edit(event)"><i class="fa fa-pencil"></i> Edit</button>
              </div>
            </div>
            <form action="{{ url('/admin/profile/update') }}" method="post" enctype="multipart/form-data">
                @csrf
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" disabled value="{{ $user->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" disabled id="exampleInputEmail1" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control" name="password" disabled id="exampleInputEmail1" value="{{ $user->password }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Avatar</label> <br>
                  <img src="{{ asset('storage') }}/{{ $user->avatar }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;">
                  <br>
                  <input name="avatar" type="file" id="exampleInputFile" disabled>
                </div>
              </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="submit" class="btn btn-sm btn-warning btn-flat pull-right" disabled> <i class="fa fa-check"></i> Update</a>
            </div>
            <!-- /.box-footer -->

        </form>
          </div>

       </div>
    </div>

    <script>
        function edit(ev){

            var chilid = "";
            child = ev.target.nodeName == "I" ? ev.target : ev.target.children[0];
            console.log(ev);
            if( child.classList.contains("fa-pencil")){
                child.classList.remove("fa-pencil");
                child.classList.add("fa-close");
                child.parentNode.classList.add("btn-danger");
                $("input").removeAttr("disabled");
                $("button[type='submit']").removeAttr("disabled");
            }else{
                child.classList.add("fa-pencil");
                child.classList.remove("fa-close");
                child.parentNode.classList.remove("btn-danger");
                $("input").attr("disabled","disabled");
                $("button[type='submit']").attr("disabled","disabled");
            }

        }
    </script>
@endsection
