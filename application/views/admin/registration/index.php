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
    .staffsub{
        background-color: dodgerblue;
        color: white;
        border-radius: 4px;
        padding: 1px 10px;
        font-size: 14px;
        text-transform: capitalize;
    }
    .staffinfo-box:hover .overlay3, .fadeoverlay:hover .overlay3 {
        opacity: 1;
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
                    <h4 class="form_title">Search</h4>
                    <form action="<?php echo base_url('clinic-admin/registered-staff'); ?>" method="POST">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group"> 
                                    <label>Role</label><span class="text-danger"> *</span>
                                    <select name="role" class="form-control" required id="role">
                                        <option value="">Select</option>
                                        <option <?php echo ($this->input->post('role')=='staff') ? 'selected' : ''; ?> value="staff">Staff</option>
                                        <option <?php echo ($this->input->post('role')=='doctor') ? 'selected' : ''; ?> value="doctor">Doctor</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Search By Keyword</label>
                                    <input type="text" name="search_text" value="<?php echo $this->input->post('search_text') ?>" class="form-control" placeholder="Search By ID, Name">
                                </div>
                            </div>

                            <div class="col-sm-3 mt-25">
                                <div class="form-group">
                                    <button type="submit" name="search" value="search_full" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>

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
                                    <table class="table datatable dataTable no-footer table-striped table-bordered table-hover" id="servertable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Staff ID</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Mobile Number</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(count($staff_doctors)>0){
                                                foreach ($staff_doctors as $key => $list){
                                                    ?>
                                                    <tr>
                                                        <th><?php echo $list['id']; ?></th>
                                                        <th><?php echo $list['name']; ?></th>
                                                        <th class="text-capitalize"><?php echo $list['role']; ?></th>
                                                        <th><?php echo $list['mobile']; ?></th>
                                                        <th>
                                                            <?php  
                                                            if($list['role']=='doctor'){
                                                                echo "<a title='Show' href='".base_url('clinic-admin/registration/view/doctor/').$list['id']."'><i class='fa fa-eye'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;";
                                                                echo "<a title='Edit' href='".base_url('clinic-admin/doctor/edit/').$list['id']."'><i class='fa fa-pencil'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;";
                                                            }
                                                            elseif($list['role']=='staff'){
                                                                echo "<a title='Show' href='".base_url('clinic-admin/registration/view/staff/').$list['id']."'><i class='fa fa-eye'></i></a> &nbsp;&nbsp;&nbsp;&nbsp;";
                                                                echo "<a title='Edit' href='".base_url('clinic-admin/staff/edit/').$list['id']."'><i class='fa fa-pencil'></i></a> &nbsp;&nbsp;&nbsp;&nbsp;";
                                                            }
                                                            else{

                                                            }
                                                            ?>
                                                        </th>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            else{
                                                echo "<tr><th colspan='5' class='text-center'><h4>Data Not Found</h4></th></tr>";
                                            }
                                            ?>

                                        </tbody>

                                    </table>
                                </div>                           
                                <div class="tab-pane active" id="tab_1">
                                    <div class="mediarow">   
                                        <div class="row">

                                            <?php
                                            if(count($staff_doctors)>0){
                                                foreach ($staff_doctors as $key => $list){
                                                    $img = (!empty($list['thumb'])) ? base_url($list['thumb']) : base_url('uploads/doctor-thumbnail/no_medicine_image.png')
                                                    ?>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 img_div_modal">
                                                        <div class="staffinfo-box">
                                                            <div class="staffleft-box">
                                                                <img src="<?php echo $img; ?>">
                                                            </div>
                                                            <div class="staffleft-content">
                                                                <h5><span data-toggle="tooltip" title="Name" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"><?php echo $list['name']; ?></span></h5>
                                                                <p><font data-toggle="tooltip" title="Employee Id" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"><?php echo $list['id']; ?></font></p>
                                                                <p><font data-toggle="tooltip" title="Contact Number" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"><?php echo $list['mobile']; ?></font></p>
                                                                <p><font data-toggle="tooltip" title="Location" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"></font><font data-toggle="tooltip" title="Department" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> </font></p>
                                                                <span class="staffsub "><?php echo $list['role']; ?></span>

                                                            </div>
                                                            <div class="overlay3">
                                                                <div class="stafficons">
                                                                    <?php  
                                                                    if($list['role']=='doctor'){
                                                                        echo "<a title='Show' href='".base_url('clinic-admin/registration/view/doctor/').$list['id']."'><i class='fa fa-eye'></i></a>";
                                                                        echo "<a title='Edit' href='".base_url('clinic-admin/doctor/edit/').$list['id']."'><i class='fa fa-pencil'></i></a>";
                                                                    }
                                                                    elseif($list['role']=='staff'){
                                                                        echo "<a title='Show' href='".base_url('clinic-admin/registration/view/staff/').$list['id']."'><i class='fa fa-eye'></i></a>";
                                                                        echo "<a title='Edit' href='".base_url('clinic-admin/staff/edit/').$list['id']."'><i class='fa fa-pencil'></i></a>";
                                                                    }
                                                                    else{

                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--./col-md-3-->
                                                    <?php
                                                }
                                            }
                                            else{
                                                echo "<h4>Data Not Found</h4>";
                                            }
                                            ?>


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


