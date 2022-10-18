<!DOCTYPE html>
   <head>
    <title></title>
   @include('includes.head')
    @yield('head')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
   </head>

   <section>
    @include('includes.navigation')

   </section>

   <section>
   @yield('content')
   </section>

   <section>
     @include('includes.footer')
   </section>
