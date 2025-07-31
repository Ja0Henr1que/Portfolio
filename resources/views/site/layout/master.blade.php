<!DOCTYPE html>
<html lang="en">

@include('site.includes.header.head')

<body>
    @include('site.includes.header.nav')
    @yield('content')
    @include('site.includes.footer.index')
    @include('site.includes.footer.scripts')
</body>

</html>
