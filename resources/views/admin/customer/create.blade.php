@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Box TItle</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Left BUtton</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Right Button</a>
            </div>
            <!-- /.box-footer -->
          </div>
       </div>
    </div>
@endsection
