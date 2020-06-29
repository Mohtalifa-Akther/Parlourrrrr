@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
                     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Service List</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @forelse($services as $service)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage') }}/{{ $service->image }}" width="30" height="30" alt=""></td>
                    <td><a href="{{ url('admin/services/show',$service) }}">{{ $service->name }}</a></td>

                    <td>{{ substr($service->description,0,15) }}..</td>
                    <td>
                      <a href="{{ url('admin/services/show',$service) }}" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('admin/services/edit',$service) }}" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                      <a href="{{ url('admin/services/delete',$service) }}" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  @empty
                  No Service added yet
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              {{$services->links()}}
            </div>
            <!-- /.box-footer -->
          </div>
       </div>
    </div>
@endsection
