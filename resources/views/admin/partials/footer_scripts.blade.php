<!-- BEGIN CORE PLUGINS -->
<script src="{{URL::asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('custom_footer_plugins')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{URL::asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('custom_footer_scripts')
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{URL::asset('assets/layouts/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/layouts/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->