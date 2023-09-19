    <footer class="footer">
      <div class="container">
        <p class="text-muted"> Copyright &copy; Company - All rights reserved </p>
      </div>
    </footer>

<script src="<?php echo asset('resources/assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/edit_profile.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap-star-rating-master/js/star-rating.js')?>" type="text/javascript"></script>
<!--     <script src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/js/analytics.js"></script>-->
<!--     <script src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/js/custom.js"></script> -->
     <!--  <script type="text/javascript">
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-49755460-1', 'auto', {'allowLinker': true});
          ga('require', 'linker');
          ga('linker:autoLink', ['bootdey.com','www.bootdey.com','demos.bootdey.com'] );
          ga('send', 'pageview');
      </script> -->
<script type="text/javascript">


/*  jQuery(document).ready(function(){
    jQuery("#send_message").submit(function(e){
      e.preventDefault();
      var receiver_id = jQuery('#receiver_id').val();
      var abc = new FormData(this);
      jQuery.ajax({
        url : "{{url('/messages')}}/"+receiver_id,
        type : "POST",
        data : abc,
        dataType : "json",
        contentType : false,
        processData : false,
        success: function(response){
         alert('hello');
        }

      });
    })
  });*/
/*  jQuery(document).ready(function(){
    jQuery("#ajaxForm").submit(function(e){
      e.preventDefault();
      var abc = new FormData(this);
      jQuery.ajax({
        url : "{{url('/filter_demo')}}",
        data : abc,
        type : "POST",
        dataType : "json",
        contentType : false,
        processData : false,
        success: function(response){
         alert(response.message);
        },
        error: function(response){

        }
      });
    })
  });*/
</script>

  </body>
</html>

