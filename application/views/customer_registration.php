

   <!-- <div id="wrapper">-->

        <div id="page-wrapper" style="background-color: #fff;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">      
                        <h1 class="page-header" style="font-size: 24px;font-weight: 300;padding-top:0px;">
                      Customer Registration
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->

				<form role="form" name="regform"  action="<?php echo base_url() . 'Welcome/saveCustomer' ?>"  onsubmit="return validateForm();" method="post">
                 <div class="row" style="background-color: #eaece5;border: solid 0px gray;margin: 0 auto;padding-top: 30px;padding-bottom: 10px;border-radius: 10px;box-shadow: 3px 5px 5px #888888;">
				 <div class="row">
					<div class="col-lg-12">
						    <div class="form-group col-lg-6">
								<label>Enter Customer Name :</label>
								<input class="form-control" placeholder="Customer name" id="cutomer_name" name="cutomer_name"  onblur="validateName(id);" oninput="validateName(id);" required="">
								<span id="cutomer_nameError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Name</span>     
                                <span id="cutomer_nameError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span>  
							</div>
								 
							<div class="form-group col-lg-6">
                                <label>Enter Email ID :</label>  
                                <div class="form-group input-group">
								<span class="input-group-addon">@</span>
								<input type="text" class="form-control" placeholder="Email ID" id="cutomer_mail" name="cutomer_mail" oninput="validateEmailOptional(id);" onblur="validateEmailOptional(id);"> 
							</div>
							    <span id="cutomer_mailError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid email id</span>     
                                <span id="cutomer_mailError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Optional</span>
								
                           </div>
					  </div>
				 </div>
                <!-- <div class="row">
					<div class="col-lg-12">					 
						   <div class="form-group col-lg-6">
								<label>Enter WebSite</label>
							<div class="form-group input-group">
								<span class="input-group-addon">@</span>
								<input class="form-control" placeholder="Website URL" id="customer_web" name="customer_web"  onblur="validateName(id);" oninput="validateName(id);">
								
							</div>	
								<span id="customer_webError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Name</span>     
                                <span id="customer_webError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span> 
							</div>
                      </div>
				</div>-->
				<div class="row">  
					<div class="col-lg-12">								
                         <div class="col-lg-6">						 
							 <label>Enter Primary Mobile No :</label>
					   	      <div class="form-group">
								<input class="form-control" placeholder="Mobile No" id="cutomer_mob" name="cutomer_mob" maxlength="10"  oninput="validateMobileNoOptional(id);" onblur="validateMobileNoOptional(id);"> 
								<span id="cutomer_mobError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Mobile no</span>     
                                <span id="cutomer_mobError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Optional</span> 
								
								<!--<input class="form-control" placeholder="Mobile No" id="cutomer_mob" name="cutomer_mob" maxlength="10"  oninput="validateMobileNo(id);" required="" onblur="validateMobileNo(id);"> 
								<span id="cutomer_mobError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Mobile no</span>     
                                <span id="cutomer_mobError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span> -->
							</div>
					      </div>
					 	
						<div class="col-lg-6">						 
							 <label>Enter Secondary Mobile No :</label>
					   	      <div class="form-group">
								<input class="form-control" placeholder="Mobile No" id="cutomer_smob" name="cutomer_smob" maxlength="10"  oninput="validateMobileNoOptional(id);" onblur="validateMobileNoOptional(id);"> 
								<span id="cutomer_smobError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Mobile no</span>     
                                <span id="cutomer_smobError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Optional</span> 
							</div>
					      </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						   <div class="form-group col-lg-6">
								<label>Enter Landline :</label>
								<input class="form-control" placeholder="Landline" id="customer_landline" name="customer_landline" maxlength="11" oninput="validateContactNoOptional(id);" onblur="validateContactNoOptional(id);">  
								 <span id="customer_landlineError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Landline</span>     
                                 <span id="customer_landlineError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Optional</span>
							</div>
					  
						   <div class="form-group col-lg-6">     
								<label>Address :</label>
								<textarea class="form-control" rows="2" name="customer_address" id="customer_address" oninput="validateAddress(id);" required="" onblur="validateAddress(id);"></textarea>
								<span id="customer_addressError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Address</span>     
                                 <span id="customer_addressError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span> 
							</div>
				     </div>    
                </div>	
					
				<!--<div class="row">
					<div class="col-lg-12">
						   <div class="form-group col-lg-6">
								<label>Enter Pin code</label>
								<input class="form-control" placeholder="Pin No" id="cutomer_pin" name="cutomer_pin" oninput="validatePAN(id);" value="" onblur="validatePAN(id);"> 
								 <span id="cutomer_pinError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Passport</span>     
                                <span id="cutomer_pinError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Optional</span> 
							</div>
				     </div>    
                </div>	-->
				
				<div class="row">
					<div class="col-lg-12">
						   <div class="form-group col-lg-6">
								<label>Select State :</label><br>
									<select class="form-control"  onchange="getState();" id="customer_state" name="customer_state" required>  
								 
										<option disabled selected value>---select state-----</option>									    
										<?php foreach($state as $row)
											{										  											 
										?>											
											<option value="<?php echo $row->id;?>"><?php echo $row->stateName;?></option>
										<?php
											}
										?>
									</select>
								 <span id="customer_stateError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid </span>     
                                 <span id="customer_stateError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span>
							</div>
							
							<div class="form-group col-lg-6">
								<label>Select City :</label><br>
									<select class="form-control"  id="customer_city" name="customer_city" >									  
										<option disabled selected value>---select city-----</option>		
									</select>	
							</div>  
				     </div>    
                </div>
				<div class="row">
					<div class="col-lg-12">
						   <div class="form-group col-lg-6">
								<label>State Code :</label><br>
									<input class="form-control" placeholder="State Code" id="state_code" required="" name="state_code" readonly>
							</div>
							  <div class="form-group col-lg-6">
								<label>Enter PIN Code :</label><br>
									<input class="form-control" placeholder="PIN code" id="customer_pincode" name="customer_pincode" oninput="validatePIN(id);" required="" onblur="validatePIN(id);" maxlength="7" required=""> 
								 <span id="customer_pincodeError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid </span>     
                                 <span id="customer_pincodeError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span>	
							</div>
				     </div>    
                </div>	
				<div class="row">
					<div class="col-lg-12">
						 
							
							<div class="form-group col-lg-6">
								<label>Enter GSTIN :</label><br>
									<input class="form-control" placeholder="GSTIN" id="customer_GSTIN" name="customer_GSTIN" maxlength="15" required=""> 
								    <span id="customer_landlineError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid </span>     
                                   <span id="customer_landlineError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span>
							</div>
				     </div>    
                </div>	
							
				<br>  
				<div class="row">	
			        <div class="col-lg-12">
					    <div class="form-group col-lg-1" style="margin:0 auto;left :40%">	
								<input type="submit" class="btn btn-success" id="submit"  name="go_btn" style="width:80px;padding:5px" value="save" />
						</div>
						
						<div class="form-group col-lg-1" style="margin:0 auto;left :40%">
								<button type="button" class="btn btn-default" id="cancle" onclick="cancleAction()" style="width:80px;padding:5px">Cancel</button>
						</div>
					</div>	    
				</div>	
				<br>
					<div>
				</form>
              
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->




