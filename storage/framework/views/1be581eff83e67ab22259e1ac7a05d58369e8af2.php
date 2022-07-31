
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
				  <h3 class="box-title">Add Record </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


                         <form action="<?php echo e(route('store.grid')); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                    
                    
                                   <div class="form-group">
                              <h5>First Name  <span class="text-danger">*</span></h5>
                      <input type="text" name="First_Name" class="form-control" id="exampleFormControlInput1">
                     <?php $__errorArgs = ['First_Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                     <span class="text-danger"><?php echo e($message); ?></span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   

                                   </div>
                    
                                   <div class="form-group">
                              <h5>Last Name  <span class="text-danger">*</span></h5>
                      <input type="text" name="Last_Name" class="form-control" id="exampleFormControlInput1">
                     <?php $__errorArgs = ['Last_Name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                     <span class="text-danger"><?php echo e($message); ?></span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                                   </div>
                    
                                   <div class="form-group">
                              <h5>Phone Number  <span class="text-danger">*</span></h5>
                      <input type="text" name="Phone_Number" class="form-control" id="exampleFormControlInput1">
                     <?php $__errorArgs = ['Phone_Number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                     <span class="text-danger"><?php echo e($message); ?></span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                              
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Amount Invested  </h5>
                      <input type="text" name="Amount_Invested" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Profit Amount  </h5>
                      <input type="text" name="Profit_Amount" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Gross Amount  </h5>
                      <input type="text" name="Gross_Amount" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Days Profit  </h5>
                      <input type="text" name="Days_Profit" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Current Profit Amount  </h5>
                      <input type="text" name="Current_Profit_Amount" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Withdrawable Amount  </h5>
                      <input type="text" name="Withdrawable_Amount" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Date Invested  </h5>
                      <input type="text" name="Date_Invested" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Contract Expire  </h5>
                      <input type="text" name="Contract_Expire" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Membership Amount  </h5>
                      <input type="text" name="Membership_Amount" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Bank Name  </h5>
                      <input type="text" name="Bank_Name" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Account Name  </h5>
                      <input type="text" name="Account_Name" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Bank Account  </h5>
                      <input type="text" name="Bank_Account" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                    
                                   <div class="form-group">
                              <h5>Stanbic Tran ID  </h5>
                      <input type="text" name="Stanbic_Tran_ID" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Stanbic Tran Date  </h5>
                      <input type="text" name="Stanbic_Tran_Date" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Email Address  </h5>
                      <input type="text" name="Email_Address" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Password   </h5>
                      <input type="text" name="Password" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Next of Keen  </h5>
                      <input type="text" name="Next_of_Keen" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Phone Number Next Of Kin  </h5>
                      <input type="text" name="Phone_Number_Next_Of_Kin" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Client Agent  </h5>
                      <input type="text" name="Client_Agent" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Client Manager  </h5>
                      <input type="text" name="Client_Manager" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Bitcoin  </h5>
                      <input type="text" name="Bitcoin_Crypto" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>OneCoin  </h5>
                      <input type="text" name="OneCoin_Crypto" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Amount Paid for OneCoin  </h5>
                      <input type="text" name="OneCoin_Amount" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Ethereum  </h5>
                      <input type="text" name="Ethereum_Crypto" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>OneLife UserName  </h5>
                      <input type="text" name="Paxos_Crypto" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Amount Converted  </h5>
                      <input type="text" name="Amount_Converted" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Coins Received  </h5>
                      <input type="text" name="Coins_Received" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Date Converted  </h5>
                      <input type="text" name="Date_Converted" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                        <div class="form-group">
                                <h5>Account Status  </h5>
                       <select name="Account_Status" class="form-control" id="exampleFormControlSelect1">
                          <option>CONTRACT ACTIVE</option>
                          <option>CONTRACT EXPIRED</option>
                          <option>CONTRACT TERMINATED</option>
                          <option>CONTRACT MERGED</option>
                       </select>
                       
                                      </div>
                                    
                                   <div class="form-group">
                                        <h5>Special Notes  </h5>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Special_Notes">
                    
                     </textarea>
                                   </div>
                                      
                                   <div class="form-group">
                              <h5>Modified By  </h5>
                      <input type="text" name="Modified_By" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>
                    
                                   <div class="form-group">
                              <h5>Modified Date  </h5>
                      <input type="text" name="Modified_Date" class="form-control" id="exampleFormControlInput1">
                                        
                                   </div>			                       
                                        
                    
                                   <div class="form-footer pt-4 pt-5 mt-4 border-top"><br>

                                   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Record">
                                        
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ysx5xox21f3t/public_html/ppg/resources/views/data/add_record.blade.php ENDPATH**/ ?>