<aside class="main-sidebar sidebar-light-primary elevation-4">
    <div class="sidebar">
        <div class="mt-3 pb-3 mb-3  text-center">
            <div class="image">
                <a href="{{ route('index') }}">
                    <img style="max-width: 230px;" src="{{  asset('public/image/acq.png') }}">
                </a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item border-bottom">
                    <a href="{{ route('index') }}" class="nav-link">

                        <i class="fa-solid fa-house"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item border-bottom">
                    <a href="{{ route('customers.index') }}" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('domains.index') }}" class="nav-link">

                        <i class="fa-solid fa-hourglass-end"></i>
                        <p>Domains</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('domains.index') }}" class="nav-link">
                        <i class="fa-solid fa-hotel"></i>
                        <p>Reports <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('report.domain_expire') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Domain Expire </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item border-bottom">
                    <a href="" class="nav-link">
                        <i class="fa thin fa-gear"></i>
                        <p>Settings <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item border-bottom fa-carret">

                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom fa-carret">

                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role Permission</p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Send Notification</p>
                            </a>
                        </li>

                        <li class="nav-item border-bottom">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
