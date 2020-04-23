<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="/Adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
            <span class="right badge badge-danger"></span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('user.index') }}" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            User
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../gallery.html" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Selanjutnya
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
