<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('page_title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css ') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css ') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css ') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css ') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css ') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css ') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                {{-- <img src="{{ asset('images/settings/' . $setting->logo) }}" alt=""> --}}
                <span class="m-3 d-none d-lg-block">الصناعيه الشامله</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav me-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-2" href="{{ route('admin.logout') }}">
                        <span>تسجيل الخروج</span>
                    </a>
            </ul>
            </li><!-- End Profile Nav -->
            </ul>
        </nav>
    </header><!-- End Header -->
