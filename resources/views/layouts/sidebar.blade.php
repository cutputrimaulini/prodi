<div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
            <img src="../../assets/img/brand/logo1.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
            <!-- Sidenav toggler -->
            <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
               <li class="nav-item">
               <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="ni ni-shop text-primary"></i>
                        <span class="nav-link-text">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
              <a class="nav-link collapsed" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
              <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Prodi</span>
              </a>
              <div class="collapse" id="navbar-forms" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('prodi.index') }}" class="nav-link">Hasil Judul PA</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('prodi.persetujuan') }}" class="nav-link">Persetujuan Judul PA</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('prodi.formpa') }}" class="nav-link">Kumpulan Form PA</a>
                  </li>
                </ul>
              </div>
            </li>
               
            </ul>
        </div>
    </div>
</div>