

<form action="/posts/<?php echo e($post->id); ?>/comments" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group mb-3">
        <label for="name">الاسم</label>
        <input name="name" class="form-control" id="name">
    </div>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <div class="form-group mb-3">
        <label for="body">التعليق</label>
        <textarea name="body" id="body" rows="3" class="form-control"></textarea>
    </div>
    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <button type="submit" class="btn btn-primary">ارسال</button>
</form>
<?php /**PATH C:\laragon\www\blog\resources\views/components/createComment.blade.php ENDPATH**/ ?>