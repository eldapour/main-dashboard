<!doctype html>
<html lang="ar" dir="rtl">

<head>
    @include('Admin/layouts/head')
</head>

<body class="app sidebar-mini">

<!-- Start Switcher -->
{{--@include('Admin/layouts/switcher')--}}
<!-- End Switcher -->

<!-- GLOBAL-LOADER -->
@include('Admin/layouts/loader')
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">
        <!--APP-SIDEBAR-->
    @include('Admin/layouts/main-sidebar')
    <!--/APP-SIDEBAR-->

        <!-- Header -->
    @include('Admin/layouts/main-header')
    <!-- Header -->
        <!--Content-area open-->
        <div class="app-content">
            <div class="side-app">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">مرحبا بـك ! <i class="fas fa-heart text-danger"></i></h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">لوحة التحكم</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('page_name')</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                @yield('content')
            </div>
            <!-- End Page -->
        </div>
        <!-- CONTAINER END -->
    </div>
    <!-- SIDE-BAR -->

    <!-- FOOTER -->
@include('Admin/layouts/footer')
<!-- FOOTER END -->
</div>
<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up mt-4"></i></a>

@include('Admin/layouts/scripts')
@yield('ajaxCalls')
@toastr_js
@toastr_render
</body>
</html>
