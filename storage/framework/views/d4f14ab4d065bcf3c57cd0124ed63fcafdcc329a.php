<?php $__env->startSection('title'); ?>
bussummary
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<!-- <a href="<?php echo e(route('admin.newbussummary')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a> -->
<h3>Bus Summary</h3>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Route</th>
      <th scope="col">Operator</th>
      <th scope="col">Amount</th>
      <th scope="col">Booked Ticket</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $bussummary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bussummary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($bussummary->suid); ?></td>
      <td><?php echo e($bussummary->name); ?></td>
      <td><?php echo e($bussummary->route); ?></td>
      <td><?php echo e($bussummary->operator); ?></td>
      <td><?php echo e($bussummary->fare); ?></td>
      <td><?php echo e($bussummary->bookticket); ?></td>

     
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
  </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/bussummary.blade.php ENDPATH**/ ?>