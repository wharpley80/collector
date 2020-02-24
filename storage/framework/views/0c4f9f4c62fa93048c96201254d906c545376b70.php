<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .home-img-wrapper {
                width: 60%;
                margin: 0 auto;
            }

            .logo-home {
                width: 100%;
                height: 100%;
            }

            .company-links img {
                margin: 0 20px;
            }

            .sega-logo {
                height: 50px;
                width: 150px;
            }

            .nintendo-logo {
                height: 50px;
                width: 175px;
            }

            .playstation-logo {
                height: 75px;
                width: 150px;
            }

            .xbox-logo {
                height: 50px;
                width: 150px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="company-links">
                    <a href="<?php echo e(URL::to('')); ?>/sega/sega_genesis_mega_drive/north_america"><img src="<?php echo e(asset('img/sega-logo.jpg')); ?>" class="sega-logo"></a>
                    <a href="<?php echo e(url('/genesis')); ?>"><img src="<?php echo e(asset('img/nintendo-logo.jpg')); ?>" class="nintendo-logo"></a>
                    <a href="<?php echo e(url('')); ?>/playstation/48/north_america"><img src="<?php echo e(asset('img/playstation-logo.jpg')); ?>" class="playstation-logo"></a>
                    <a href="<?php echo e(url('/genesis')); ?>"><img src="<?php echo e(asset('img/xbox-logo.png')); ?>" class="xbox-logo"></a>
                </div>
                <div class="home-img-wrapper">
                    <img src="<?php echo e(asset('img/collectors-dojo-logo-phos.jpg')); ?>" class="logo-home">
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH /home/vagrant/Code/collector/resources/views/welcome.blade.php ENDPATH**/ ?>