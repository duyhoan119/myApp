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
        <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item"><a href="{{route('users.add')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User add +</p>
            </a></li>
        </ul>

    <li class="nav-item">
        <a href="/register" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Room</p>
        </a>
        <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item"><a href="{{route('rooms.add')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Room add +</p>
            </a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{route('position.')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Position</p>
        </a>
        <ul class="nav nav-pills nav-sidebar flex-column">
            <li  class="nav-item"    ><a href="{{route('position.add')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Position add +</p>
            </a></li>
        </ul>
    </li>
</ul>
