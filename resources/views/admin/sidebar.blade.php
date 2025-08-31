<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="title">
            <h1 class="h5">Wiam Barka</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading" style="color: white">Main</span>
        <ul class="list-unstyled" style="color: white">
                <li ><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i> Home </a></li>

                <li><a href="{{url('categorie')}}"><i class="fa-solid fa-list"></i>Categorie </a></li>

                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="fa-solid fa-book"></i>Livre </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_livre')}}">Ajouter Livres</a></li>
                    <li><a href="{{url('livres')}}">Modifier et Supprimer Livres</a></li>

                  </ul>
                </li>

                <li><a href="{{url('reservation_view')}}"><i class="fa-solid fa-list"></i>Reservation </a></li>
                <li><a href="{{url('user')}}"><i class="fa-solid fa-user"></i>Users</a></li>
                <li><a href="{{url('contact_view')}}"><i class="fa-solid fa-user"></i>Contact</a></li>



        </ul>
      </nav>
