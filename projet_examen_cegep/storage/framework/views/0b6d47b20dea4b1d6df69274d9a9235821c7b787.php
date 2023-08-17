<?php $attributes = $attributes->exceptProps(['titrePage']); ?>
<?php foreach (array_filter((['titrePage']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<header>
    <h1><?php echo e($titrePage); ?></h1>
    <nav>
        <a href="<?php echo e(route('accueil')); ?>">Accueil</a>
        <a href="<?php echo e(route('faits.index')); ?>">Liste</a>
        <a href="<?php echo e(route('faits.create')); ?>">Ajouter</a>
    </nav>
</header>
<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\TP2\cadw_tp2_LEMIEUX_yanik_PASTOR_geoffrey\resources\views/components/header.blade.php ENDPATH**/ ?>