

   <!-- <div id="wrapper">-->

        <div id="page-wrapper" style="background-color: #fff;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">      
                        <h1 class="page-header" style="font-size: 24px;font-weight: 300;padding-top:0px;">
                      Product Registration
                        </h1>
                      
                    </div>
                </div>
                <!-- /.row -->
				<form role="form" name="regform" action="<?php echo base_url() . 'Welcome/saveProduct'; ?>"  method="post"  enctype="multipart/form-data">
               <div class="row" style="background-color: #eaece5;border: solid 0px gray;margin: 0 auto;padding-top: 30px;padding-bottom: 10px;border-radius: 10px;box-shadow: 3px 5px 5px #888888;">
				 <div class="row" style="padding-bottom: 10px;">
					<div class="col-lg-12">
							<div class="col-lg-3" ><label style="margin-left:100px">Products Name :</label></div>
						    <div class="form-group col-lg-6" >
								<!--<select class="selectpicker" data-show-subtext="true" data-live-search="true" style="width:100%;height:20px;">
									     <option desabled>---select -----</option>
									</select>-->
								<input class="form-control" placeholder="Product Name" id="productName" name="productName" oninput="validateMobileNo(id);" onblur="validateMobileNo(id);" style="height:40px"> 
								<span id="cutomer_mobError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid Mobile no</span>     
                                <span id="cutomer_mobError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory</span> 
							</div>
					</div>
				</div>
				<div class="row" style="padding-bottom: 10px;">
					<div class="col-lg-12">
					        <div class="col-lg-3"> <label style="margin-left:30px">Enter Product Class Name :</label></div>
							<div class="form-group col-lg-6">                                
								<select class="form-control" id="prodClassName" name="prodClassName" style="height:40px">
									<option disabled selected value> -- Type -- </option>
									<?php foreach($productClass as $row)
											{										  											 
									?>											
										<option value="<?php echo $row->class_id;?>"><?php echo $row->className;?></option>
									<?php
										}
									?>			
												
								</select>
                           </div>
					  </div>
				 </div>
               

				
				
				<div class="row" style="padding-bottom: 10px;">	
			        <div class="col-lg-12">
						<div class="form-group col-lg-1" style="margin:0 auto;left :40%">	
								<button type="submit" class="btn btn-success" id="submit"  name="go_btn" style="width:80px;padding:5px">Save</button>
						</div>
						
						<div class="form-group col-lg-1" style="margin:0 auto;left :40%">
								<button type="submit" class="btn btn-default"  style="width:80px;padding:5px">Cancle</button>
						</div>
					</div>	
				</div>	
                </div>				
				</form>
              
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->





