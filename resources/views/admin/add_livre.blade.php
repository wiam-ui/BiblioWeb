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
      <!-- Page Header-->
      <div class="page-header no-margin-bottom">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom-" style="color: white">Basic forms</h2>
        </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item" style="color: white"><a href="index.html">Ajouter Livres</a></li>
          <li class="breadcrumb-item active" style="color: white">Livre</li>
        </ul>
      </div>
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Sidebar Navigation end-->
            <div class="page-content">
              <div class="page-header">
                <div class="container-fluid">
                  <!-- Ajouter categorie -->
                  <div class="col-lg-12">
                    <div class="block">
                      <div class="title">
                        <strong class="d-block" style="color: white">Ajouter livre</strong>
                      </div>
                      <div class="block-body">
                        <form action="{{url('upload_livre')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Titre: </label>
                            <input type="text" value="" name="titre" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Auteur: </label>
                            <input type="text" value="" name="auteur" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Editeur: </label>
                            <input type="text" value="" name="editeur" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Date Edition: </label>
                            <input type="date" value="" name="dateEdition" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Nombre d'exemplaire: </label>
                            <input type="number" value="" name="NbrExemplaire" class="form-control" min="0" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Image: </label>
                            <input type="file" name="image"class="form-control" accept="image/*" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">id de categorie: </label>
                            <input type="number" value="" name="categorie_id" class="form-control" min="0" required>
                          </div>

                          <div class="form-group">
                            <input type="submit" value="Ajouter" class="btn btn-primary">
                          </div>
                        </form>
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
