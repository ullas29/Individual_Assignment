<?php $__env->startSection('title'); ?>
Workers List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('admin.newworker')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
<?php if($page=="All"): ?>
<a href="<?php echo e(route('admin.workerslist')); ?>" class="btn btn-outline-info mb-2 active"><i class="fa fa-globe" aria-hidden="true"></i> All</a>
<a href="<?php echo e(route('admin.adminlist')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Admin List</a>
<a href="<?php echo e(route('admin.managerlist')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Employee List</a>
<a href="<?php echo e(route('admin.employeelist')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Manager List</a>
<?php elseif($page=="Admin"): ?>
<a href="<?php echo e(route('admin.workerslist')); ?>" class="btn btn-outline-info mb-2 "><i class="fa fa-globe" aria-hidden="true"></i> All</a>
<a href="<?php echo e(route('admin.adminlist')); ?>" class="btn btn-outline-info mb-2 active" ><i class="fa fa-user-circle"  aria-hidden="true"></i> Admin List</a>
<a href="<?php echo e(route('admin.managerlist')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Employee List</a>
<a href="<?php echo e(route('admin.employeelist')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Manager List</a>
<?php elseif($page=="Manager"): ?>
<a href="<?php echo e(route('admin.workerslist')); ?>" class="btn btn-outline-info mb-2 "><i class="fa fa-globe" aria-hidden="true"></i> All</a>
<a href="<?php echo e(route('admin.adminlist')); ?>" class="btn btn-outline-info mb-2 " ><i class="fa fa-user-circle"  aria-hidden="true"></i> Admin List</a>
<a href="<?php echo e(route('admin.managerlist')); ?>" class="btn btn-outline-info mb-2 active"><i class="fa fa-user-circle" aria-hidden="true"></i> Employee List</a>
<a href="<?php echo e(route('admin.employeelist')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-user-circle" aria-hidden="true"></i> Manager List</a>
<?php else: ?>
<a href="<?php echo e(route('admin.workerslist')); ?>" class="btn btn-outline-info mb-2 "><i class="fa fa-globe" aria-hidden="true"></i> All</a>
<a href="<?php echo e(route('admin.adminlist')); ?>" class="btn btn-outline-info mb-2 " ><i class="fa fa-user-circle"  aria-hidden="true"></i> Admin List</a>
<a href="<?php echo e(route('admin.managerlist')); ?>" class="btn btn-outline-info mb-2 "><i class="fa fa-user-circle" aria-hidden="true"></i> Employee List</a>
<a href="<?php echo e(route('admin.employeelist')); ?>" class="btn btn-outline-info mb-2 active"><i class="fa fa-user-circle" aria-hidden="true"></i> Manager List</a>

<?php endif; ?>


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
      <th scope="col">Action</th>
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
			<td>
			<a href="<?php echo e(route('admin.editworker',$user->uid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
			<a href="<?php echo e(route('admin.deleteworker',$user->uid)); ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

</div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/workers_list.blade.php ENDPATH**/ ?>