
<div class="form-group">
    <input name="title" type="text" class="form-control" required value="<?php echo e(old('title') ?? $post->title ?? ''); ?>">
</div>
<div class="form-group">
    <textarea name="descr" rows="10" class="form-control" required><?php echo e(old('descr') ?? $post->descr ?? ''); ?></textarea>
</div>
<textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
<div class="form-group">
    <select name="category_id" rows="10" class="form-control" required value="<?php echo e(old('category_id') ?? $post->category_id ?? ''); ?>>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <select name="tags[]" rows="10" class="form-control select2-multi" required multiple="multiple">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>


<div class="form-group">
    <input type="file" name="img">
</div>

<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>


    

<?php /**PATH /home/bjit/Desktop/training_works/laravel/day3/blogproject/resources/views/posts/parts/form.blade.php ENDPATH**/ ?>