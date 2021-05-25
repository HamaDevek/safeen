<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Main
        </li>
        <li>
            <a href="{{route('home.index')}}"><i data-feather="home"></i>Dashboard</a>
        </li>
        <li>
            <a href="{{route('ourteam.index')}}"><i data-feather="users"></i>Our Team</a>
        </li>
        <li>
            <a href="{{route('refugee.index')}}"><i data-feather="inbox"></i>Refugee Request</a>
        </li>
        <li>
            <a href="{{route('refugee.accepted')}}"><i data-feather="user-check"></i>Accepted Refugee</a>
        </li>
        <li>
            <a href="{{route('refugee.rejected')}}"><i data-feather="user-x"></i>Rejected Refugee</a>
        </li>
        <li>
            <a href="{{route('ouroffice.index')}}"><i data-feather="map-pin"></i>Our Location</a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" id="logout" class="d-none">
                @csrf
            </form>
            <button class="btn btn-danger" onclick="logout()"> Logout</button>
            <script>
                function logout() {
                    document.getElementById('logout').submit();
                }
            </script>
        </li>
    </ul>
</div>