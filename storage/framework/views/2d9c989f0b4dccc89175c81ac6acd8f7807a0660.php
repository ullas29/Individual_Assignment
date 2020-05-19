<?php $__env->startSection('title'); ?>
Edit Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<form method="post">
<?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="uname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-4">
    <input type="text" class="form-control form-control-sm" name="uname" value="<?php echo e($user->uname); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-4">
    <input type="email" class="form-control form-control-sm" name="email" value="<?php echo e($user->email); ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  </div>

  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-4">
    <input type="password" class="form-control form-control-sm" name="password" value="<?php echo e($user->password); ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-4">
    <input type="password" class="form-control form-control-sm" name="password_confirmation" placeholder="Match with your password" value="">
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
      <?php if($user->gender=="Male"): ?>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
          <label class="form-check-label" for="Male">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
          <label class="form-check-label" for="Female">
            Female
          </label>
        </div>
        <?php else: ?>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
          <label class="form-check-label" for="Male">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" value="Female" checked>
          <label class="form-check-label" for="Female">
            Female
          </label>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </fieldset>

  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-4">
    <input type="phone" class="form-control form-control-sm" name="phone" value="<?php echo e($user->phone); ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-4">
    <textarea  class="form-control form-control-sm" name="address"><?php echo e($user->address); ?></textarea >
    </div>
  </div>
  <button type="submit" class="btn btn-primary"> Update</button>

</form>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo e($err); ?> <br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/edit_profile.blade.php ENDPATH**/ ?>