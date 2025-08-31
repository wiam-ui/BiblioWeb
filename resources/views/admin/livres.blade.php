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
            <div class="col-lg-12">
               <div class="block margin-bottom-sm">
                  <div class="title"><strong style="color: white">Les Livres: </strong></div>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="color: #eee">id:</th>
                        <th style="color: #eee">Titre:</th>
                        <th style="color: #eee">Auteur:</th>
                        <th style="color: #eee">Editeur:</th>
                        <th style="color: #eee">Date d'edition:</th>
                        <th style="color: #eee">Nombre d'Exemplaire:</th>
                        <th style="color: #eee">Image:</th>
                        <th style="color: #eee">Id de Categorie</th>
                        <th></th>
                        <th></th>
                      </tr>
                          @foreach($Livre as $livres)
                            <tr>
                              <td>{{$livres->id}}</td>
                              <td>{{$livres-> titre}}</td>
                              <td>{{$livres -> auteur}}</td>
                              <td>{{$livres -> editeur}}</td>
                              <td>{{$livres -> dateEdition}}</td>
                              <td>{{$livres -> NbrExemplaire}}</td>
                              <td><img height="100" width="100" src="/img/{{$livres->image}}" alt="" width="50px" height="50px"></td>
                              <td>{{$livres->categorie_id}}</td>
                              <td><a class="btn btn-primary" href="{{url('delete_livre',$livres->id)}}"><i class="fa-solid fa-trash"></i></a></td>
                              <td><a href="{{url('update_livre', $livres->id)}}" class="btn btn-danger" onclick="return confirm('are you sure')"><i class="fa-solid fa-file-pen"></i></a></td>
                            </tr>

                          @endforeach
                        </table>
                      </div>
                    </div>
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
