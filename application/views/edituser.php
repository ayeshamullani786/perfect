
<?php
/*  $con = mysqli_connect('localhost','root','');
  if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"payroll");
 */
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit User Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="active"> User Registration</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">User Personal Details</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
                </div>
            </div><!-- /.box-header -->
            <div class="row">
                <div class="col-md-2">

                    <!--<a href="#" class="btn btn-primary btn-block"><b>Submit</b></a>-->
                </div> 
                <div class="col-md-2">

                    <!--<a href="#" class="btn btn-primary btn-block"><b>Submit</b></a>-->
                </div>   <div class="col-md-2">

                    <!--<a href="#" class="btn btn-primary btn-block"><b>Submit</b></a>-->
                </div>   <div class="col-md-2">

                    <!--<a href="#" class="btn btn-primary btn-block"><b>Submit</b></a>-->
                </div> 
                <div class="col-md-2">

                    <!--<a href="#" class="btn btn-primary btn-block"><b>Submit</b></a>-->
                </div> 
                <!--	<div class="col-md-2">
                                <input type="button" class="btn btn-primary btn-block" value="Edit" id="myButton" name="s">
                <!--<a href="#" class="btn btn-primary btn-block"><b>Submit</b></a>
        </div> -->
            </div>

            <div class="box-body">
                <?php //foreach ($query->result() as $row) {
                    ?>
                    <div class="row">
                        <div class="col-md-6">

                            <form method="post" onsubmit="return validateForm()" action="<?php echo base_url() . 'Welcome/updateuser/'?>" name="s" >
                                <div class="form-group">
                                    <label>First Name<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo $UserData[0]->firstname; ?>" name="firstname" id="firstname" />

                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label>User Name<span style="color:red;">*</span></label>

                                   <input type="text" class="form-control" value="<?php echo $UserData[0]->user_username; ?>" name="username" id="username" />

                                </div>

                                <div class="form-group">
                                    <label>Email<span style="color:red;">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control" tabindex="5" value="<?php echo $UserData[0]->eMail; ?>" placeholder="Please Enter Email ID" autofocus title="Valid Email ID Accepted Only">
                                    <!-- onblur="validateEmailMandatory(id)" oninput="validateEmailMandatory(id)" <span id="emailError" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Valid EMail ID  Accepted Only Eg.abc@gmail.com</span>
                                    <span id="emailError1" style="display: none;"><i class="fa fa-times" aria-hidden="true"></i>Field is Mandatory.</span>-->
                                </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">

                                    <label>Last Name<span style="color:red;">*</span></label>

                                    <input type="text"  class="form-control"id="lastname" name="lastname" value="<?php echo $UserData[0]->lastname; ?>">  
                                    
                                    <div class="form-group">
                                        <label>Password<span style="color:red;">*</span></label>
                                         <input  type="text" class="form-control" value="<?php echo $UserData[0]->user_password; ?>" name="password" id="password" />
                                    </div>

                                </div>

                                <div class="form-group">

                                </div>
                                <div class="form-group">
                                    <label>Mobile No<span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" name="mobileNo" id="mobileNo"  value="<?php echo $UserData[0]->mobileNo; ?>">
                                   
                                </div>

                              
                            </div>


                        </div>
                    </div>  
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="" id="EnableCheck" onmouseover="return validateForm()">
                            <br>
                            <input type="submit" id="submit" class="btn btn-primary btn-block" value="Update" name="s">
                            <br>
                        </div> 
                    </div>   

                    <div class="col-sm-4"></div>
                </div><!-- /.box-body -->


                </form>
<?php //} ?>    
    </section><!-- /.content -->


<!--<section class="content">-->

    <!-- SELECT2 EXAMPLE -->

    <div class="box-body">

    </div><!-- /.box-body -->

    <script src="<?php echo base_url("/js/validation.js"); ?>" type="text/javascript"></script>

    <script>
                        function validateForm() {
                            // Set error catcher
                            var error = 0;
                            // Check first name
                            if (!validateName('empnm'))
                            {
                                error++;
                            }

                            if (!validateNumbersMandatory('branchid')) {

                                error++;
                            }
                            if (!validateNumbersMandatory('empno')) {

                                error++;
                            }
                            if (!validateEmailMandatory('email')) {

                                error++;
                            }
                            if (!validateEmailMandatory('userid')) {

                                error++;
                            }
                            if (validatePassword('pass')) {

                                error++;
                            }

                            if (validateSelectEmpty('accesslevel')) {

                                error++;
                            }
                            if (!validateDOB('birdate')) {

                                error++;
                            }
                            if (!validateContactNo('contact')) {

                                error++;
                            }
                            // Don't submit form if there are errors
                            if (error > 0) {
                                //alert(error);
                                //alert("(*) Indicating Fields Are Mandatory.Please Match The Requested Format.");
                                document.getElementById('submit').disabled = true;
                                return false;
                            } else
                            {
                                document.getElementById('submit').disabled = false;
                            }
                        }
    </script>										





</div>

<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>           
<script type="text/javascript">
    document.getElementById('myButton').onclick = function ()
    {
        document.getElementById('myInput').removeAttribute('readonly');
        document.getElementById('myInput1').removeAttribute('readonly');
        document.getElementById('myInput2').removeAttribute('readonly');
        document.getElementById('myInput3').removeAttribute('readonly');
        document.getElementById('myInput4').removeAttribute('readonly');
    };
</script>




