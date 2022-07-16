<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
        <a href="{{ route('users.list')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Users
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul>
            <li><a href="{{route('users.add')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User add +</p>
            </a></li>
        </ul>

    <li class="nav-item">
        <a href="/register" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Room</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Position</p>
        </a>
    </li>
</ul>
