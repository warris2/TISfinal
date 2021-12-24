<?php $__env->startSection('template_title'); ?>
    Lista Empresas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Grupo Empresas')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('empresas.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear Grupo Empresa')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo de empresa</th>
                                        <th>Representante</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Socios</th>
                                        <th>Fecha de Registro</th>

                                        <th></th>
                                    </tr>
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
                                            

                                            <td>
                                                <form action="<?php echo e(route('empresas.destroy',$empresa->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('empresas.show',$empresa->id)); ?>"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('empresas.edit',$empresa->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $empresas->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/empresa/index.blade.php ENDPATH**/ ?>