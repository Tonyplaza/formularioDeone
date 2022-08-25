<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Imperial –  ">
    <meta name="author" content="Imperial S.A">
    <meta name="keywords" content="">


    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.png" />

    <!-- TITLE -->
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body class="app sidebar-mini">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">


            <!--app-content open-->
            <div class="app-content">
                <div class="side-app">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @yield('content')

                </div>
            </div>
            <!-- CONTAINER END -->
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    @stack('scripts')

</body>

</html>
