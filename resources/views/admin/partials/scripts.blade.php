<!-- jQuery 3 -->
<script src="{{asset('vendor')}}/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('vendor')}}/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('vendor')}}/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('vendor')}}/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="{{asset('plugins')}}/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('plugins')}}/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="{{asset('vendor')}}/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('vendor')}}/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin')}}/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin')}}/js/demo.js"></script>
<script src="{{asset('admin')}}/js/toastr.min.js"></script>
 <script>
    @if(session()->has("mgs"))
        @if(session()->get('mgs')[0] == "Success")
            toastr.success("{{session()->get('mgs')[1]}}","Success!")
        @endif
        @if(session()->get('mgs')[0] == "Error")
            toastr.error("{{session()->get('mgs')[1]}}","Error!")
        @endif
        @if(session()->get('mgs')[0] == "Warning")
            toastr.success("{{session()->get('mgs')[1]}}","Warning!")
        @endif
    @endif
  </script>
