
<div class="sidebar" data-image="{{ asset('img/sidebar-5.jpg') }}">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                {{ env('APP_NAME') }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">

                <a class="nav-link" href="#">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>

                <a class="nav-link" href="{{route('roles.index')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Role Management</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">

                    <i class="nc-icon nc-notes"></i>
                    <p>User Management</p>
                </a>
            </li>
            <li>

                <a class="nav-link" href="{{route('events.index')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Event Management</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-atom"></i>
                    <p>Order Management</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Site Settings</p>
                </a>
            </li>
        </ul>
    </div>

</div>