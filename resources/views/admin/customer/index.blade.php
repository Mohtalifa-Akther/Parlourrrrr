@extends('admin.app')

@section('content')
    <div class="row">
       <div class="col-md-12">
                     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Customer List</h3>

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
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @forelse($customers as $customer)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage') }}/{{ $customer->avatar }}" width="30" height="30" alt=""></td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                      <a href="{{ url('admin/customers/delete',$customer) }}" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  @empty
                  No Customer added yet
                  @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              {{$customers->links()}}
            </div>
            <!-- /.box-footer -->
          </div>
       </div>
    </div>
@endsection
