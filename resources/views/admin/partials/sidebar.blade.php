<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('storage') }}/{{ auth()->guard('admin')->user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="{{ Request::is('admin/dashboard') ? 'active' : ''}}"><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>


        <li class="treeview {{ Request::is('admin/bookings*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-calendar-o"></i> <span>Bookings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-success pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/bookings/pending') ? 'active' : '' }}" ><a href="{{ url('/admin/bookings/pending') }}"><i class="fa fa-circle-o"></i>Pending</a></li>
            <li class="{{ Request::is('admin/bookings') ? 'active' : '' }}"><a href="{{ url('/admin/bookings') }}"><i class="fa fa-circle-o"></i> All Bookings</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::is('admin/orders*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-success pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{ Request::is('admin/orders/pending') ? 'active' : '' }}><a href="{{ url('admin/orders/pending') }}"><i class="fa fa-circle-o"></i> Pending</a></li>
            <li {{ Request::is('admin/orders') ? 'active' : '' }}><a href="{{ url('admin/orders') }}"><i class="fa fa-circle-o"></i> All Orders</a></li>
          </ul>
        </li>
        <li class="treeview {{ Request::is('admin/services*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{ Request::is('admin/services/create') ? 'active' : '' }}><a href="{{ url('admin/services/create') }}"><i class="fa fa-circle-o"></i> New Service</a></li>
            <li {{ Request::is('admin/services') ? 'active' : '' }}><a href="{{ url('admin/services') }}"><i class="fa fa-circle-o"></i> All Service</a></li>
          </ul>
        </li>
        <li class="treeview {{ Request::is('admin/products*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-cubes"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/products/create') ? 'active' : '' }}"><a href="{{ url('/admin/products/create') }}"><i class="fa fa-circle-o"></i> New Product</a></li>
            <li class="{{ Request::is('admin/products') ? 'active' : '' }}"><a href="{{ url('/admin/products') }}"><i class="fa fa-circle-o"></i> Product List</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::is('admin/packages*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-cubes"></i> <span>Packages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/packages/create') ? 'active' : '' }}"><a href="{{ url('/admin/packages/create') }}"><i class="fa fa-circle-o"></i> New Package</a></li>
            <li class="{{ Request::is('admin/packages') ? 'active' : '' }}"><a href="{{ url('/admin/packages') }}"><i class="fa fa-circle-o"></i> Package List</a></li>
          </ul>
        </li>


        <li class="treeview {{ Request::is('admin/customers*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-users"></i> <span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/customers') ? 'active' : '' }}"><a href="{{ url('/admin/customers') }}"><i class="fa fa-circle-o"></i> All Customer</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::is('admin/employees*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-users"></i> <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="{{ Request::is('admin/employees/create') ? 'active' : '' }}"><a href="{{ url('/admin/employees/create') }}"><i class="fa fa-circle-o"></i> New Employee</a></li>
            <li class="{{ Request::is('admin/employees') ? 'active' : '' }}"><a href="{{ url('/admin/employees') }}"><i class="fa fa-circle-o"></i> All Employees</a></li>
          </ul>
        </li>

        <li class="header">Administrative</li>
        <li class="{{ Request::is('admin/profile') ? 'active' : ''}}"><a href="{{ url('/admin/profile') }}"><i class="fa fa-user text-aqua"></i> <span>Profile</span></a></li>
        <li class="{{ Request::is('admin/settings') ? 'active' : ''}}"><a href="{{ url('/admin/settings') }}"><i class="fa fa-cogs text-aqua"></i> <span>Settings</span></a></li>
        <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-briefcase text-danger"></i> <span>Logout</span></a></li>


    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
