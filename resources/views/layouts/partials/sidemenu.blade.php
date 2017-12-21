      <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><span>Desa Sukajadi km.16</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/admin.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home </a></li>
                  <li><a href="{{ route('perangkatdesa.index') }}"><i class="fa fa-user"></i> Perangkat Desa </a></li>
                  <li><a href="{{ route('about.index') }}"><i class="fa fa-university"></i> Profile Desa </a></li>

                  @can('view_layanandesa')
                  <li><a><i class="fa fa-book"></i> Layanan Desa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('perijinan.index') }}">Layanan Perizinan</a></li>
                      <li><a href="{{ route('kependudukan.index') }}">Layanan Kependudukan</a></li>
                    </ul>
                  </li>
                  @endcan

                  @can('view_berita')
                  <li><a href="{{ route('banner.index') }}"><i class="fa fa-file-photo-o"></i>Banner</a></li>
                  <li><a><i class="fa fa-file-text"></i>Berita Desa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('category.index') }}">Category</a></li>
                      <li><a href="{{ route('post.index') }}">Post</a></li>
                    </ul>
                  </li>
                  @endcan

                  @can('view_agenda')
                  <li><a href="{{ route('notes.index') }}"><i class="fa fa-calendar-check-o"></i>Agenda </a></li>
                  @endcan
                </ul>
              </div>

              @can('view_surat')
              <div class="menu_section">
                <h3>Management Surat</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-envelope"></i> Surat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('suratmasuk.index') }}">Surat Masuk</a></li>
                      <li><a href="{{ route('suratkeluar.index') }}">Surat Keluar</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              @endcan

              @can('view_users')
              <div class="menu_section">
                <h3>Management User</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('user.index') }}">User</a></li>
                      <li><a href="{{ route('role.index') }}">Role</a></li>
                      <li><a href="{{ route('permission.index') }}">Permission</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              @endcan

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>>

