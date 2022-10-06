   @include('partials.head')

   <section>
    @include('partials.header')
   </section>

   <section>
   @yield('content')
   </section>

   <section>
     @include('partials.footer')
   </section>
