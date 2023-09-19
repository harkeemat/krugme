<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Krajee JQuery Plugins - &copy; Kartik</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo asset('resources/assets/global/plugins/bootstrap-star-rating-master/css/star-rating.css')?>" media="all" rel="stylesheet" type="text/css"/>
    <!--suppress JSUnresolvedLibraryURL -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo asset('resources/assets/global/plugins/bootstrap-star-rating-master/js/star-rating.js')?>" type="text/javascript"></script>
<body>
<div class="container">
    <div class="page-header">
        <h2>Bootstrap Star Rating Examples
            <small>&copy; Kartik Visweswaran, Krajee.com</small>
        </h2>
    </div>

    <form>

        <input id="input-21e" value="0" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs"
               title="">
        <hr>
             <label for="input-1" class="control-label">Rate This</label>
    <input id="input-1" name="input-1" value="0" class="rating" data-size="xs">
    <script>
    $(document).on('ready', function(){
        $('#input-1').rating({min: 0, max: 5, step: 0.5, stars: 5});
    });
    </script>
    
</div>
</body>
</html>