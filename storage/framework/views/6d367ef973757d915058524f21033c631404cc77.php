<?php $__env->startSection('title'); ?>
busesshedule
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('admin.newbusesshedule')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Operator</th>
      <th scope="col">S.Row</th>
      <th scope="col">S.Column</th>
      <th scope="col">Route</th>
      <th scope="col">Fare</th>
      <th scope="col">Departure</th>
      <th scope="col">Arrival</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $busesshedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busesshedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($busesshedule->bsid); ?></td>
			<td><?php echo e($busesshedule->name); ?></td>
			<td><?php echo e($busesshedule->operator); ?></td>
			<td><?php echo e($busesshedule->seat_row); ?></td>
			<td><?php echo e($busesshedule->seat_column); ?></td>
			<td><?php echo e($busesshedule->route); ?></td>
			<td><?php echo e($busesshedule->fare); ?></td>
			<td><?php echo e($busesshedule->departure); ?></td>
			<td><?php echo e($busesshedule->arrival); ?></td>
			<td>
				<a href="<?php echo e(route('admin.editbusesshedule',$busesshedule->bsid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> | 
				<a href="<?php echo e(route('admin.deletebusesshedule',$busesshedule->bsid)); ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/busesshedule.blade.php ENDPATH**/ ?>