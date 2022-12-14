<?php $__env->startSection('admin'); ?>

<div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">



<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black">
					  <h3 class="widget-user-username">Admin Name: <?php echo e($adminData->name); ?> </h3>
					  <h3 class="widget-user-username">Admin Email: <?php echo e($adminData->email); ?> </h3>

	  <a href="<?php echo e(route('admin.profile.edit')); ?>" style="float: right;" class="btn btn-rounded btn-success mb-5"> Edit Profile</a>

					</div>
					<div class="widget-user-image">


  <img class="rounded-circle" src="<?php echo e((!empty($adminData->profile_photo_path))? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg')); ?>" alt="User Avatar">


					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
						  </div>
						  <!-- /.description-block -->
						</div>
					  </div>
					  <!-- /.row -->
					</div>
				  </div>

 


				 
			</div>
		</section>
		<!-- /.content -->
	  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ysx5xox21f3t/public_html/ppg/resources/views/admin/admin_profile_view.blade.php ENDPATH**/ ?>