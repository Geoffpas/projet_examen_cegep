<?php $attributes = $attributes->exceptProps(['action']); ?>
<?php foreach (array_filter((['action']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<form action="<?php echo e($action); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div>
        
        <label for="texte"> Fait# </label>
        <div>
            <textarea id="texte" name="texte" rows="4" cols="100" placeholder="Ajoutez un fait!" autofocus></textarea>
        </div>
    </div>

    
    <div>
        <input class="submit" type="submit" value="Ajouter!" />
    </div>
</form>
<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\TP2\cadw_tp2_LEMIEUX_yanik_PASTOR_geoffrey\resources\views/components/form/formCreate.blade.php ENDPATH**/ ?>