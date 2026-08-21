<?php if(session('status')): ?>
<div class="alert alert-success"><?php echo e(session('status')); ?></div>
<?php endif; ?>

<?php if(session('error')): ?>
<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
<?php endif; ?>

<?php /*
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
*/ ?>

<?php if(count($errors)): ?>
<div class="alert alert-danger">
    <strong>Validation errors: please fix the following issues</strong>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH D:\gst-billing\resources\views/include/alert.blade.php ENDPATH**/ ?>