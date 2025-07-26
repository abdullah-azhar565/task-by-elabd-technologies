<!DOCTYPE html>
<html lang="en">
@include('sections.header')

<body>
    @include('sections.navbar')
    <main>
        @yield('content')
    </main>
    @include('sections.footer')

</body>

</html>
