@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
                     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Package List</h3>

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
                    <th>Name</th>
                    <th>Services</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @forelse($packages as $package)
                  <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td><a href="{{ url('admin/packages/show',$package) }}">{{ $package->name }}</a></td>
                    <td>{{ $package->services }}</td>

                    <td>{{ setting('currency') }} {{ number_format($package->price) }}</td>
                    <td>
                      <a href="{{ url('admin/packages/show',$package) }}" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('admin/packages/edit',$package) }}" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                      <a href="{{ url('admin/packages/delete',$package) }}" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  @empty
                  No Package added yet
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              {{$packages->links()}}
            </div>
            <!-- /.box-footer -->
          </div>
       </div>
    </div>
@endsection
