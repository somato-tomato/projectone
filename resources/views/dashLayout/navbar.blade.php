<nav class="navbar navbar-expand-lg d-flex justify-content-between">
    <div class="" id="navbarNav">
        <ul class="navbar-nav" id="leftNav">
            <li class="nav-item">
                <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
            </li>
        </ul>
    </div>
    <div class="logo">
        <a class="navbar-brand" href="index.html"></a>
    </div>
    <div class="" id="headerNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <button class="nav-link btn btn-outline-secondary  profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</button>
                <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                    {{--LOGOUT PAKE TEMPLATE TAMBAH ID--}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    {{--SELESAI--}}
                </div>
            </li>
        </ul>
    </div>
</nav>
