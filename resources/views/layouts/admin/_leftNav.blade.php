<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="ti-shield menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Users</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-user">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">User List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create New User</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-tag menu-icon"></i>
            <span class="menu-title">Category</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-category">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Category List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Create New Category</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-author" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Author</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-author">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('author.index')}}">Author List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('author.create')}}">Create New Author</a></li>
            </ul>
        </div>
    </li>
</ul>
