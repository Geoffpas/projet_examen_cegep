<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['titre' => 'Liste des Faits','css' => ''.e(asset('css/liste.css')).'']]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titre' => 'Liste des Faits','css' => ''.e(asset('css/liste.css')).'']); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => ['titrePage' => 'Tous les faits']]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titrePage' => 'Tous les faits']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    <?php if(session('succes')): ?>
        <p class="btn btn-success">
            <?php echo e(session('succes')); ?>

        </p>
    <?php endif; ?>

    <main>
        <div class="conteneur">
            <?php $__currentLoopData = $faits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="contenue-principal">
                    <div class="info">
                        <strong>FAIT #<?php echo e($fait['id']); ?></strong> "<?php echo e($fait['texte']); ?>"
                    </div>
                    <div class="icons">
                        
                        <a href="<?php echo e(route('faits.edit', ["id" => $fait['id']])); ?>">
                            <span class="material-icons">
                                edit
                            </span>
                        </a>

                        
                        <form action="<?php echo e(route('faits.destroy')); ?>" method="POST" class="delete-form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($fait['id']); ?>">
                            <button type="submit" class="delete-button">
                                <span class="material-icons">
                                    delete
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\TP2\cadw_tp2_LEMIEUX_yanik_PASTOR_geoffrey\resources\views/faits/index.blade.php ENDPATH**/ ?>