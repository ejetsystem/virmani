<style>
    .staffinfo-box {
        box-sizing: border-box;
        position: relative;
        overflow: hidden;
        border: 1px solid #b4b4b4;
        width: 100%;
        box-shadow: 5px 5px 4px rgb(0 0 0 / 12%);
        border-radius: 2px;
        padding: 10px;
        margin-bottom: 15px;
    }
    .staffleft-box {
        float: left;
        padding-right: 10px;
    }
    .staffleft-box img {
        width: 100px;
        height: 100px;
        position: relative;
        z-index: 1;
        background: #fff;
    }
    .staffleft-content {
        /* float: left; */
        overflow: hidden;
    }
    .staffinfo-box h5 {
        display: block;
        margin-bottom: 5px;
        margin-top: 5px;
        font-size: 14px;
        font-weight: 600;
        color: #000;
        text-transform: capitalize;
    }
    .staffinfo-box p {
        margin-bottom: 1px;
        display: block;
        font-size: 11px;
        line-height: normal;
    }
    .overlay3 {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 101%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: rgba(0, 0, 0, 0.69);
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
        border-radius: 4px;
        border: 0px solid rgba(0, 0, 0, 0.69);
    }
    .stafficons {
        display: block;
        text-align: center;
        padding-left: 100px;
    }
    .stafficons a {
        display: inline-block;
        text-align: center;
        color: #fff;
        font-size: 30px;
        padding-right: 8px;
        padding-left: 8px;
        line-height: 125px;
    }
