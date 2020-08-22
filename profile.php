<?php require_once('includes/topbar.php')?>

<!-- Main Sidebar Container -->
<?php require_once('includes/sidebar.php')?>



            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Profile / Account Settings</h1>
                            </div><!-- /.col -->

                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <img style="height: 15rem" class="mx-auto d-block rounded-circle" src="dist/img/user2-160x160.jpg">
                        <form>
                            <input class="mx-auto d-block" type="file" id="myFile" name="filename">
                            
                        </form>
                        <!-- /.row -->
                        <hr>
                        <!-- Main row -->

                        <!-- Small boxes (Stat box) -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Profile Settings</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <form action="#">

                                        <div class="form-group">
                                            <label for="">Full Name:</label>
                                            <input type="text"  value="" class="form-control" id="name_profile" placeholder="Full Name" >
                                            <input type="hidden"  class="form-control" id="user_id"  value="">
                                        </div>    

                                        <div class="form-group">
                                            <label for="">Account Number</label>

                                            <input type="text" class="form-control"  id="ac_number" value="" placeholder="Account Number" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number</label>

                                            <input type="number" class="form-control"  value="" id="mobile" placeholder="Phone Number" >
                                        </div>



                                        <div class="form-group">
                                            <label for="email">E-mail</label>

                                            <input type="text" class="form-control"  id="email" value="" placeholder="E-mail" >

                                        </div>

                                        <div class="form-group">
                                            <label for="occupation">BVN</label>
                                            <input type="text" class="form-control"  value=""  disabled>

                                            <input type="text" class="form-control"  value="" id="occupation"  placeholder="Occupation" hidden >

                                        </div>

                                        <br>
                                        <div style="margin-bottom: 50px;" class="">
                                            <button type="button" id ="changeprofile" style="width: 40%;" class="btn btn-primary" > Update Profile </button> 
                                        </div>
                                    </form>
                                </div>
                                </div>




                            <div style="margin-top: 20px;" class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Account Settings</h6>
                                </div>

                                <div class="card-body">

                                    <div class="card shadow mb-4">

                                        <a href="#collapseAutosave" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Autosave Settings</h6>
                                        </a>
                                        <div class="collapse " id="collapseAutosave">
                                            <div class="card-body">
                                                <form action="../app/autosave_pay.php">

                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="autosave">
                                                        <label class="custom-control-label" name="autosave" for="autosave">Autosave</label>
                                                    </div><br>

                                                    <small class="text-success" id="successmsg" ></small>
                                                    <small class="text-success" id="failmsg" ></small>
                                                    <div id="autoinput" style="display: none">

                                                        <div class="form-group ">
                                                            <label for="Amount">Amount</label>
                                                            <input type="number" class="form-control" id="amount" name = "amount" placeholder="Amount" >
                                                        </div>

                                                        <div class="form-check">
                                                            <label class="form-check-label autocheck">
                                                                <input type="radio" class="form-check-input autocheck" id="" name="opto"  value = "daily">Daily
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input autocheck" name="opto" value = "weekly">Weekly
                                                            </label>
                                                        </div>
                                                        <div class="form-check disabled">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input autocheck" name="opto" value = "monthly" >Monthly
                                                            </label>
                                                        </div>


                                                        <br>
                                                        <div style="margin-bottom: 50px;" class="">
                                                            <button type="button" style="width: 40%;" class="btn btn-primary" name="setautosave" id="setautosave" >Set</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow mb-4">

                                        <a href="#withdrawalSettings" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Bank Account Settings</h6>
                                        </a>

                                        <div class="collapse " id="withdrawalSettings">
                                            <div class="card-body">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label for="BankName">Bank Name</label>
                                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                            <option selected  >Choose...</option>
                                                            <option value="Access Bank">Access Bank</option>
                                                            <option value="Eco Bank">Eco Bank</option>
                                                            <option value="GTMobile">GTMobile</option>
                                                            <option value="Fidelity Bank plc">Fidelity Bank Plc</option>
                                                            <option value="FCMB">First City Monument Bank Limited</option>
                                                            <option value="First Bank">First Bank of Nigeria Limited</option>
                                                            <option value="Union Bnak">Union Bank of Nigeria Plc</option>
                                                            <option value="GTbank">Guaranty Trust Bank Plc</option>
                                                            <option value="Uba">United Bank for Africa Plc</option>
                                                            <option value="Zenith Bankk">Zenith Bank Plc</option>
                                                            <option value="Citi Bank">Citibank Nigeria Limited</option>
                                                            <option value="Heritage Bank">Heritage Banking Company Limited</option>
                                                            <option value="Keystone Bank">Keystone Bank Limited</option>
                                                            <option value="Polaris Bank">Polaris Bank Limited.</option>
                                                            <option value="Stabic IBTC">Stanbic IBTC Bank Plc</option>
                                                            <option value="Standard Chartered">Standard Chartered</option>
                                                            <option value="Sterling Bank plc">Sterling Bank Plc</option>
                                                            <option value="Titan Trust Bank">Titan Trust Bank Limited</option>
                                                            <option value="Unity Bank Plc">Unity Bank Plc</option>
                                                            <option value="Wema Bank Plc">Wema Bank Plc</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="accountNumber">Account Number</label>
                                                        <input type="number" class="form-control" id = "accnumber" placeholder="Account Number" >
                                                        <input type="hidden" class="form-control" value="137213" id ="withdrawid" >

                                                    </div>    

                                                    <div class="form-group">
                                                        <label for="accountName">Account Name </label>
                                                        <input type="text" class="form-control" id="accountname"  placeholder="Account Name" >

                                                    </div>



                                                    <br>
                                                    <div style="margin-bottom: 50px;" class="">
                                                        <button  type="button" style="width: 40%;" class="btn btn-primary" id = "withdrawalsetting" >Set Account Details</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow mb-4">
                                        <a style="text-decoration: none" href="#bvncollapse" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample" >
                                            <h6 class="m-0 font-weight-bold text-primary">Update BVN</h6>
                                        </a>

                                        <div class="collapse " id="bvncollapse">
                                            <div class="card-body">
                                                <form action="#">
                                                    <small class="text-success" id="updated"> </small>
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" value="137213"  name="customer_id" id="bvncustomer_id" >
                                                        <input type="hidden" class="form-control"  value="471" name="institution" id="institution">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="bvn">Enter BVN</label>
                                                        <input type="number" class="form-control" id="bvn_num"  name="bvn" placeholder="BVN" >
                                                    </div>


                                                    <br>
                                                    <div style="margin-bottom: 50px;" class="">
                                                        <button  type="button" style="width: 40%;" class="btn btn-primary" id="bvn_update" >Save BVN</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- <div class="card shadow mb-4">
