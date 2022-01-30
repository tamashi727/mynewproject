<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

       <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset ('admin/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{asset ('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css')}}" rel="stylesheet"  type="text/css" />

        
        <!--style for label of addbannerimage -->
        <style type="text/css">
        label {display:inline-block;width:200px;}
        </style>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"> 

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


    </head>
    <body class="font-sans antialiased ">
      <div id="wrapper">
        <div class="content-page">
          <div class="content">
        @include('layouts.inc.sidebar')
        
            @include('layouts.inc.adminnav')
            <div class="container " style="margin-left:250px;margin-right:200px">
                @yield('content')
            </div>
            @include('layouts.inc.adminfooter')
    
        
      </div>
      </div>
      </div>
        
        @stack('modals')

        @livewireScripts

        <script src="{{asset ('admin/assets/js/app.min.js') }}"></script>
          
          @yield('scripts')
    </body>
</html>