
<!-- view mhs -->
@can('mahasiswa')
<ul class="navbar-nav bg-gray-800 sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MBKMSI</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Charts -->
  <li class="nav-item">
  <a class="nav-link" href="/home">
      <i class="fas fa-fw fa-home"></i>
      <span>Home</span></a>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="/tambahkegiatan">
          <i class="fas fa-fw fa-book"></i>
          <span>Kegiatan MBKM</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="/bukti">
          <i class="fas fa-fw fa-user-circle "></i>
          <span>Bukti MBKM</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
@endcan

@can('koor')
<!-- view koor -->
<ul class="navbar-nav bg-gray-800 sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/homekoor">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MBKMSI</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Charts -->
  <li class="nav-item">
  <a class="nav-link" href="/homekoor">
      <i class="fas fa-fw fa-home"></i>
      <span>HOME</span></a>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
      <a class="nav-link" href="/tambahkegiatankoor">
          <i class="fas fa-fw fa-book"></i>
          <span>KEGIATAN MBKM</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
      <a class="nav-link" href="/konfirmasimhs">
          <i class="fas fa-fw fa-user-circle "></i>
          <span>KONFIRMASI MAHASISWA</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
@endcan

@can('dosen')
<!-- view koor -->
<ul class="navbar-nav bg-gray-800 sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/homedosen">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">MBKMSI</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Charts -->
  <li class="nav-item">
  <a class="nav-link" href="/homedosen">
      <i class="fas fa-fw fa-home"></i>
      <span>HOME</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
@endcan
