<!DOCTYPE html>
<html>
<head>
    <title>Your Portfolio</title>
    <!-- Include CSS/Bootstrap -->
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
