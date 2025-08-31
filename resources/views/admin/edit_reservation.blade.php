<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="">

                    <h1 style="color: white">Update reservation</h1>
                    <form action="{{url('update_reservation',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="" style="color: #eee">Etat:</label>
                        <input type="text" value="{{$data->etat}}" name="etat" id="etat"><br><br>
                        <input type="submit" class="btn btn-primary" value="enregister">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('DashboardAdmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('DashboardAdmin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('DashboardAdmin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/js/charts-home.js')}}"></script>
    <script src="{{asset('DashboardAdmin/js/front.js')}}"></script>
</body>
</html>
