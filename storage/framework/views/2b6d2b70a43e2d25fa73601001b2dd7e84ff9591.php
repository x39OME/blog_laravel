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



            <nav class="blog-pagination" aria-label="Pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

          </div>

          <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
              <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
              </div>

              <div class="p-4">
                <h4 class="fst-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                  <li><a href="#">March 2021</a></li>
                  <li><a href="#">February 2021</a></li>
                  <li><a href="#">January 2021</a></li>
                  <li><a href="#">December 2020</a></li>
                  <li><a href="#">November 2020</a></li>
                  <li><a href="#">October 2020</a></li>
                  <li><a href="#">September 2020</a></li>
                  <li><a href="#">August 2020</a></li>
                  <li><a href="#">July 2020</a></li>
                  <li><a href="#">June 2020</a></li>
                  <li><a href="#">May 2020</a></li>
                  <li><a href="#">April 2020</a></li>
                </ol>
              </div>

              <div class="p-4">
                <h4 class="fst-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                  <li><a href="#">GitHub</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
    </main>
</div>
<?php /**PATH C:\laragon\www\blog\resources\views/components/post.blade.php ENDPATH**/ ?>