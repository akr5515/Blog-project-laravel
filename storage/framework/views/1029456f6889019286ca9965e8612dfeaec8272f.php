<?php $__env->startSection('content'); ?>
    <?php if(isset($_GET['search'])): ?>
        <?php if(count($posts)>0): ?>
            <h2>Results of  "<?=$_GET['search']?>"</h2>
            <?php if(count($posts)>1): ?>
                <p class="lead">Find <?php echo e(count($posts)); ?> posts</p>
            <?php else: ?>
                <p class="lead">Find <?php echo e(count($posts)); ?> post</p>
            <?php endif; ?>
        <?php else: ?>
            <h2>The "<?=htmlspecialchars($_GET['search'])?>" request have nothing</h2>
            <a href="<?php echo e(route('post.index')); ?>" class="btn btn-outline-primary">Show all the posts</a>
        <?php endif; ?>
    <?php endif; ?>
    

    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-6">
            <div class="card">
                <div class="card-header"><?php echo e($post->short_title); ?></div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url(<?php echo e($post->img ?? asset('img/images.jpeg')); ?>)"></div>
                    <div class="card-author">Author: <?php echo e($post->name); ?></div>
                    <div class="card-author">Category: <?php echo e($post->category->name); ?></div>
                    <hr>
                    <div class="tags">
                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="label label-default"><?php echo e($tag->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a href="<?php echo e(route('post.show', ['id' => $post->post_id])); ?>" class="btn btn-outline-primary">Show the post</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if(!isset($_GET['search'])): ?>
    <?php echo e($posts->links()); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', ['title' => "Main"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bjit/Desktop/training_works/laravel/day3/blogproject/resources/views/posts/index.blade.php ENDPATH**/ ?>