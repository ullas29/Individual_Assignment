<?php $__env->startSection('title'); ?>
Orders List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($order->olid); ?></td>
			<td><?php echo e($order->uid); ?></td>
			<td><?php echo e($order->date); ?></td>
			<td><?php echo e($order->status); ?></td>
      <?php if($order->status=="Shipping Ready"): ?>
			<td>
      <a href="<?php echo e(route('admin.editorderlog',$order->olid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> 
			</td>
      <?php else: ?>
      <td>
      </td>
      <?php endif; ?>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/orderlog_list.blade.php ENDPATH**/ ?>