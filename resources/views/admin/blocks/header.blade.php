<div class="page-brand">
    <a class="link" href="/">
                    <span class="brand">Admin
                        <span class="brand-tip">Panel</span>
                    </span>
    </a>
</div>
<div class="flexbox flex-1">
    <ul class="nav navbar-toolbar ml-auto">
        <li class="dropdown dropdown-notification">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-exclamation-circle"></i></a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                <li class="dropdown-menu-header">
                    <div>
                        <span><strong>5 New</strong> Notifications</span>
                        <a class="pull-right" href="javascript:;">view all</a>
                    </div>
                </li>
                <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                    <div>
                        <a class="list-group-item">
                            <div class="media">
                                <div class="media-img">
                                    <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <div class="media">
                                <div class="media-img">
                                    <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <div class="media">
                                <div class="media-img">
                                    <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <div class="media">
                                <div class="media-img">
                                    <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="dropdown dropdown-user">
            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                <img src="/img/admin-avatar.png" />
                <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="/"><i class="fas fa-home"></i>Main Page</a>
                <a class="dropdown-item" href="{{ url('/profile/') }}"><i class="fa fa-user"></i>Profile</a>
                <li class="dropdown-divider"></li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
</div>
