<!DOCTYPE html>
<html lang="en">
@include('dashboard.layout.head')

<body>
    <div class="page-container">
        @include('dashboard.layout.sidebar')
        <div class="page-content">
            <div class="main-wrapper">
                @yield('content')
            </div>

        </div>
    </div>
    @include('dashboard.layout.script')
</body>

</html>