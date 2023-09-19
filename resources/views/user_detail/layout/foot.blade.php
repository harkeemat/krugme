<script src="<?php echo asset('resources/assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery-migrate.min.js')?>" type="text/javascript"></script>
<!-- important! load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo asset('resources/assets/global/plugins/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.cokie.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')?>" type="text/javascript"></script>
<!-- end core plugins -->
<script src="<?php echo asset('resources/assets/global/scripts/metronic.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout2/scripts/layout.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout2/scripts/demo.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/edit_profile.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/components-pickers.js')?>"></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- <script src="<?php //echo asset('resources/assets/admin/pages/scripts/form-validation.js')?>" type="text/javascript"></script>  -->
<!--<script src="<?php //echo asset('resources/assets/admin/pages/scripts/customValidation.js')?>" type="text/javascript"></script>-->
<script src="<?php echo asset('resources/assets/global/plugins/jquery-validation/js/jquery.validate.js')?>" type="text/javascript"></script>
<!-- <script src="<?php //echo asset('resources/assets/global/plugins/jquery-validation/js/additional-methods.min.js')?>" type="text/javascript"></script> -->

<script>
jQuery(document).ready(function() {   
// initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init();// init demo features
ComponentsPickers.init();	
//FormValidation.init(); 
});
</script>

<!-- end javascripts -->
<!---Start Custom CSS-->
<style type="text/css">

</style>

<!---End Custom CSS-->

</body>
<!-- end body -->
</html>