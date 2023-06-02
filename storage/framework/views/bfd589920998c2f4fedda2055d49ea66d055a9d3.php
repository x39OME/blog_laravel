<div class="container">
    <form action="<?php echo e(url('/posts')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title">عنوان المقال</label>
            <input name="title" type="text" id="title" class="form-control" value="<?php echo e($post->title ?? ""); ?>">
        </div>
        <div class="form-group">
            <label for="body">نص المقال</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control" value="<?php echo e($post->body ?? ""); ?>"></textarea>
        </div>
        <div class="form-group">
            <label for="author">كاتب المقال</label>
            <input name="author" type="text" id="author" class="form-control" value="<?php echo e($post->author ?? ""); ?>">
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>
</div>
<?php /**PATH C:\laragon\www\blog\resources\views/posts/form.blade.php ENDPATH**/ ?>