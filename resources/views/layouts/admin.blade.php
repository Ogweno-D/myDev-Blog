<!DOCTYPE html>
<head>
 <title></title>
@include('partials/backend.head')
@yield('head')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
</head>

 @include('partials/backend.topnav')

 @include('partials/backend.sidenav')

  @yield('content')

  @include('partials/backend.footer')
