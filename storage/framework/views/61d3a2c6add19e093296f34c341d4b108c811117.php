

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Presentacion de documentos')); ?></div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div>
                            <div class="form-group col-md-6">
                                <label >Empresa</label>
                                <select class="form-control" id="empresa_id" name="empresa_id">
                                  
                                        <option selected> Seleccione su empresa...</option>
                                        <option>  </option>
                                   

                                </select>
                            </div>
                            <label for=""><strong><?php echo e(__('DOCUMENTACION SOBRE A:')); ?></strong></label>
                            <div class="form-group">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-primary">Carta de Presentacion</li>
                                    <li class="list-group-item list-group-item-primary">Boleta de Garantia</li>
                                    <li class="list-group-item list-group-item-primary">Conformacion de la grupo-empresa</li>
                                    <li class="list-group-item list-group-item-primary">Solvencia Tecnica</li>
                                    <p><strong>El documento Sobre A deben contener los todo lo mencionado anteriormente</strong></p>
                                </ul>
                            <div class="form-group">
                                <input class="form-control" type="file" name="sobre_A" class="form-control-file">
                            </div> 
                                <label for=""><strong><?php echo e(__('DOCUMENTACION SOBRE B')); ?></strong></label>
                            <div class="form-group">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-primary">Propuesta Tecnica</li>
                                </ul>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="sobre_B" class="form-control-file">
                                </div>
                            </div>
                        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Enviar')); ?>

                                    </button>
                                    <a href='/convocatorias' class="btn btn-primary " role="button" aria-pressed="true">
                                        <?php echo e(__('Volver')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/addPropuesta.blade.php ENDPATH**/ ?>