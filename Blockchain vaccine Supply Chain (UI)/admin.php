<?php include('templates/_header.php'); ?>
        
         
      <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info" id="divOngoingTransaction" style="display: none">Ongoing Transaction: <span id="linkOngoingTransaction">None</span> </div>
                    </div>    
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 ">
                        <div class="white-box">
                            <h3 class="box-title">Users</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-user text-info"></i></li>
                                <li class="text-right"><span class="counter text-info" id="totalUsers">0</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 ">
                        <div class="white-box">
                            <h3 class="box-title">Total Roles</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-graduation text-purple"></i></li>
                                <li class="text-right "><span class="counter text-purple">5</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 ">
                        <div class="white-box">
                            <h3 class="box-title">Total Batches</h3>
                            <ul class="list-inline two-part">
                                <li><i class="icon-doc text-success"></i></li>
                                <li class="text-right"><span class="counter text-success" id="totalBatch">0</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                

                               <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                             <a href="javascript:void(0);" class="btn btn-info pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" onclick="javascript:$('#batchFormModel').modal();">Create Batch</a>
                            <h3 class="box-title">Batches Overview</h3> 
                            <div class="table-responsive">
                                <table class="table product-overview" id="batchTable">
                                    <thead>
                                        <tr>
                                            <th>Batch ID</th>
                                            <th>Supplier</th>
                                            <th>Manufacturer</th>
                                            <th>Wholesaler</th>
                                            <th>Distributer</th>
                                            <th>Pharma</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                             <td colspan="7" align="center">No Data Available</td>
                                         </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Your Address <i class="fa fa-qrcode fa-2x text-success"></i></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right" id="currentUserAddress">0x0000000000000000000000000000000000000000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                           <h3 class="box-title">Storage Contract Address <i class="fa fa-qrcode fa-2x text-danger"></i></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right" id="storageContractAddress">0x0000000000000000000000000000000000000000</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Vaccine Supplychain Contract Address <i class="fa fa-qrcode fa-2x text-info"></i></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right" id="vaccineSupplychainContractAddress">0x0000000000000000000000000000000000000000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                           <h3 class="box-title">SupplyChain User Contract Address <i class="fa fa-qrcode fa-2x text-info"></i></h3>
                            <ul class="list-inline two-part">
                                <li class="text-right" id="userContractAddress">0x0000000000000000000000000000000000000000</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--row -->
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">User Roles</h3> 
                            <div class="table-responsive">
                                <table class="table product-overview">
                                    <thead>
                                        <tr>
                                            <th>Role Name</th>
                                            <th>Role title</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Supplier</td>
                                            <td><span class="label label-info font-weight-100">SUPPLIER</span></td>
                                        </tr>
                                         <tr>
                                            <td>Manufacturer</td>
                                            <td><span class="label label-success font-weight-100">MANUFACTURER</span></td>
                                        </tr>
                                        <tr>
                                            <td>Wholesaler</td>
                                            <td><span class="label label-warning font-weight-100">WHOLESALER</span></td>
                                        </tr>
                                        <tr>
                                            <td>Distributer</td>
                                            <td><span class="label label-danger font-weight-100">DISTRIBUTER</span></td>
                                        </tr>
                                        <tr>
                                            <td>Pharmacy</td>
                                            <td><span class="label label-primary font-weight-100">PHARMA</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                             <a href="javascript:void(0);" id="userFormClick" class="btn btn-info pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Create User</a>
                            <h3 class="box-title">Users</h3> 
                            <div class="table-responsive">
                                <table class="table product-overview table-responsive" id="tblUser">
                                    <thead>
                                        <tr>
                                            <th>User Address</th>
                                            <th>Name</th>
                                            <th>Contact No.</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
  
            </div>
            <!-- /.container-fluid -->

            <div id="batchFormModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; padding-top: 170px;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title">Add New Vaccine Batch</h2>
                        </div>
                        <div class="modal-body">
                            <form id="batchForm" onsubmit="return false;">
                            <fieldset style="border:0;">
                                <div class="form-group">
                                    <label class="control-label" for="batchDescription">Batch Description <i class="red">*</i></label>
                                    <input type="text" class="form-control" id="batchDescription" name="batchDescription" placeholder="Batch description" data-parsley-required="true">
                                </div> 
                                <div class="form-group">
                                    <label class="control-label" for="quantity">Quantity <i class="red">*</i></label>
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" data-parsley-required="true">
                                </div>                              
                                <div class="form-group">
                                    <label class="control-label" for="supplierAddress">Raw Material Supplier Address <i class="red">*</i></label>
                                    <textarea class="form-control" id="supplierAddress" name="supplierAddress" placeholder="Supplier Address" data-parsley-required="true"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="manufacturerAddress">Vaccine Manufacturer Address <i class="red">*</i></label>
                                    <input type="text" class="form-control" id="manufacturerAddress" name="manufacturerAddress" placeholder="Manufacturer Address" data-parsley-required="true">
                                </div> 
                                <div class="form-group">
                                    <label class="control-label" for="wholesalerAddress">Wholesaler Address<i class="red">*</i></label>
                                    <input type="text" class="form-control" id="wholesalerAddress" name="wholesalerAddress" placeholder="Wholesaler address" data-parsley-required="true">
                                </div> 
                                <div class="form-group">
                                    <label class="control-label" for="distributerAddress">Distributer Address<i class="red">*</i></label>
                                    <input type="text" class="form-control" id="distributerAddress" name="distributerAddress" placeholder="Distributer address" data-parsley-required="true">
                                </div> 
                            </fieldset>
                            
                        </div>
                        <div class="modal-footer">
                             <button type="submit" onclick="addBatch();" class="fcbtn btn btn-primary btn-outline btn-1f">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div id="userFormModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; padding-top: 170px;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h2 class="modal-title" id="userModelTitle">Add User</h2>
                        </div>
                        <div class="modal-body">
                            <form id="userForm" onsubmit="return false;">
                                <fieldset style="border:0;">
                                    <div class="form-group">
                                        <label class="control-label" for="userWalletAddress">User Wallet Address <i class="red">*</i></label>
                                        <input type="text" class="form-control" id="userWalletAddress" name="userWalletAddress" placeholder="Wallet Address" data-parsley-required="true" minlength="42" maxlength="42">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="userName">User Name <i class="red">*</i></label>
                                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Name" data-parsley-required="true">
                                    </div>                              
                                    <div class="form-group">
                                        <label class="control-label" for="userContactNo">User Contact Number<i class="red">*</i></label>
                                        <input type="text" class="form-control" id="userContactNo" name="userContactNo" placeholder="Contact No" data-parsley-required="true" data-parsley-type="digits" data-parsley-length="[10, 15]" maxlength="15">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="userRoles">User Role <i class="red">*</i></label>
                                        <select class="form-control" id="userRoles" name="userRoles" data-parsley-required="true">
                                            <option value="">Select Role</option>
                                            <option value="SUPPLIER">Supplier</option>
                                            <option value="MANUFACTURER">Manufacturer</option>
                                            <option value="WHOLESALER">Wholesaler</option>
                                            <option value="DISTRIBUTER">Distributer</option>
                                            <option value="PHARMA">Pharmacy</option>
                                        </select>    
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label" for="isActive">User Status</label>
                                        <input type="checkbox" class="js-switch" data-color="#99d683" data-secondary-color="#f96262" id="isActive" name="isActive" data-size="small"/>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label" for="userProfileHash">Profile Image <i class="red">*</i></label>
                                        <input type="file" class="form-control" onchange="handleFileUpload(event);" />
                                        <input type="hidden" class="form-control" id="userProfileHash" name="userProfileHash" placeholder="User Profile Hash" data-parsley-required="true" >
                                        <span id="imageHash"></span>
                                    </div>
                                </fieldset>
                            
                        </div>
                        <div class="modal-footer">
                            <i style="display: none;" class="fa fa-spinner fa-spin"></i>
                             <button type="submit" onclick="userFormSubmit();" class="fcbtn btn btn-primary btn-outline btn-1f" id="userFormBtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      
        <script type="text/javascript">
           var batchFormInstance, userFormInstance;
            $(document).ready(function(){
                userFormInstance = $("#userForm").parsley();
            //.parsley()
              batchFormInstance = $("#batchForm").parsley();
                initSwitch();
            });

             function initSwitch(){
                 
                 /*For User Form Pop Up*/
                 new Switchery($("#isActive")[0], $("#isActive").data());     
            }
        </script>
          
<?php include('templates/_footer.php');?> 