<?php $__env->startSection('title'); ?>
new busesshedule
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<form method="post">
<?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="bsid" class="col-sm-2 col-form-label">ID</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="bsid" value="" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="name" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="operator" class="col-sm-2 col-form-label">Operator</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="operator" value="" >
    </div>
  </div>

  <div class="form-group row">
    <label for="seat_row" class="col-sm-2 col-form-label">S.Row</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="seat_row" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="seat_column" class="col-sm-2 col-form-label">S.Column</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="seat_column" value="" >
    </div>
  </div>

  <div class="form-group row">
    <label for="route" class="col-sm-2 col-form-label">Route</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="route" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="fare" class="col-sm-2 col-form-label">Fare</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="fare" value="" >
    </div>
  </div>

  <div class="form-group row">
    <label for="departure" class="col-sm-2 col-form-label">Departure</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="departure" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="arrival" class="col-sm-2 col-form-label">Arrival</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="arrival" value="" >
    </div>
  </div>

  
  <button type="submit" class="btn btn-primary"> Save</button>

</form>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/new_busesshedule.blade.php ENDPATH**/ ?>