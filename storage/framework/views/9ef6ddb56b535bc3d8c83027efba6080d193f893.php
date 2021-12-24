<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header"><?php echo e(__('Convocatorias Publicadas')); ?></div>

                <div class="card-body">
                    <form method="GET">
                        <?php echo csrf_field(); ?>

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Fecha de publicacion</th>
                                    <th>Fecha final de presentacion</th>
                                    <th>Opciones</th>
                                    
                                </thead>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><div><button type="submit" class="btn btn-primary btn-sm"><?php echo e(__('Descargar')); ?></button></div>
                                            <div>
                                                <a href='/addPropuesta' class="btn btn-secondary btn-lg active btn-sm" role="button" aria-pressed="true">
                                                    <?php echo e(__('Postularse')); ?>

                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/listaConv.blade.php ENDPATH**/ ?>