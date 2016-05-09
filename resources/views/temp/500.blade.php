<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is 500  page.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>