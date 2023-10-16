<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">

    {{-- Owl Carousel --}}
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    

    {{-- Font awesome --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        a{
            text-decoration: none !important;
        }
    </style>

    <!-- Scripts -->
   
</head>
<body>
    
    @include('layouts.inc.frontnavbar')

    <div class="content">
        @yield('content')
    </div>

    {{-- <div class="whatsapp-chat">
        <a href="https://wa.me/+380984233106?text=Куплю%20вашу%20машину%20з%20оголошення" target="_blank">
            <img src="{{ asset('assets/images/whatsapp-icon.png') }}" alt="whatsapp-logo" height="80px" width="80px">
        </a>
    </div> --}}

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
   {{-- Код, який зробив усі карточки одного розміру --}}
    <script>
    $(window).on('load', function() {
      var maxCardHeight = 0;

      $('.card').each(function() {
        var cardHeight = $(this).height();
        if (cardHeight > maxCardHeight) {
          maxCardHeight = cardHeight;
        }
      });

      $('.card').height(maxCardHeight);
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function() {
      // Додайте клас "owl-carousel" до контейнера каруселі
      $('.featured-carousel').owlCarousel({
        items: 4, // Задайте бажану кількість карточок, які відображаються одночасно
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1 // Задайте бажану кількість карточок для мобільних пристроїв
          },
          768: {
            items: 3 // Задайте бажану кількість карточок для планшетів
          },
          1200: {
            items: 4 // Задайте бажану кількість карточок для настільних комп'ютерів
          }
        }
      });
    });
    </script>

    {{-- Кінець коду, який зробив усі карточки одного розміру --}}
    <script>
        var availableTags = [];
        $.ajax({
            method: "GET",
            url: "product-list",
            success: function (response) {
                //console.log(response);
                startAutoComplete(response)
            }
        });
        function startAutoComplete(availableTags)
        {
            $( "#search_product" ).autocomplete({
              source: availableTags
            });
        }
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scripts')
</body>
</html>
