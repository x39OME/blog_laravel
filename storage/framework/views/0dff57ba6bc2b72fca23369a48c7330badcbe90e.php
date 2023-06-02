        <div <?php echo e($attributes); ?>>
        <main class="container">
            <div class="row g-5">
              <div class="col-md-8">

                  <div class="blog-post mb-3">
                      <h2 class="blog-post-title">
                          <?php echo e($post->title); ?>

                      </h2>
                      <p class="blog-post-meta">
                          بقلم <?php echo e($post->author); ?>

                          <?php echo e(Carbon\Carbon::parse($post->created_at)->diffForHumans()); ?>

                      </p>
                      <p>
                          <?php echo e($post->body); ?>

                      </p>

                      <h1>التعليقات</h1>

                      <?php if(count($comments) == 0): ?>
                          <h3>لا يوجد تعليقات </h3>
                      <?php else: ?>
                      <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <h4>
                              <?php echo e($comment->name); ?>

                          </h4>
                          <p>
                              <?php echo e($comment->body); ?>

                          </p>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                  </div>



<?php /**PATH C:\laragon\www\blog\storage\framework\views/6b4c9d97d12e3c63eacd3c4c15f284da232843d1.blade.php ENDPATH**/ ?>