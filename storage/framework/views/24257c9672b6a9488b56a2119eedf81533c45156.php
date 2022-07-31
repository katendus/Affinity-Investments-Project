
<?php $__env->startSection('admin'); ?>



    <!-- Content Wrapper. Contains page content -->
	  <div class="container-full">
		<!-- Content Header (Page header) -->

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
		  <h3 class="box-title">Data Grid <span class="badge badge-pill badge-danger"> <?php echo e(count($grids)); ?> </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>PPG#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Amount Invested</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
<?php $__currentLoopData = $grids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td>PPG000<?php echo e($item->id); ?></td>
								<td><?php echo e($item->First_Name); ?></td>
								<td><?php echo e($item->Last_Name); ?></td>
								<td><?php echo e($item->Amount_Invested); ?></td>
								<td>

 <a href="<?php echo e(route('grid.edit',$item->id)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="<?php echo e(route('grid.delete',$item->id)); ?>" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>

								</td>
							</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ysx5xox21f3t/public_html/ppg/resources/views/data/grid_view.blade.php ENDPATH**/ ?>