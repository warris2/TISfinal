

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Presentacion de documentos')); ?></div>

                <div class="card-body">
                    <form method="POST" action="">
                        <?php echo csrf_field(); ?>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/postulacion.blade.php ENDPATH**/ ?>