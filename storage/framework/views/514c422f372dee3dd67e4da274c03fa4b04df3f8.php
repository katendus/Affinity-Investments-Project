
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
				  <h3 class="box-title">Edit Record </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


                         <form action="<?php echo e(route('grid.update',$grid->id)); ?>" method="POST">

                              <?php echo csrf_field(); ?>
                       <input type="hidden" name="id" value="<?php echo e($grid->id); ?>">   
                    
                                   <div class="form-group">
                              <h5>First Name  <span class="text-danger">*</span></h5>
                      <input type="text" name="First_Name" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->First_Name); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Last Name  <span class="text-danger">*</span></h5>
                      <input type="text" name="Last_Name" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Last_Name); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                                    <h5>Phone Number  <span class="text-danger">*</span></h5>
                      <input type="text" name="Phone_Number" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Phone_Number); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Amount Invested  </h5>
                      <input type="text" name="Amount_Invested" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Amount_Invested); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Profit Amount  </h5>
                      <input type="text" name="Profit_Amount" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Profit_Amount); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Gross Amount  </h5>
                      <input type="text" name="Gross_Amount" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Gross_Amount); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Days Profit  </h5>
                      <input type="text" name="Days_Profit" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Days_Profit); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Current Profit Amount  </h5>
                      <input type="text" name="Current_Profit_Amount" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Current_Profit_Amount); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Withdrawable Amount  </h5>
                      <input type="text" name="Withdrawable_Amount" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Withdrawable_Amount); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Date Invested  </h5>
                      <input type="text" name="Date_Invested" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Date_Invested); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Contract Expire  </h5>
                      <input type="text" name="Contract_Expire" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Contract_Expire); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Membership Amount  </h5>
                      <input type="text" name="Membership_Amount" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Membership_Amount); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Bank Name  </h5>
                      <input type="text" name="Bank_Name" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Bank_Name); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Account Name  </h5>
                      <input type="text" name="Account_Name" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Account_Name); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Bank Account  </h5>
                      <input type="text" name="Bank_Account" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Bank_Account); ?>" >
                                        
                                   </div>
                    
                    
                                   <div class="form-group">
                              <h5>Stanbic Tran ID  </h5>
                      <input type="text" name="Stanbic_Tran_ID" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Stanbic_Tran_ID); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Stanbic Tran Date  </h5>
                      <input type="text" name="Stanbic_Tran_Date" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Stanbic_Tran_Date); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Email Address  </h5>
                      <input type="text" name="Email_Address" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Email_Address); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Password  </h5>
                      <input type="text" name="Password" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Password); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Next of Keen  </h5>
                      <input type="text" name="Next_of_Keen" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Next_of_Keen); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Phone Number Next Of Kin  </h5>
                      <input type="text" name="Phone_Number_Next_Of_Kin" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Phone_Number_Next_Of_Kin); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Client Agent  </h5>
                      <input type="text" name="Client_Agent" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Client_Agent); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Client Manager  </h5>
                      <input type="text" name="Client_Manager" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Client_Manager); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Bitcoin  </h5>
                      <input type="text" name="Bitcoin_Crypto" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Bitcoin_Crypto); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>OneCoin  </h5>
                      <input type="text" name="OneCoin_Crypto" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->OneCoin_Crypto); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Amount Paid for OneCoin  </h5>
                      <input type="text" name="OneCoin_Amount" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->OneCoin_Amount); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Ethereum  </h5>
                      <input type="text" name="Ethereum_Crypto" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Ethereum_Crypto); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>OneLife UserName  </h5>
                      <input type="text" name="Paxos_Crypto" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Paxos_Crypto); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Amount Converted  </h5>
                      <input type="text" name="Amount_Converted" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Amount_Converted); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Coins Received  </h5>
                      <input type="text" name="Coins_Received" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Coins_Received); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Date Converted  </h5>
                      <input type="text" name="Date_Converted" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Date_Converted); ?>" >
                                        
                                   </div>
                    
                                        <div class="form-group">
                                <h5>Account Status  </h5>
                       <select name="Account_Status" class="form-control" id="exampleFormControlSelect1" value="<?php echo e($grid->Account_Status); ?>" >
                          <option value="CONTRACT ACTIVE" <?php echo e($grid->Account_Status == "CONTRACT ACTIVE" ? 'selected' : ''); ?> > CONTRACT ACTIVE </option>
                          <option value="CONTRACT EXPIRED" <?php echo e($grid->Account_Status == "CONTRACT EXPIRED" ? 'selected' : ''); ?> > CONTRACT EXPIRED </option>
                          <option value="CONTRACT TERMINATED" <?php echo e($grid->Account_Status == "CONTRACT TERMINATED" ? 'selected' : ''); ?> > CONTRACT TERMINATED </option>
                          <option value="CONTRACT MERGED" <?php echo e($grid->Account_Status == "CONTRACT MERGED" ? 'selected' : ''); ?> > CONTRACT MERGED </option>
                       </select>
                       
                                      </div>
                                    
                                   <div class="form-group">
                                        <h5>Special Notes  </h5>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Special_Notes">
                     <?php echo e($grid->Special_Notes); ?>

                    
                     </textarea>
                                   </div>
                                      
                                   <div class="form-group">
                              <h5>Modified By  </h5>
                      <input type="text" name="Modified_By" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Modified_By); ?>" >
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Modified Date  </h5>
                      <input type="text" name="Modified_Date" class="form-control" id="exampleFormControlInput1" value="<?php echo e($grid->Modified_Date); ?>" >
                                        
                                   </div>       
                                        
                    
                    
                                   <div class="form-footer pt-4 pt-5 mt-4 border-top"><br>
                                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Record">

                                   </div>
                              </form>
          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ysx5xox21f3t/public_html/ppg/resources/views/data/grid_edit.blade.php ENDPATH**/ ?>