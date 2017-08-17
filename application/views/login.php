<!DOCTYPE html>
<html lang="en">

<head>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Technicious</title>
 <title>Technicious</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."css/bootstrap.min.css";?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()."css/sb-admin.css";?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()."css/plugins/morris.css";?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."font-awesome/css/font-awesome.min.css";?>" rel="stylesheet" type="text/css">
    <!-- Toaster CSS -->
    <link href="<?php echo base_url()."mycss/toastr.min.css";?>" rel="stylesheet" type="text/css">
  
    
</head>
    
<body style="background-color: #eaece5;"> 
 
      <div id="page-wrapper" style="max-width:450px;margin:auto;left: 50%;border-radius:20px;margin-top: 10%; "> 
            <div class="container-fluid" style="max-width:in-line;"> 
				
                <div class="row" >   
				<form action="<?php echo base_url() . 'Welcome/login_user' ?>" method="post" >
                    
					
					<div class="col-lg-12" style="">
								
									<h1 align="center" style="font-size: 30px;font-weight: 600;padding-top:0px;">
							  				Login 
									</h1>                 
						  
                           <div class="form-group input-group" style="padding-top:15px">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" placeholder="Enter User Name" name="nm">
                           </div>
						    
							<div class="form-group input-group" style="padding-top:15px">
								<span class="input-group-addon"><i class="fa fa-key"></i></span>
								<input type="password" class="form-control" placeholder="Enter Password" name="pswd">
                            </div> 
						<div class="row">
						<div class="col-lg-12">
						<div class="col-lg-1 form-group" style="margin: 0 auto; left:21.5% ;padding-top:15px">
													
								<button type="submit" name="login" class="btn btn-md btn-success" style="width:100px">Login</button>
							
						</div>
						<div class="col-lg-1 form-group" style="margin: 0 auto; left:41.5%;padding-top:15px">
							
								<button type="reset" class="btn btn-md btn-default" style="width:100px">Cancel</button>				
							
						</div>
						</div>
						</div>
                     </div>
                   
					</form>
                </div>
				</div>
   </div>
</body>
     <script src="<?php echo base_url() . 'js/jquery.js' ?>"></script>


	<!-- jQuery -->
    <script src="<?php echo base_url()."js/toastr.min.js";?>"></script>
	

</html>
			
						 