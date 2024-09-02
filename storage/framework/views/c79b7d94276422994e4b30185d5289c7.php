<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/lightbox2/css/lightbox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/nouislider/nouislider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/bootstrap-select/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/owl.carousel2/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/vendor/owl.carousel2/assets/owl.theme.default.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/style.default.css')); ?>" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/custom.css')); ?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body>
    <div id="app" class="page-holder <?php echo e(request()->routeIs('frontend.detail') ? ' bg-light' : null); ?>">
        <!-- navbar-->
        <?php echo $__env->make('partial.frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('partial.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


      <!-- JavaScript files-->
      <script src="<?php echo e(asset('js/app.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontend/vendor/lightbox2/js/lightbox.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontend/vendor/nouislider/nouislider.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontend/vendor/bootstrap-select/js/bootstrap-select.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontend/vendor/owl.carousel2/owl.carousel.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontend/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/frontend/js/front.js')); ?>"></script>
      <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH E:\laragon\www\RedHat\resources\views/layouts/app.blade.php ENDPATH**/ ?>