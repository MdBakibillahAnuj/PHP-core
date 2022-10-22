<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
</head>
<body class="sb-nav-fixed">
@include('admin.top-nav')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.navbar');
    </div>
    <div id="layoutSidenav_content">
        <main class="bg-secondary">
            @yield('body')
        </main>

    </div>
</div>
@include('admin.script')
</body>
</html>


