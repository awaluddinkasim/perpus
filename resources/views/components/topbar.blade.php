<!-- Top Bar Start -->
<div class="topbar">

    <nav class="navbar-custom">

        <ul class="float-right mb-0 list-inline">

            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5>Welcome</h5>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout
                    </a>
                </div>
            </li>

        </ul>

        <ul class="mb-0 list-inline menu-left">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

        <div class="clearfix"></div>

    </nav>

</div>
<!-- Top Bar End -->
