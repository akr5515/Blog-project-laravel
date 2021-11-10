<?php $__env->startSection('content'); ?>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2><?php echo e($post->title); ?></h2></div>
                <div class="card-body">
                    <div class="card-img card-img_max" style="background-image: url(<?php echo e($post->img ?? asset('img/images.jpeg')); ?>)"></div>
                    <div class="card-descr">Description: <?php echo e($post->descr); ?></div>
                    <div class="card-author">Author: <?php echo e($post->name); ?></div>
                    <div class="card-author">Category: <?php echo e($post->category->name); ?></div>
                    <div class="card-date">Post created: <?php echo e($post->created_at->diffForHumans()); ?></div>
                    <div class="tags">
                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="label label-default"><?php echo e($tag->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="card-btn">
                        <a href="<?php echo e(route('post.index')); ?>" class="btn btn-outline-primary">On Main</a>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(Auth::user()->id == $post->author_id): ?>
                        <a href="<?php echo e(route('post.edit', ['id'=>$post->post_id])); ?>" class="btn btn-outline-success">Change</a>
                        <form action="<?php echo e(route('post.destroy', ['id'=>$post->post_id])); ?>" method="post" onsubmit="if (
                            confirm('Are you sure?')) { return true} else { return false}">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="submit" value="Delete" class="btn btn-outline-danger">
                        </form>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', ['title' => "Post №$post->post_id. $post->title"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bjit/Desktop/training_works/laravel/day3/blogproject/resources/views/posts/show.blade.php ENDPATH**/ ?>