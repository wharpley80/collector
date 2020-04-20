<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Collector's Dojo - This is an app where you can research you favorite video games, and then build out your own detailed collection.</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('assets/js/app.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/462bd259d98d98460d6767edbdcdac70?family=Foobar+Pro" rel="stylesheet" type="text/css"/>

    <!-- Styles -->
    <link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('assets/img/collectors-dojo-logo-phos.jpg')); ?>" class="logo-header">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="navbar-links">
                        <a href="<?php echo e(route('games', ['sega', 'sega_saturn', 'north_america'])); ?>"><img src="<?php echo e(asset('assets/img/sega-logo.jpg')); ?>" class="sega-logo"></a>
                        <a href="<?php echo e(route('games', ['nintendo', 'nintendo_entertainment_system', 'north_america'])); ?>"><img src="<?php echo e(asset('assets/img/nintendo-logo.jpg')); ?>" class="nintendo-logo"></a>
                        <a href="<?php echo e(route('games', ['sony', 'playstation', 'north_america'])); ?>"><img src="<?php echo e(asset('assets/img/sony-logo.jpg')); ?>" class="playstation-logo"></a>
                        <a href="<?php echo e(route('games', ['microsoft', 'original_xbox', 'north_america'])); ?>"><img src="<?php echo e(asset('assets/img/xbox-logo.png')); ?>" class="xbox-logo"></a>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('my-collection')); ?>">My Collection</a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    


                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>

<?php /**PATH /home/vagrant/Code/collector/resources/views/layouts/app.blade.php ENDPATH**/ ?>