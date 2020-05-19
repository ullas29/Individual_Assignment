<?php $__env->startSection('title'); ?>
Payments List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="table-responsive">

<table class="table table-hover table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Order Id</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($payment->pid); ?></td>
			<td><?php echo e($payment->date); ?></td>
			<td><?php echo e($payment->amount); ?></td>
			<td><?php echo e($payment->status); ?></td>
			<td><?php echo e($payment->olid); ?></td>
			<?php if($payment->status=="Completed"): ?>
			<td>
			</td>
			<?php else: ?>
			<td>
			<a href="<?php echo e(route('admin.editpayment',$payment->pid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
			</td>
			<?php endif; ?>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

</div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/payments_list.blade.php ENDPATH**/ ?>