<a href="#viewcards" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
<h6 class="m-0 font-weight-bold text-primary">View Cards</h6>
</a>

<div class="collapse " id="viewcards">
<div class="card-body">

<table>


</table>

<form action="#">
<div class="form-group">
<label for="cardNumber">Card Number</label>
<input type="number" class="form-control" id="cardNumber"  placeholder="" >

</div>    

<div class="form-group">
<label for="cardName">Card Name </label>
<input type="text" class="form-control" id="cardName"  placeholder="" >

</div>

<div class="form-group">
<label for="expyDate">Expiry Date </label>
<input type="Date" class="form-control" id="expyDate"  placeholder="" >

</div>

<div class="form-group">
<label for="cvv">CVV </label>
<input type="text" class="form-control" id="cvv" max="3" maxlength="3"  placeholder="" >

</div>

<br>
<div style="margin-bottom: 50px;" class="">
<button  type="button" style="width: 40%;" class="btn btn-primary" >Add Card</button>
</div>
</form>
</div>
</div>
</div>-->

                                    <div class="card shadow mb-4">

                                        <a href="#changepassword" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
                                            <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                                        </a>

                                        <div class="collapse " id="changepassword">
                                            <div class="card-body">
                                                <form action="#">



                                                    <div class="form-group">
                                                        <label for="currentPassword">Current password</label>
                                                        <input type="hidden" class="form-control" id="password_id" value = "137213"  placeholder="" >
                                                        <input type="password" class="form-control" id="currentpassword"  placeholder="" >

                                                    </div>    

                                                    <div class="form-group">
                                                        <label for="newPassword">New Password </label>
                                                        <input type="password" class="form-control" id="newpassword"  placeholder="" >

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="confirmPassword">Confirm Password </label>
                                                        <input type="password" class="form-control" id="confirmpassword"  placeholder="" >

                                                    </div>



                                                    <br>
                                                    <div style="margin-bottom: 50px;" class="">

                                                        <button type="button" style="width: 40%;" id="updatepassword" class="btn btn-primary" >Change Password</button>
                                                    </div>
                                                </form>
                        </div>
                        <!-- /.row -->

                    </div>



                    </div><!-- /.container-fluid -->
                </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
                            <?php require_once('includes/footer.php')?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    </body>
</html>
