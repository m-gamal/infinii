<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    @include('admin.partials.head')
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        @include('admin.partials.header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('admin.partials.sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            @yield('content')
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!--[if lt IE 9]>
        <script src="{{URL::asset('assets/global/plugins/respond.min.js')}}"></script>
        <script src="{{URL::asset('assets/global/plugins/excanvas.min.js')}}"></script> 
        <![endif]-->
        @include('admin.partials.footer_scripts')
    </body>

</html>