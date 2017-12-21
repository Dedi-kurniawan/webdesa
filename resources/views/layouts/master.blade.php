<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script>tinymce.init({ selector:'textarea' });</script> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    {{-- <title>{{ config('app.name', 'Desa Sukajadi') }}</title> --}}
    <title>Desa Sukajadi km.16</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
	
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/daiwabo.css') }}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
  @include('layouts.partials._flash')
  {{-- menu --}}
  @include('layouts.partials.sidemenu')
  {{-- header --}}
  @include('layouts.partials.header')
  {{-- content --}}
  @yield('content')
  {{-- footer --}}
  @include('layouts.partials.footer')

      </div>
    </div>
   
  <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Datatables -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    {{-- tinymce --}}
    <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

<!-- Konfigurasi Standar -->
    <script type="text/javascript">
    tinymce.init({         
        selector: "textarea#content"
    });
</script>
<script type="text/javascript">
    tinymce.init({         
        selector: "textarea#title"
    });
</script>
	@yield('scripts')
  </body>
</html>
