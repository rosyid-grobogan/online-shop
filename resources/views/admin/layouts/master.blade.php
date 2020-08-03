<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title> @yield('title') </title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('admin/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  <!-- No Extra plugin used -->
  <link href="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" />
  <!-- SLEEK CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/sleek.css') }}" />
  <!-- FAVICON -->
  <link href="{{ asset('admin/assets/img/favicon.png') }}" rel="shortcut icon" />
  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{ asset('admin/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

<div class="wrapper">
        <!-- Left Sidebar -->
        @include('admin.partials.left-sidebar')

    <div class="page-wrapper">
        <!-- Main Header -->
        @include('admin.partials.main-header')

        <div class="content-wrapper">
            <div class="content">

                @yield('content')

            </div>
            {{-- Right Sidebar --}}
            @include('admin.partials.right-sidebar')
        </div>

      @include('admin.partials.footer')

    </div>{{-- End Page Wrapper --}}
</div>{{-- End Wrapper --}}

@include('admin.includes.script')
</body>
</html>