</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content container">
        <div class="box list_area">
            <div class="box-header with-border">
                <?php if (isset($page_title) && $page_title == "Edit"): ?>
                    <h3 class="box-title">Edit patients <a href="<?php echo base_url('admin/patients') ?>" class="pull-right btn btn-light-primary mt-15 btn-sm"><i class="fa fa-angle-left"></i> <?php echo trans('back') ?></a></h3>
                <?php else: ?>
                    <h3 class="box-title">Registrations </h3>
                <?php endif; ?>
                <div class="pull-right">
                    <a href="<?php echo base_url('admin/registration\registrationController/add_staff') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Staff</a>
                    <a href="<?php echo base_url(); ?>clinic-admin/doctor" class="btn btn-primary"><i class="fa fa-plus"></i> Add Doctor</a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="form_title">Search</h4>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <form role="form" action="http://localhost/dental/admin/staff" method="post" class="">
                            <input type="hidden" name="ci_csrf_token" value="">                                        
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group"> 
                                        <label>Role</label><small class="req"> *</small>
                                        <select name="role" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Super Admin">Super Admin</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Receptionist">Receptionist</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Accountant">Accountant</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Pathologist">Pathologist</option>
                                            <option value="Radiologist">Radiologist</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>  
                                </div>
                                <div class="col-sm-5">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <button type="submit" name="search" value="search_filter" class="btn btn-primary border_radius30 checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                     
                    <div class="col-md-4">
                        
                            <form role="form" action="http://localhost/dental/admin/staff" method="post" class="">
                                <input type="hidden" name="ci_csrf_token" value="">          
                                <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label>Search By Keyword</label>
                                        <input type="text" name="search_text" class="form-control" placeholder="Search By Staff ID, Name, Role etc...">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <button type="submit" name="search" value="search_full" class="btn btn-primary border_radius30 checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                                    </div>
                            </form>
                        
                    </div>
                </div>

                <!--Users Information-->
                <div class="clear"></div>
                <hr class="border_hr">
                <h4 class="form_title">Doctors &amp; staff Information</h4>
                <div class="clear"></div>

                <div class="box_usersinfo">  
                    <!-- <div class="box-header ptbnull"></div>  -->
                    <div class="nav-tabs-custom border0">
                        <ul class="nav nav-tabs">

                            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><i class="fa fa-newspaper-o"></i> Card View</a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><i class="fa fa-list"></i> List  View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="download_label">Staff Search</div>
                            <div class="tab-pane table-responsive no-padding" id="tab_2">
                                <table class="table table-striped table-bordered table-hover" id="servertable" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Staff ID</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <!-- <th>Department</th>
                                            <th>Designation</th> -->
                                            <th>Mobile Number</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td>000</td>
                                            <td>--- --</td>
                                            <td></td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>--</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/0" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/0" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>001</td>
                                            <td>Jyoti Chorasia</td>
                                            <td>Doctor</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>7011824804</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/1" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/1" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Admin001</td>
                                            <td>Admin </td>
                                            <td>Super Admin</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td></td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/2" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/2" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>pharmacist001</td>
                                            <td>pharmacist 001</td>
                                            <td>Pharmacist</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td></td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/4" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/4" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>accountant001</td>
                                            <td>Accountant 001</td>
                                            <td>Accountant</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td></td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/5" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/5" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>radiologist001</td>
                                            <td>Radiologist 001</td>
                                            <td>Radiologist</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>963258741</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/6" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/6" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Swetha</td>
                                            <td>Swetha J</td>
                                            <td>Receptionist</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>0000000000</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/7" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/7" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Doctor </td>
                                            <td>Y.k.. VIRMANI</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>9810019636</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/8" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/8" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>121</td>
                                            <td>Lab test</td>
                                            <td>Pathologist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td></td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/9" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/9" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>recept001</td>
                                            <td>reception </td>
                                            <td>Receptionist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>9999999999</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/10" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/10" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>002</td>
                                            <td>Rijuta Virmani</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>9910111507</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/11" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/11" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>005</td>
                                            <td>Sriram Pavani k</td>
                                            <td>Pharmacist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>9874563215</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/14" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/14" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9966</td>
                                            <td>Priya Gupta</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>8800277202</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/21" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/21" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>1560</td>
                                            <td>Anant Malik</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>8938912000</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/25" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/25" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>789654</td>
                                            <td>test test1</td>
                                            <td>Admin</td>
                                           <!--  <td>Department Two</td>
                                            <td>Designation One</td> -->
                                            <td>987456325</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/36" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/36" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>16</td>
                                            <td>sushma ch</td>
                                            <td>Receptionist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>9874563215</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/37" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/37" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>ravi kanth</td>
                                            <td>Receptionist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>998666666655</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/38" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/38" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>18</td>
                                            <td>Sudhakar S</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>9874563215</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/39" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/39" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>19</td>
                                            <td>Sridhars Swamys</td>
                                            <td>Pharmacist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>22222222222</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/41" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/41" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>20</td>
                                            <td>sunitha s</td>
                                            <td>Staff</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td>9874563215</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/42" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/42" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>21</td>
                                            <td>subbarao test</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>111111111111</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/44" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/44" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>22</td>
                                            <td>testseest testset</td>
                                            <td>Receptionist</td>
                                           <!--  <td>Department One</td>
                                            <td>Designation One</td> -->
                                            <td></td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/edit/45" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 

                                                <a href="http://localhost/dental/admin/staff/profile/45" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>



                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>23</td>
                                            <td>doctor D</td>
                                            <td>Doctor</td>
                                           <!--  <td></td>
                                            <td></td> -->
                                            <td>111111111111</td>
                                            <td>


                                                <a href="http://localhost/dental/admin/staff/doctoredit/46" class="btn btn-default btn-xs" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>






                                                </a><a href="http://localhost/dental/admin/staff/doctorprofile/46" class="btn btn-default btn-xs" data-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>




                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>                           
                            <div class="tab-pane active" id="tab_1">
                                <div class="mediarow">   
                                    <div class="row">   
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">--- --</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">000</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">--</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/0"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/0"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/1.jpeg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Jyoti Chorasia</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">001</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">7011824804</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/1"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/1"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Admin </span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Admin001</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Super Admin</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/2"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/2"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">pharmacist 001</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">pharmacist001</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Pharmacist</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/4"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/4"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Accountant 001</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">accountant001</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Accountant</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/5"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/5"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Radiologist 001</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">radiologist001</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">963258741</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Radiologist</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/6"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/6"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/7.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Swetha J</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Swetha</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">0000000000</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Receptionist</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/7"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/7"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/8.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Y.k.. VIRMANI</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor </font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9810019636</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/8"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/8"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Lab test</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">121</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Pathologist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/9"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/9"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">reception </span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">recept001</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9999999999</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Receptionist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/10"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/10"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/11.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Rijuta Virmani</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">002</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9910111507</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/11"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/11"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/14.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Sriram Pavani k</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">005</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9874563215</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Pharmacist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/14"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/14"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/21.jpeg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Priya Gupta</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9966</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">8800277202</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/21"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/21"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/25.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Anant Malik</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">1560</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">8938912000</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/25"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/25"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">test test1</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">789654</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">987456325</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department Two</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Admin</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/36"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/36"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">sushma ch</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">16</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9874563215</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Receptionist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/37"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/37"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">ravi kanth</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">4</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">998666666655</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Receptionist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/38"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/38"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Sudhakar S</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">18</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9874563215</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/39"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/39"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/41.JPG">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Sridhars Swamys</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">19</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">22222222222</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Pharmacist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/41"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/41"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/42.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">sunitha s</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">20</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">9874563215</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Staff</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/42"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/42"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/44.jpg">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">subbarao test</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">21</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">111111111111</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/44"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/44"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">testseest testset</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">22</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Department One</font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Receptionist</span>

