<?php $__env->startSection('title'); ?>
Product Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('admin.newcategory')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $busesshedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busesshedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($busesshedule->bsid); ?></td>
			<td><?php echo e($busesshedule->name); ?></td>
			<td>
				<a href="<?php echo e(route('admin.editcategory',$busesshedule->cid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> | 
				<a href="<?php echo e(route('admin.deletecategory',$busesshedule->cid)); ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/category_list.blade.php ENDPATH**/ ?>