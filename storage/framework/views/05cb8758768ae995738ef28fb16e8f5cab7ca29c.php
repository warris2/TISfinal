

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><?php echo e(__('Grupos Registrados')); ?></div>

                <div class="card-body">
                    <form method="GET">
                        <?php echo csrf_field(); ?>

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Nombre</th>
                                    <th>Tipo de empresa</th>
                                    <th>Representante</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Socios</th>
                                    <th>Fecha de Registro</th>
                                </thead>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($empresa->nombre_empresa); ?></td>
                                        <td><?php echo e($empresa->tipo_empresa); ?></td>
                                        <td><?php echo e($empresa->resp_empresa); ?></td>
                                        <td><?php echo e($empresa->email_empresa); ?></td>
                                        <td><?php echo e($empresa->telf_empresa); ?></td>
                                        <td><?php echo e($empresa->socios); ?></td>
                                        <td><?php echo e($empresa->created_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/listaEmp.blade.php ENDPATH**/ ?>