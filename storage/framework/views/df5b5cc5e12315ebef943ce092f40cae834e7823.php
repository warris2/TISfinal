

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header"><?php echo e(__('Empresas postulantes')); ?></div>

                <div class="card-body">
                    <form method="GET" name="listaconv">
                        <?php echo csrf_field(); ?>

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Empresa</th>
                                    <th>Fecha de presentacion</th>
                                    <th>Sobre A</th>
                                    <th>Sobre B</th>
                                    <th>Opciones</th>
                                    
                                </thead>
                            </thead>
                            <tbody>
                               <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td>nombre_empresa</td>
                                    <td><?php echo e($item->created_at); ?></td>
                                    <td><a href="<?php echo e(asset('public/SobreA/' ,$item->id)); ?>"><?php echo e($item->sobre_a); ?></a></td>
                                    <td><a href="<?php echo e(asset('public/SobreB/' ,$item->id)); ?>"><?php echo e($item->sobre_b); ?></a></td>
                                    <td>
                                        <div>
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#obs">Observar</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="obs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><strong>Observaciones</strong> </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input id="empresa" type="text" class="form-control <?php $__errorArgs = ['empresa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                                        name="empresa" value="<?php echo e(old('empresa')); ?>" required autocomplete="empresa" autofocus>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea id="observacion" type="text" class="form-control" name="observacion" value="<?php echo e(old('observacion')); ?>" required autocomplete="observacion" autofocus></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
                                                    </div>
                                                    <?php if(session('info')): ?>
                                                        <script>
                                                            alert("<?php echo e(session('info')); ?>");
                                                        </script>
                                                        
                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <div>
                                             <!-- Button trigger modal -->
                                             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#contratos">Aprobar</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="contratos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><strong>Enviar contrato</strong> </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label >Empresa</label>
                                                        <select class="form-control" id="empresa" name="empresa">
                                                            <option selected>Seleccione la empresa...</option>
                                                            
                                                        </select>
                                                    </div>    
                                                    <div class="modal-body">
                                                        
                                                        <div class="form-group">
                                                            <label for=""><?php echo e(__('Adjuntar contrato')); ?></label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="file" name="contrato" class="form-control-file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" value="Submit" class="btn btn-primary" >Enviar</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/listaPropuesta.blade.php ENDPATH**/ ?>