<link rel="stylesheet" type="text/css" href="css/app.css">
<div class="cards">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class='card-item'>
            <div class='card-description'> 
                <p>Имя товара:</p>
                <p><?php echo e($product["name"]); ?></p>
            </div>
            <div class='card-description'>
                <p>Цена товара:</p>
                <p><?php echo e($product["cost"]); ?></p>
            </div>
            <div class='card-description'>
                <p>Количество товара:</p>
                <p><?php echo e($product["amount"]); ?></p>
            </div>
        </div>;
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\Users\аав\Desktop\lavarel\laravel-project\resources\views/ProductPage.blade.php ENDPATH**/ ?>