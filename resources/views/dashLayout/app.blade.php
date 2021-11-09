<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">

    <!-- Styles -->
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}

    <link href="{{ asset('srcDash/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
{{--<link href="{{ asset('srcDash/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet" >--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('srcDash/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet" >
    <link href="{{ asset('srcDash/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" >

    <link href="{{ asset('srcDash/css/main.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('srcDash/css/dark-theme.css') }}" rel="stylesheet">--}}

    <link href="{{ asset('css/option.css') }}" rel="stylesheet">

    <link href="{{ asset('srcDash/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('pickerdate/css/classic.css')}}" rel="stylesheet" />
	<link href="{{ asset('pickerdate/css/classic.time.css')}}" rel="stylesheet" />
	<link href="{{ asset('pickerdate/css/classic.date.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">


    @livewireStyles

    <!-- Scripts -->
{{--    <script src="{{ mix('js/app.js') }}" defer></script>--}}
</head>
<body>
<div id="overlay"></div>
@include('sweetalert::alert')

<div class="page-container">
    <div class="page-header">
        @include('dashLayout.navbar')
    </div>

    <div class="page-sidebar">
        @include('dashLayout.sidebar')
    </div>

    <div class="page-content">
        <div class="main-wrapper">
            @yield('content')
        </div>
    </div>
</div>

<script src="{{ asset('srcDash/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{ asset('srcDash/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars?.min.js" integrity="sha512-RNLkV3d+aLtfcpEyFG8jRbnWHxUqVZozacROI4J2F1sTaDqo1dPQYs01OMi1t1w9Y2FdbSCDSQ2ZVdAC8bzgAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}


<script src="{{ asset('srcDash/plugins/perfectscroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('srcDash/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('srcDash/js/main.js') }}"></script>
<script src="{{ asset('srcDash/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('pickerdate/js/legacy.js') }}"></script>
<script src="{{ asset('pickerdate/js/picker.js') }}"></script>
<script src="{{ asset('pickerdate/js/picker.date.js') }}"></script>
<script src="{{ asset('pickerdate/js/picker.time.js') }}"></script>

{{--<script src="{{ asset('srcDash/js/app.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js" integrity="sha512-WL6WGKMPBiM9PnHRYIn5YEtq0Z8XP4fkVb4qy7PP4vhmYQErJ/dySyXuFIMDf1eEYCXCrQrMJfkNwKc9gsjTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
<script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js" integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    window.addEventListener('swal',function(e){
        Swal.fire(e.detail);
    });
</script>
@livewireScripts
@stack('modals')
</body>
</html>
