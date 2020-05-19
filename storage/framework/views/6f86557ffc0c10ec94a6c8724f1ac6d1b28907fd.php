<?php $__env->startSection('title'); ?>
Product Sub Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('admin.newsubcategory')); ?>" class="btn btn-outline-info mb-2"><i class="fa fa-plus" aria-hidden="true"></i> New</a>
<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($subcategory->scid); ?></td>
			<td><?php echo e($subcategory->scname); ?></td>
			<td><?php echo e($subcategory->cname); ?></td>
			<td>
      <a href="<?php echo e(route('admin.editsubcategory',$subcategory->scid)); ?>" class="btn btn-outline-dark"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> | 
			<a href="<?php echo e(route('admin.deletesubcategory',$subcategory->scid)); ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  		
	</tbody>
</table>

<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout/admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Individual Assignment\assignment\resources\views/admin/sub_category_list.blade.php ENDPATH**/ ?>