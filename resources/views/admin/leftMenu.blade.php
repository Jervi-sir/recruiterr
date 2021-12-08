<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Data</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-chart-line"></i>
          <span class="menu-title">Charts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">ChartJs</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Database</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.students') }}">Students</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.specialities') }}">Specialities</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.skills') }}">Skills</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.badges') }}">Badges</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.list') }}">Admins</a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>
