<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">NAVEGACIÓN</li>
          <li class="nav-item">
          <a href="" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.posts.index')}}" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>Ver todos los posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.posts.create')}}" class="nav-link">
                  <i class="fa fa-list"></i>
                  <p>Crear un post</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>