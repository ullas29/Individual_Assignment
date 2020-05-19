<?php $__env->startSection('title'); ?>
Product Item
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('admin.newitem')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>

<div class="table-responsive">

<table class="table table-hover table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Discription</th>
      <th scope="col">Sub-Category</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($item->iid); ?></td>
			<td><?php echo e($item->iname); ?></td>
			<td><?php echo e($item->iprice); ?></td>
			<td><small><?php echo e($item->description); ?></small></td>
			<td><?php echo e($item->scname); ?></td>
			<td>
			<a href="<?php echo e(route('admin.edititem',$item->iid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
			<a href="<?php echo e(route('admin.deleteitem',$item->iid)); ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

</div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/item_list.blade.php ENDPATH**/ ?>