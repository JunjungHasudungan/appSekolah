<div id="app">
    
    <div class="container-fluid">

        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="flex items-center justify-center mt-4">
                    <div class="flex items-center">
                        <span class="text-white text-2xl mx-4 font-semibold">{{ trans('global.site_title') }}</span>
                    </div>
                </div>
                <div class="sidebar-sticky pt-3 ">
                {{-- e --}}
                <ul class="nav flex-column ">
                    <li class="c-sidebar-nav-item ">
                        <a class="c-sidebar-nav-link" href="#">
                            <i class="c-sidebar-nav-icon fas fa-tachometer-alt"></i>
                            <span > {{ trans('global.dashboard') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                            <i class="c-sidebar-nav-icon fas fa-cogs"></i> {{ trans('global.registration') }} 
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                            <i class="c-sidebar-nav-icon fas fa-users"></i>  {{ trans('cruds.user.title_student') }}
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                            <i class="c-sidebar-nav-icon fas fa-chalkboard-teacher"></i> {{ trans('cruds.user.title_teacher') }} 
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                            <i class="fa-fw fas fa-cogs c-sidebar-nav-icon"></i> {{ trans('global.majors') }} 
                        </a>
                    </li>
                    <li> @include('partial.menu')</li>
                    <li class="c-sidebar-nav-item">
                        <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">
            
                            </i>
                            {{ trans('global.logout') }}
                        </a>
                    </li>
                </ul>
            </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <canvas class="my-2 w-100" id="myChart" width="0" height="0"></canvas>
                    @yield('content')
            </main>
        </div>
    </div>