<?php $__env->startSection('title'); ?>
Customers List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="table-responsive">

<table class="table table-hover table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Role</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($user->uid); ?></td>
			<td><?php echo e($user->uname); ?></td>
			<td><?php echo e($user->email); ?></td>
			<td><?php echo e($user->phone); ?></td>
			<td><?php echo e($user->gender); ?></td>
			<td><?php echo e($user->role); ?></td>
			<td><?php echo e($user->address); ?></td>
			<td><?php echo e($user->status); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/customers_list.blade.php ENDPATH**/ ?>