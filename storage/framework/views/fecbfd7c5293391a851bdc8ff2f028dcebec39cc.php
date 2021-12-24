

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Registrar Grupo Empresa')); ?></div>

                <div class="card-body">
                    <form method="POST" action="'lista'">
                        <?php echo csrf_field(); ?>

                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha de registro</th>
                                    <th>Nombre</th>
                                    <th>Nombre corto</th>
                                    <th>Tipo de empresa</th>
                                    <th>Representante</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Smith</td>
                                    <td>Thomas</td>
                                    <td>smith@example.com</td>
                                </tr>
                                <tr>
                                    <td>Merry</td>
                                    <td>Jim</td>
                                    <td>merry@example.com</td>
                                </tr>
                            </tbody>
                        </table>
<?php $__env->stopSection(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views//listaEmp.blade.php ENDPATH**/ ?>