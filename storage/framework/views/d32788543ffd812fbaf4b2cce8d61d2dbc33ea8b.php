<?php $__env->startSection('title'); ?>
Edit Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<form method="post">
<?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="cid" class="col-sm-2 col-form-label">ID</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="cid" value="<?php echo e($category->cid); ?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="cname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="cname" value="<?php echo e($category->cname); ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary"> Update</button>

</form>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>