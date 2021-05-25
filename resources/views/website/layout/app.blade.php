<!DOCTYPE html>
<html lang="en-US">
@include('website.layout.head')

<body class="size-1140">
    @include('website.layout.nav')

    <main role="main">
        @yield('content')
    </main>
    @include('website.layout.footer')
    @include('website.layout.script')
</body>

</html>