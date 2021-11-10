<?php $__env->startSection('content'); ?>
    <form action=" <?php echo e(route('post.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h3>Create a post</h3>
        <?php echo $__env->make('posts.parts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <input type="submit" value="Create post" class="btn btn-outline-primary">
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', ['title' => "Create the post"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bjit/Desktop/training_works/laravel/day3/blogproject/resources/views/posts/create.blade.php ENDPATH**/ ?>