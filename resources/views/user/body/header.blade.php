<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('dashboard_body') }}/assets/images/noteapp_logo-dark.png" alt="logo-dark" height="60">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('dashboard_body') }}/assets/images/noteapp_logo-light.png" alt="logo-light" height="60">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('profile.edit')}}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <!-- logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout
                            </button>
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>