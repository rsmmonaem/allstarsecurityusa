<!DOCTYPE html>
<html lang="en">
<head>
   @include('frontend.includes.head')
</head>
   <body>
      @include('frontend.includes.header')
      <main>
         @yield('content')
      </main>
      @include('frontend.includes.footer')
      <div class="back-top"></div>
      <!-- Bootstrap JS -->
      <script src="{{ asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <!--Vendors-->
<script src="{{ asset('frontend/assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/jarallax/jarallax-video.min.js') }}"></script>
      <!-- Theme Functions -->
      <script src="{{ asset('frontend/assets/js/functions.js') }}"></script>
      


     

   </body>
</html>
