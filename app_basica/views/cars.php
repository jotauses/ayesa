<?php include 'views/base.php'; ?>

<?php startblock('title') ?> Coches <?php endblock() ?>
<?php startblock('main_title') ?> Coches <?php endblock() ?>

<?php startblock('content') ?>
	<div class="row">
		<div class="col-md-4">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Seat 600</h4>
                    <p class="card-category">12.000&euro;</p>
                </div>
                
                <div class="card-body ">
                    <img width="300" alt="Seat 600" src="<?php echo STATIC_URL; ?>/img/coche.png">
                </div>
                
                <div class="card-footer ">
                    <div class="legend">
                        <i class="fa fa-circle text-info"></i> 2 Plazas
                        <i class="fa fa-circle text-danger"></i> 344CV
                        <i class="fa fa-circle text-warning"></i> Sin frenos
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i> 2 Mayo de 2018
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endblock() ?>