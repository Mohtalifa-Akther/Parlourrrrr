@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Settings</h3>


              <div class="box-tools pull-right">
              <button id="btnEdit" class="btn btn-flat btn-default" onclick="edit(event)"><i class="fa fa-pencil"></i> Edit</button>
              </div>
            </div>
            <form action="{{ url('/admin/settings/update') }}" method="post" enctype="multipart/form-data">
                @csrf
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Name</label>
                  <input type="text" class="form-control" name="siteName" id="exampleInputEmail1" disabled value="{{ setting('siteName') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Email</label>
                  <input type="text" class="form-control" name="siteEmail" disabled id="exampleInputEmail1" value="{{ setting('siteEmail') }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Site Phone</label>
                  <input type="text" class="form-control" name="sitePhone" disabled id="exampleInputEmail1" value="{{ setting('sitePhone') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Address</label>
                  <input type="text" class="form-control" name="siteAddress" disabled id="exampleInputEmail1" value="{{ setting('siteAddress') }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Currency</label>
                  <input type="text" class="form-control" name="currency" disabled id="exampleInputEmail1" value="{{ setting('currency') }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Site Logo</label> <br>
                  <img src="{{ asset('storage') }}/{{ setting('siteLogo') }}"  alt="" style="width: 50px; height:50px;margin-bottom:10px;">
                  <br>
                  <input name="siteLogo" type="file" id="exampleInputFile" disabled>
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