<script type="text/javascript">

function cancleAction()
{
	var base_url = window.location.origin;
	window.location = base_url+'/AkolkarSaraf/Welcome/customerList';
	
}
function getState()
{
	var state=$('#customer_state').val();//document.getElementsByName('state')[0].value;
	//alert(state);
	 $.ajax({
					 type: "GET",
					 url: '<?php echo base_url('index.php/Welcome/fetchCity');?>',
					 data: {'state':state},
					 dataType : 'text',  
				    
					 success: function(res)
					 {     	
							//alert(res);
						var data=res.split('@');
						$('#state_code').val(data[0]);
						$('#customer_city').html(data[1]);
					 }
            
				  });		
	
}

</script>

<script src="<?php echo base_url("/js/validation.js"); ?>" type="text/javascript"></script>
<script>
  function validateForm() 
  {
	 //alert('in validate');
	   
      // Set error catcher
         var error = 0;
      // Check first name
     if(!validateName('cutomer_name'))
	 {
		 
           error++;
		   return false;
     }
	 if(!validateContactNoOptional('customer_landline'))
	 {
		 error++;
		 return false;
     }
	 
                            
     if(!validateEmailOptional('cutomer_mail'))
	 {
         error++;
		 return false;
     }
     if(!validateMobileNoOptional('cutomer_mob'))
	 {
        error++;
		return false;
     }
	 
	  if(!validateMobileNoOptional('cutomer_smob'))
	 {
        error++;
		return false;
     }
   
	 if(!validateAddress('customer_address'))
	 {
        error++;
		return false;
     }
	 if(!validatePIN('customer_pincode'))
	 {
        error++;
		return false;
     }
	
   
     if(error > 0) 
	 {
         document.getElementById('submit').disabled = true;
         return false;
     } 
	 else
     {
         document.getElementById('submit').disabled = false;
     }

}  


</script>
