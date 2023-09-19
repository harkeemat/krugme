<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2017 &copy; KRUG [ME] Admin Panel
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>

<script src="<?php echo asset('resources/assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery-migrate.min.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js')?> before bootstrap.min.js')?> to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo asset('resources/assets/global/plugins/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.cokie.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo asset('resources/assets/global/scripts/metronic.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout2/scripts/layout.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout2/scripts/demo.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/index.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/tasks.js')?> " type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/table-advanced.js')?>"></script>

<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/select2/select2.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('resources/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')?>"></script>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
   TableAdvanced.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>