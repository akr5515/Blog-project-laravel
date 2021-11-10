<?php $__env->startSection('title','| All Categories'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($tag->id); ?></th>
                        <td>
                            <form action="<?php echo e(route('tags.index')); ?>">
                                <input class="" name="search" type="hidden" value="<?php echo e($tag->name); ?>" aria-label="Search">
                                <label name="cat" value="<?php echo e($tag->name); ?>">
                                    <?php echo e($tag->name); ?>

                                </label>
        
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div> 
        
        <div class="col-md-3">
            <div class="well">
                <form action=" <?php echo e(route('tags.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <h3>Tag Category</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" value="<?php echo e(old('title') ?? $post->title ?? ''); ?>">
                    </div>

                    <input type="submit" value="Create new Tag" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', ['title' => "Create the post"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bjit/Desktop/training_works/laravel/day3/blogproject/resources/views/tags/index.blade.php ENDPATH**/ ?>