<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="ti-shield menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Users</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">User List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create New User</a></li>
            </ul>
        </div>
    </li>
</ul>