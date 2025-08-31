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

                    <h1 style="color: #eee">Update categorie</h1>
                    <form action="{{url('edit_livre',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="" style="color: white">Titre:</label>
                        <input type="text" value="{{$data ->titre}}" name="titre" id=""><br><br>
                        <label for="" style="color: white">Auteur:</label>
                        <input type="text" value="{{$data ->auteur}}" name="auteur" id=""><br><br>
                        <label for="" style="color: white">Editeur:</label>
                        <input type="text" value="{{$data ->editeur}}" name="editeur" id=""><br><br>
                        <label for="" style="color: white">Date Edition:</label>
                        <input type="date" value="{{$data ->dateEdition}}" name="dateEdition" id=""><br><br>
                        <label for="" style="color: white">Nombre d'exemplaire:</label>
                        <input type="number" value="{{$data ->nombreExemplaire}}" name="NbrExemplaire" min="0" id=""><br><br>
                        <label for="" style="color: white">Image précédente:</label>
                        <img src="/img/{{$data->image}}" width="100" height="100" alt=""><br><br>
                        <label for="" style="color: white">Nouvelle Image:</label>
                        <input type="file" name="image" accept="image/*" id=""><br><br>
                        <label for=" " style="color: white">id de categorie:</label>
                        <input type="number" value="{{$data ->categorie_id}}" min="0" name="categorie_id" id=""><br><br>

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
