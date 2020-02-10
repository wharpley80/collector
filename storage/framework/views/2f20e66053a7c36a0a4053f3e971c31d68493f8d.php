<?php
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Cover;
use MarcReichel\IGDBLaravel\Models\Platform;
use MarcReichel\IGDBLaravel\Models\PlatformLogo;
use MarcReichel\IGDBLaravel\Models\Artwork;

$tarts = Game::select(['*'])->get();
$count = 0;
foreach ($tarts as $tart) {
$count++;
}
//$games = Game::where('id', 5364)->get();

//var_dump($games[0]['aggregated_rating']);

//$games = Game::where('first_release_date', '>=', 1546297200)->get();
//$games = Game::select(['*'])->get();

//$games = Game::select(['name', 'first_release_date'])->get();
//$games = Game::where('platform', '>=', 'genesis')->get();
//$games = Game::select(['platform', 'genesis'])->get();
//var_dump($games);
//$games = Game::where('game', 45533)->get();

//$cover = Cover::where('id', 46537)->get();
//var_dump($cover[0]);
?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
    <div class="platform-menu" role="group" aria-label="Basic example">
        <a type="button" class="all-regions btn btn-secondary" href="http://collector.test/platform/64">Sega Master System</a>
        <a type="button" class="all-regions btn btn-secondary" href="http://collector.test/platform/29">Sega Mega Drive/Genesis</a>
        <a type="button" class="na-regions btn btn-secondary" href="http://collector.test/platform/78">Sega CD</a>
        <a type="button" class="na-regions btn btn-secondary" href="http://collector.test/platform/30">Sega 32X</a>
        <a type="button" class="jp-regions btn btn-secondary" href="http://collector.test/platform/32">Sega Saturn</a>
        <a type="button" class="pal-regions btn btn-secondary" href="http://collector.test/platform/23">Sega Dreamcast</a>
        <a type="button" class="pal-regions btn btn-secondary" href="http://collector.test/platform/35">Sega Game Gear</a>
    </div>
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header platform-header">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo e($platform[0]['logo']); ?>">
                        </div>
                        <div class="col-md-9">
                            <h1><?php echo e($platform[0]['name']); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="btn-group region-menu" role="group" aria-label="Basic example">
                    <a type="button" class="all-regions btn btn-secondary" href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>">All</a>
                    <a type="button" class="na-regions btn btn-secondary" href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/north_america">NA</a>
                    <a type="button" class="jp-regions btn btn-secondary" href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/japan">JP</a>
                    <a type="button" class="pal-regions btn btn-secondary" href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/europe">PAL</a>
                </div>
                <div class="card-body">
                    <game-list-component v-bind:games="<?php echo e(json_encode($games)); ?>"></game-list-component>
                    <div class="pagination-cont">
                        <div class="pagination"> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=" class="paginate-prev">«</a> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=1" class="paginate-1 active">1</a> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=2" class="paginate-2">2</a> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=3" class="paginate-3">3</a> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=4" class="paginate-4">4</a> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=5" class="paginate-5">5</a> 
                            <a href="http://collector.test/platform/<?php echo e($platform[0]['id']); ?>/<?php echo e($region); ?>/page=" class="paginate-next">»</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/collector/resources/views/platform.blade.php ENDPATH**/ ?>