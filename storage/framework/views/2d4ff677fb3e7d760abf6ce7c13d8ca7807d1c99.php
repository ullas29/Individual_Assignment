<?php $__env->startSection('title'); ?>
Profile

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card-profile">

  <h3><?php echo e($user->uname); ?></h3>
  <p class="title-profile"><i class="fa fa-id-badge" aria-hidden="true"></i> <?php echo e($user->role); ?></p>
  <?php if($user->gender=="Male"): ?>
  <p><i class="fa fa-male" aria-hidden="true"></i> <?php echo e($user->gender); ?></p>
  <?php else: ?>
  <p><i class="fa fa-female" aria-hidden="true"></i> <?php echo e($user->gender); ?></p>
  <?php endif; ?>
  <p><small><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo e($user->email); ?></small></p>
  <p><small><i class="fa fa-phone" aria-hidden="true"></i> <?php echo e($user->phone); ?></small></p>
  <!-- <p><small><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($user->address); ?></small></p> -->
  <!-- <p><small><i class="fa fa-circle" aria-hidden="true"></i> <?php echo e($user->status); ?></small></p> -->


  <div style="margin: 24px 0;">
    <a href="#" class="a-profile"><i class="fa fa-dribbble"></i></a> 
    <a href="#" class="a-profile"><i class="fa fa-twitter"></i></a>  
    <a href="#" class="a-profile"><i class="fa fa-linkedin"></i></a>  
    <a href="#" class="a-profile"><i class="fa fa-facebook"></i></a> 
  </div>
  
  <a href="<?php echo e(route('admin.editprofile',$user->uid)); ?>" class="button-profile text-white">Edit</a>
</div>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Individual Assignment\assignment\resources\views/admin/profile.blade.php ENDPATH**/ ?>