<!DOCTYPE html>
<head>
 <title></title>
@include('partials/front.head')
 @yield('head')
 <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
</head>

<section>
 @include('partials/blog.header')

</section>

<section>
@yield('content')
</section>

<section>
  @include('partials/front.footer')
</section>
