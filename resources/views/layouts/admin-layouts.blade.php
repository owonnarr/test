<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ОСББ - Гидропарковая 15</title>
    <link rel="stylesheet" href="{{asset('css/admin/main.css')}}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/admin/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/font-awesome-4.7.0/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/all-skins.min.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">
        @include('admin/header')
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            @include('admin/sidebar')
        </section>

    </aside>
    <div class="content-wrapper">
        <section class="content">
                @include('admin.partials.info-boxes')

            <div class="row">
                @yield('breadcrumbs')
                @yield('content')
            </div>
        </section>
    </div>

</div>

<script>
    var routes = {
        categoriesAdd : "{{ route('admin.category.add') }}",
        {{--getChildCats : "{{ route('child') }}",--}}
        {{--categoryUpdate : "{{ route('update') }}",--}}
    }
</script>

<script src="{{asset('js/admin/jquery.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/admin/myscript.js')}}"></script>
{{--<script src="{{asset('js/admin/main.js')}}"></script>--}}

</body>
</html>