
</div>
<div class="FooterRight"><a href="{{ url('/login') }}">Sign In / </a><span><a href="{{ url('/login') }}">Sign Up</a></span></div>
<hr id="footerHR">
<div class="FooterLeft">Help | About Us | Contact Us | Terms & Conditions</div>

<!-- <div class="copyright hide" style="color: white !important">
	 2014 © Metronic. Admin Dashboard Template.
</div> -->
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="resources/assets/global/plugins/respond.min.js"></script>
<script src="resources/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo asset('resources/assets/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery-migrate.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.cokie.min.js') ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo asset('resources/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript') ?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo asset('resources/assets/global/scripts/metronic.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout/scripts/layout.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout/scripts/demo.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/login.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
</script>
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>