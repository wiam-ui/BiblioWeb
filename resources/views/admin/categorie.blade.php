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
          <h2 class="h5 no-margin-bottom" style="color: white">Basic forms</h2>
        </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item" ><a href="index.html">Categorie</a></li>
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
                  <!-- Ajouter categorie -->
                  <div class="col-lg-12">
                    <div class="block">
                      <div class="title">
                        <strong class="d-block" style="color: white">Ajouter Categorie</strong>
                      </div>
                      <div class="block-body">
                        <form action="{{url('add_categorie')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label class="form-control-label" style="color: #eee">Nom: </label>
                            <input type="text" value="" name="name" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label"  style="color: #eee">Description: </label>
                            <input type="text" value="" name="description" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label class="form-control-label"  style="color: #eee">Image: </label>
                            <input type="file" name="image"class="form-control" accept="image/*" required>
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
      </section>

      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Sidebar Navigation end-->
            <div class="page-content">
              <div class="page-header">
                <div class="container-fluid">

                  <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                      <div class="title"><strong style="color: white">Les Categories: </strong></div>
                      <div class="table-responsive">
                        <table class="table">
                          <tr>
                            <th  style="color: #eee">id:</th>
                            <th  style="color: #eee">Nom:</th>
                            <th  style="color: #eee">Description:</th>
                            <th  style="color: #eee">Image:</th>
                            <th></th>

                          </tr>
                          @foreach($data as $data)
                            <tr>
                              <td>{{$data->id}}</td>
                              <td>{{$data->name}}</td>
                              <td>{{$data ->description}}</td>
                              <td><img height="100" width="100" src="/img/{{$data -> image}}" alt="" width="50px" height="50px"></td>
                              <td></td>
                              <td><a href="{{url('edit_categorie',$data->id)}}"><i class="fa-solid fa-file-pen"></i></a></td>
                              <td><a href="{{url('delete_categorie',$data->id)}} " onclick="return confirm('are you sure')"><i class="fa-solid fa-trash"></i></a></td>
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
