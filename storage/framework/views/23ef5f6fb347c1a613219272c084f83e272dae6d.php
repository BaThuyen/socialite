<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="<?php echo csrf_token(); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

        <meta name="keywords" content="<?php echo e(Setting::get('meta_keywords')); ?>">
        <meta name="description" content="<?php echo e(Setting::get('meta_description')); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo url('setting/'.Setting::get('favicon')); ?>">

        <meta content="<?php echo e(url('/')); ?>" property="og:url" />
        <meta content="<?php echo url('setting/'.Setting::get('logo')); ?>" property="og:image" />
        <meta content="<?php echo e(Setting::get('meta_description')); ?>" property="og:description" />
        <meta content="<?php echo e(Setting::get('site_name')); ?>" property="og:title" />
        <meta content="website" property="og:type" />
        <meta content="<?php echo e(Setting::get('site_name')); ?>" property="og:site_name" />


        <title><?php echo e(Theme::get('title')); ?></title>

        <link href="<?php echo e(Theme::asset()->url('css/flag-icon.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(Theme::asset()->url('css/custom.css')); ?>" rel="stylesheet">
        
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('Bootstrap/css/bootstrap-reboot.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('Bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('Bootstrap/css/bootstrap-grid.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/theme-styles.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/fonts.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/blocks.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/jquery.mCustomScrollbar.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/mediaelement-playlist-plugin.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/mediaelementplayer.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/magnific-popup.css')); ?>" rel="stylesheet">

        <script type="text/javascript">
            function SP_source() {
                return "<?php echo e(url('/')); ?>/";
            }
            var base_url = "<?php echo e(url('/')); ?>/";
            var theme_url = "<?php echo Theme::asset()->url(''); ?>";
            var current_username = "<?php echo e(Auth::user()->username); ?>";
        </script>
        <?php echo Theme::asset()->scripts(); ?>

        <?php if(Setting::get('google_analytics') != NULL): ?>
        <?php echo Setting::get('google_analytics'); ?>

        <?php endif; ?>
        <script src="<?php echo Theme::asset()->url('js/lightgallery.js'); ?>"></script>
    </head>
    <body <?php if(Setting::get('enable_rtl') == 'on'): ?> class="direction-rtl" <?php endif; ?>>
           <?php echo Theme::partial('header'); ?>


           <div class="main-content">
            <?php echo Theme::content(); ?>

        </div>

        <?php echo Theme::partial('right-sidebar'); ?>


        <?php echo Theme::partial('footer'); ?>


        <script>
                    <?php if(Config::get('app.debug')): ?>
                    // Pusher.logToConsole = true;
                    <?php endif; ?>
                    var pusherConfig = {
                        token: "<?php echo e(csrf_token()); ?>",
                        PUSHER_KEY: "<?php echo e(config('broadcasting.connections.pusher.key')); ?>"
                    };
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.0/socket.io.min.js"></script>

        <?php echo Theme::asset()->container('footer')->scripts(); ?>

        <script src="<?php echo e(asset('js/jquery-3.2.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/material.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/theme-plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
        <script src="<?php echo e(asset('js/ajax-pagination.js')); ?>"></script>
        <script src="<?php echo e(asset('js/selectize.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/mediaelement-and-player.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/mediaelement-playlist-plugin.min.js')); ?>"></script>

    </body>
</html>