<!--   <span data-toggle="tooltip" title="Designation" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Designation One</span> -->
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/profile/45"><i class="fa fa-eye"></i></a>


                                                        <a title="Edit" href="http://localhost/dental/admin/staff/edit/45"><i class=" fa fa-pencil"></i></a>

                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->
                                        <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                            <div class="staffinfo-box">
                                                <div class="staffleft-box">
                                                    <img src="http://localhost/dental/uploads/staff_images/no_image.png">
                                                </div>
                                                <div class="staffleft-content">
                                                    <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">doctor D</span></h5>
                                                    <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">23</font></p>
                                                    <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">111111111111</font></p>
                                                    <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                    <p class="staffsub">
                                                        <span data-toggle="tooltip" title="Role" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Doctor</span>
                                                    </p>
                                                </div>
                                                <div class="overlay3">
                                                    <div class="stafficons">
                                                        <a title="Show" href="http://localhost/dental/admin/staff/doctorprofile/46"><i class="fa fa-eye"></i></a>
                                                        <a title="Edit" href="http://localhost/dental/admin/staff/doctoredit/46"><i class=" fa fa-pencil"></i></a>
                                                    </div>




                                                </div>
                                            </div>
                                        </div><!--./col-md-3-->


                                    </div><!--./col-md-3-->







                                </div><!--./row-->  
                            </div><!--./mediarow-->  


                        </div>                                                          
                    </div>  
                </div>                                                         


                <!--Users Information-->








                <h4 class="form_title">Dealers Information</h4>

                <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                        <div class="staffinfo-box">
                            <div class="staffleft-box">
                                <img src="http://localhost/dental/uploads/staff_images/22.jpg">
                            </div>
                            <div class="staffleft-content">
                                <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Test Complany </span></h5>
                                <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Owner Name: own1</font></p>
                                <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Phone: 9874563215</font></p>
                                <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Email:vallik@gmail.com</font> 
                                </p>

                                <p class="staffsub">

                                    <span data-toggle="tooltip" title="Dealer" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Dealer</span>

                                </p>


                            </div>
                            <div class="overlay3">
                                <div class="stafficons">
                                    <a title="Show" href="http://localhost/dental/admin/staff/dealerprofile/22"><i class="fa fa-eye"></i></a>

                                    <a title="Edit" href="http://localhost/dental/admin/staff/dealeredit/22"><i class=" fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--./col-md-3-->
                    <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                        <div class="staffinfo-box">
                            <div class="staffleft-box">
                                <img src="http://localhost/dental/uploads/staff_images/23.jpg">
                            </div>
                            <div class="staffleft-content">
                                <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Spancer </span></h5>
                                <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Owner Name: testes</font></p>
                                <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Phone: 9874563215</font></p>
                                <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Email:sample@gmail.com</font> 
                                </p>

                                <p class="staffsub">

                                    <span data-toggle="tooltip" title="Dealer" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Dealer</span>

                                </p>


                            </div>
                            <div class="overlay3">
                                <div class="stafficons">
                                    <a title="Show" href="http://localhost/dental/admin/staff/dealerprofile/23"><i class="fa fa-eye"></i></a>

                                    <a title="Edit" href="http://localhost/dental/admin/staff/dealeredit/23"><i class=" fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--./col-md-3-->
                    <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                        <div class="staffinfo-box">
                            <div class="staffleft-box">
                                <img src="http://localhost/dental/uploads/staff_images/24.jpg">
                            </div>
                            <div class="staffleft-content">
                                <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">testcccc </span></h5>
                                <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Owner Name: ccccccc</font></p>
                                <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Phone: 45325525</font></p>
                                <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Email:ttetete@gmail.com</font> 
                                </p>

                                <p class="staffsub">

                                    <span data-toggle="tooltip" title="Dealer" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing">Dealer</span>

                                </p>


                            </div>
                            <div class="overlay3">
                                <div class="stafficons">
                                    <a title="Show" href="http://localhost/dental/admin/staff/dealerprofile/24"><i class="fa fa-eye"></i></a>

                                    <a title="Edit" href="http://localhost/dental/admin/staff/dealeredit/24"><i class=" fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--./col-md-3-->



                </div>
            </div>

        </div>


    </section>
</div>


