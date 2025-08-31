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
                <h2 class="h5 no-margin-bottom" style="color: white">Basic forms</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Reservation</a></li>
                <li class="breadcrumb-item active" style="color: white">Home</li>
            </ul>
        </div>

      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Sidebar Navigation end-->
            <div class="page-content">
              <div class="page-header">
                <div class="container-fluid">

                  <div class="col-lg-12">
                    <div class="block margin-bottom-md">
                      <div class="title"><strong style="color: white">Les reservations: </strong></div>
                      <div class="table-responsive">
                        <table class="table">
                          <tr>
                            <th style="color: #eee">id:</th>
                            <th style="color: #eee">Date d'emprunt:</th>
                            <th style="color: #eee">Heure d'emprunt:</th>
                            <th style="color: #eee">Date de reservation:</th>
                            <th style="color: #eee">Etat</th>
                            <th style="color: #eee">Id de user</th>
                            <th style="color: #eee">Id de livre</th>
                            <th></th>

                          </tr>
                          @foreach($data as $data)
                            <tr>
                              <td>{{$data->id}}</td>
                              <td>{{$data->date_emprunt}}</td>
                              <td>{{$data->heure_emprunt}}</td>
                              <td>{{$data->date_reservation }}</td>
                              <td>{{$data->etat}}</td>
                              <td>{{$data->user_id}}</td>
                              <td>{{$data->livre_id}}</td>
                              <td></td>
                              <td><a href="{{url('edit_reservation',$data->id)}}"><i class="fa-solid fa-file-pen" ></i></a></td>
                            </tr>
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
