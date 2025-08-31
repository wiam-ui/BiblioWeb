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

                    <h1 style="color: white">Update categorie</h1>
                    <form action="{{url('update_categorie',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="" style="color: #eee">name:</label>
                        <input type="text" value="{{$data ->name}}" name="name" id="name"><br><br>
                        <label for="" style="color: #eee">description:</label>
                        <input type="text" value="{{$data ->description}}" name="description" id="description"><br><br>
                        <label for="" style="color: #eee">Image précédente:</label>
                        <img height="100" width="100" src="/img/{{$data -> image}}" alt="" srcset=""><br><br>
                        <label class="form-control-label" style="color: #eee">Image nouvelle: </label>
                        <input type="file" name="image"class="form-control" accept="image/*" required><br><br>

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
