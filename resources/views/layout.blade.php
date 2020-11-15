<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content=" html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>caRent</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}" type="text/css">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5b62TF1_oBRuvH05hSSFx52GmBCsLhsI&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    

    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
          height: 600px;
          /* The height is 400 pixels */
          width: 100%;
          /* The width is the width of the web page */
        }
      </style>
  
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->

    @include ('partials.header')
    
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @yield('content')
    
    <!-- Chooseus Section End -->

    

    

    <!-- Footer Section Begin -->
    @include ('partials.footer')

    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ URL::asset('js/mixitup.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('js/main.js')}}"></script>
    
  
</body>

</html>