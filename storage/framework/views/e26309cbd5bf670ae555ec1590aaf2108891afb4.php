<?php $__env->startSection('title'); ?>
Edit busesshedule
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<form method="post">
<?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="cid" class="col-sm-2 col-form-label">ID</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="bsid" value="<?php echo e($busesshedule->bsid); ?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="cname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="name" value="<?php echo e($busesshedule->name); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="operator" class="col-sm-2 col-form-label">Operator</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="operator" value="<?php echo e($busesshedule->operator); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="seat_row" class="col-sm-2 col-form-label">S.Row</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="seat_row" value="<?php echo e($busesshedule->seat_row); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="seat_column" class="col-sm-2 col-form-label">S.Column</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="seat_column" value="<?php echo e($busesshedule->seat_column); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="route" class="col-sm-2 col-form-label">Route</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="route" value="<?php echo e($busesshedule->route); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="fare" class="col-sm-2 col-form-label">Fare</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="fare" value="<?php echo e($busesshedule->fare); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="departure" class="col-sm-2 col-form-label">Departure</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="departure" value="<?php echo e($busesshedule->departure); ?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="arrival" class="col-sm-2 col-form-label">Arrival</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="arrival" value="<?php echo e($busesshedule->arrival); ?>">
    </div>
  </div>

  <button type="submit" class="btn btn-primary"> Update</button>

</form>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Individual Assignment\assignment\resources\views/manager/edit_busesshedule.blade.php ENDPATH**/ ?>