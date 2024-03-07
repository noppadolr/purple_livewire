<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        {{-- <title>Log In | Ubold - Responsive Bootstrap 5 Admin Dashboard</title> --}}
        <title>{{ $title ?? 'Page Title' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

		<!-- Theme Config Js -->
		<script src="{{ asset('admin/assets/js/head.js') }}"></script>

		<!-- Bootstrap css -->
		<link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                {{ $slot }}

                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

{{--
        <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a>
        </footer> --}}
        <script src="{{ asset('jquery-3.7.1.min.js') }}"></script>
        <!-- Authentication js -->
<script src="{{ asset('admin/assets/js/pages/authentication.init.js') }}"></script>


    </body>
</html>
