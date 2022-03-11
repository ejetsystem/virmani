 
<div class="table-responsive" id="loadtreatmentinfo">
    <div class="row mb_2  mt_5">
        <div class="col-md-3">
            <h5><strong>Completed Jobs : 0</strong></h5>
        </div>
        <div class="col-md-2">
            <h5><strong>Pending Jobs : 0</strong></h5>
        </div>
        <div class="col-md-7">
            <a href="#" class="btn btn-primary btn-sm border_radius5 mb_5">Add Treatment Plan</a>

            <a class="btn btn-primary btn-sm border_radius5" id="bt" onclick="toggle(this)">Treatment Plan  History</a>

            <a class="btn btn-primary btn-sm border_radius5 mb_5" id="bt" onclick="toggle1(this)">All Complaints</a>

            <a href="<?php echo base_url(); ?>admin/patient/viewtreatmentplan/123" class="btn btn-primary btn-sm border_radius5 mb_5">Print</a>
        </div>


    </div>
    <div class="table-responsive" id="loadtoothinfo_treatment">
        <h3 class="bx-title ch_bt" style="color: #f37171;">Chief Complaint </h3> <a href="#" onclick="addcomp('123', 'chief_complaint')" class="btn btn-primary btn-sm border_radius5 mb_5">Add Complaint</a>
        <div id="show_tbl" style="display: none;">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons btn-group btn-group2">               <a class="btn btn-default dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="fa fa-files-o"></i></span></a> <a class="btn btn-default dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="fa fa-file-excel-o"></i></span></a> <a class="btn btn-default dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fa fa-file-text-o"></i></span></a> <a class="btn btn-default dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="fa fa-file-pdf-o"></i></span></a> <a class="btn btn-default dt-button buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fa fa-print"></i></span></a> <a class="btn btn-default dt-button buttons-collection buttons-colvis" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Columns"><span><i class="fa fa-columns"></i></span></a> </div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="DataTables_Table_0"></label></div><table class="table table-striped table-bordered table-hover example dataTable no-footer dtr-inline" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Tooth Number: activate to sort column ascending">Tooth Number</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Notes &amp;amp; Diagnosis: activate to sort column ascending">Notes &amp; Diagnosis</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Doctor: activate to sort column ascending">Doctor</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Treatment Code: activate to sort column ascending">Treatment Code</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="App Estimate: activate to sort column ascending">App Estimate</th><th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                    </thead>
                    <tbody> 
                        <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table <br> <br><img src="https://smart-hospital.in/shappresource/images/addnewitem.svg" width="150"><br><br> <span class="text-success bolds"><i class="fa fa-arrow-left"></i> Add new record or search with different criteria.</span></td></tr></tbody>
                </table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Records: 0 to 0 of 0</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous"><i class="fa fa-angle-left"></i></a><span></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i class="fa fa-angle-right"></i></a></div></div>

            <a href="#" onclick="addcomp('123', 'chief_complaint')" class="btn btn-primary btn-sm border_radius5 mb_5">Add Complaint</a><br>
        </div>
        <br>
        <h3 class="bx-title ch_bt" style="color: #8aef8e;">Other Findings</h3><a href="#" onclick="addcomp('123', 'other_findings')" class="btn btn-primary btn-sm border_radius5 mb_5">Add Other Findings</a>
        <div id="show_tbl1" style="display: none;">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons btn-group btn-group2">               <a class="btn btn-default dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="fa fa-files-o"></i></span></a> <a class="btn btn-default dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="fa fa-file-excel-o"></i></span></a> <a class="btn btn-default dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fa fa-file-text-o"></i></span></a> <a class="btn btn-default dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="fa fa-file-pdf-o"></i></span></a> <a class="btn btn-default dt-button buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fa fa-print"></i></span></a> <a class="btn btn-default dt-button buttons-collection buttons-colvis" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Columns"><span><i class="fa fa-columns"></i></span></a> </div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="DataTables_Table_0"></label></div><table class="table table-striped table-bordered table-hover example dataTable no-footer dtr-inline" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Tooth Number: activate to sort column ascending">Tooth Number</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Notes &amp;amp; Diagnosis: activate to sort column ascending">Notes &amp; Diagnosis</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Doctor: activate to sort column ascending">Doctor</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Treatment Code: activate to sort column ascending">Treatment Code</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="App Estimate: activate to sort column ascending">App Estimate</th><th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                    </thead>
                    <tbody> 

                        <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table <br> <br><img src="https://smart-hospital.in/shappresource/images/addnewitem.svg" width="150"><br><br> <span class="text-success bolds"><i class="fa fa-arrow-left"></i> Add new record or search with different criteria.</span></td></tr></tbody>
                </table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Records: 0 to 0 of 0</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous"><i class="fa fa-angle-left"></i></a><span></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i class="fa fa-angle-right"></i></a></div></div>


            <a href="#" onclick="addcomp('123', 'other_findings')" class="btn btn-primary btn-sm border_radius5 mb_5">Add Other Findings</a><br>
        </div><br>
        <!-- Existing -->

        <h3 class="bx-title ch_bt" style="color: #87CEEB;">Existing</h3><a href="#" onclick="addcomp('123', 'existing')" class="btn btn-primary btn-sm border_radius5 mb_5">Add Existing</a>

        <div id="show_tbl2" style="display: none;">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons btn-group btn-group2">               <a class="btn btn-default dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="fa fa-files-o"></i></span></a> <a class="btn btn-default dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="fa fa-file-excel-o"></i></span></a> <a class="btn btn-default dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fa fa-file-text-o"></i></span></a> <a class="btn btn-default dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="fa fa-file-pdf-o"></i></span></a> <a class="btn btn-default dt-button buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fa fa-print"></i></span></a> <a class="btn btn-default dt-button buttons-collection buttons-colvis" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Columns"><span><i class="fa fa-columns"></i></span></a> </div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="DataTables_Table_0"></label></div><table class="table table-striped table-bordered table-hover example dataTable no-footer dtr-inline" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Tooth Number: activate to sort column ascending">Tooth Number</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Notes &amp;amp; Diagnosis: activate to sort column ascending">Notes &amp; Diagnosis</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Doctor: activate to sort column ascending">Doctor</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Treatment Code: activate to sort column ascending">Treatment Code</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="App Estimate: activate to sort column ascending">App Estimate</th><th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                    </thead>
                    <tbody> 

                        <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table <br> <br><img src="https://smart-hospital.in/shappresource/images/addnewitem.svg" width="150"><br><br> <span class="text-success bolds"><i class="fa fa-arrow-left"></i> Add new record or search with different criteria.</span></td></tr></tbody>
                </table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Records: 0 to 0 of 0</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous"><i class="fa fa-angle-left"></i></a><span></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i class="fa fa-angle-right"></i></a></div></div>

            <a href="#" onclick="addcomp('123', 'existing')" class="btn btn-primary btn-sm border_radius5 mb_5">Add Existing</a>

            <!-- End -->
        </div>

        <div id="loaddata">
            <div id="loadall" style="display:none;"><br> 
                <h4 class="form_title">All Complaints</h4>


                <div class="c_outer">  <div class="c_box"><p><span></span>Chief Complaints</p></div>  <div class="c_box2"><p><span></span>Other Findings</p></div><div class="c_box3"><p><span></span>Existing</p></div></div>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons btn-group btn-group2">               <a class="btn btn-default dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Copy"><span><i class="fa fa-files-o"></i></span></a> <a class="btn btn-default dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Excel"><span><i class="fa fa-file-excel-o"></i></span></a> <a class="btn btn-default dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="CSV"><span><i class="fa fa-file-text-o"></i></span></a> <a class="btn btn-default dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="PDF"><span><i class="fa fa-file-pdf-o"></i></span></a> <a class="btn btn-default dt-button buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Print"><span><i class="fa fa-print"></i></span></a> <a class="btn btn-default dt-button buttons-collection buttons-colvis" tabindex="0" aria-controls="DataTables_Table_0" href="#" title="Columns"><span><i class="fa fa-columns"></i></span></a> </div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="DataTables_Table_0"></label></div><table class="table table-striped table-bordered table-hover example dataTable no-footer dtr-inline" cellspacing="0" width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 100%;">
                        <thead>
                            <tr role="row"><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Tooth Number: activate to sort column ascending">Tooth Number</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Notes &amp;amp; Diagnosis: activate to sort column ascending">Notes &amp; Diagnosis</th><th width="25%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Doctor: activate to sort column ascending">Doctor</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Treatment Code: activate to sort column ascending">Treatment Code</th><th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="App Estimate: activate to sort column ascending">App Estimate</th><th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 0px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                        </thead>
                        <tbody> 

                            <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table <br> <br><img src="https://smart-hospital.in/shappresource/images/addnewitem.svg" width="150"><br><br> <span class="text-success bolds"><i class="fa fa-arrow-left"></i> Add new record or search with different criteria.</span></td></tr></tbody>
                    </table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Records: 0 to 0 of 0</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous"><i class="fa fa-angle-left"></i></a><span></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i class="fa fa-angle-right"></i></a></div></div>
            </div>
        </div>

    </div>


    <div class="clear"></div>
    <div class="col-md-12 mb25">
        <div class="col-md-6">
        </div>
        <div class="col-md-6 pull-right">
                            <!-- <a href="#" class="btn btn-primary border_radius30" data-toggle="tooltip" title="" onclick="getRecord_notes()" data-original-title=""><i class="fa fa-sticky-note-o"></i> Add Notes</a> -->

                    <!-- <a href="#" class="btn btn-primary border_radius30" data-toggle="tooltip" title="" onclick="getRecord_chiefcomplaint()" data-original-title=""><i class="fa fa-sticky-note-o"></i> Add Chief Complaint</a> -->

        </div>
    </div>

</div>

<div class="col-md-12" id="disp_div">
    <div class="col-md-12">
        <h4 class="form_title">Treatment Plan</h4>
        <div class="clear"></div>
        <hr class="border_hr">
    </div>

    <div class="row">

        <div class="col-md-5" id="loadteeeth">
            <label>Tooth Notation</label>
            <select class="form-control" name="teethcat_id_treatment" id="teethcat_id_treatment" onchange="gettecchnumbers_treatment(this.value)">
                <?php
                print_r($teethar_cat);
                foreach ($teethar_cat as $key => $teetharcat_data) {
                    if ($teetharcat_data->id <= 5) {
                        ?>
                        <option value="<?php echo $teetharcat_data->id; ?>" <?php if ($teetharcat_data->id == '4') {
                    echo "selected='selected'";
                } ?>><?php echo $teetharcat_data->teeth_category_name; ?></option>
                    <?php
                    }
                }
                ?>                    
            </select>
        </div>
        <div class="col-md-6 mt-20">
            <input type="checkbox" name="" value="on" id="chkdiv" onclick="getDatavalue(this.value)"> Milk Teeth<br>
        </div>
    </div>

    <style type="text/css">



        .edbts {  float: right; color: #fff !important;}
        .acd {  background: #8f3f00;}
        .com-job-box { width: 100%; float: right; text-align: right;}
        .flt { float: right; }
        .dlt{background: #b82a41;}
        .com-job-box p{text-align: left;}
        .com-job-box p {  word-break: break-all;  width: 76%;   float: left;}
        /*.tre_box p{width: 84% !important;}*/

        span.tre-code {
            color: #eb1c24;
        }
        p.texp {
            font-weight: 600;
            margin-top: 13px;
        }

        span.pl_box {  float: right;   padding-right: 0px;}
        span.pl_box.senf {    padding-right: 20px;}

        .worktra i {
            color: #000 !important;
            border: 0 !important;
            background: none !important;
            box-shadow: none !important;
            background-color: transparent !important;
        }


        .p0 {
            padding: 0;
        }

        #co18ntainer {margin: 0 auto;}

        ul#continents1 {  list-style: none;  width: 780px;  height: 520px;  position:
                              relative;  background: url(<?php echo base_url(); ?>images/teeth.jpg)
                              no-repeat 0 0;  background-size: contain;   background-position: center
                              center;}

        ul#continents1_new {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/teeth.jpg) no-repeat 0 0;  background-size: contain;   background-position: center center;}

        ul#continents2 {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/teethordimg1.jpg) no-repeat 0 0;  background-size: contain;   background-position: center center;}

        ul#continents3 {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/teethordimg2.jpg) no-repeat 0 0;  background-size: contain;   background-position: center center;}


        ul#continents1 li {position: absolute;}
        ul#continents1_new li {position: absolute;}
        ul#continents2 li {position: absolute;}
        ul#continents3 li {position: absolute;}

        .teethord1 { width: 130px;height: 247px;top: 169px;left: 59px;background: url(<?php echo base_url(); ?>teeth/images/18.png) no-repeat 0 0;background-size: 41%;}

        .teethord1:hover{background: url(<?php echo base_url(); ?>teeth/images/18.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord2 { width: 150px;height: 247px;top: 171px;left: 99px;background: url(<?php echo base_url(); ?>teeth/images/17.png) no-repeat 0 0;background-size: 41%;} 

        .teethord2:hover{background: url(<?php echo base_url(); ?>teeth/images/17.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}
        .teethord3 {width: 150px;height: 247px;top: 170px;left: 151px;background: url(<?php echo base_url(); ?>teeth/images/16.png) no-repeat 0 0;background-size: 41%;}
        .teethord3:hover{background: url(<?php echo base_url(); ?>teeth/images/16.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}
        .teethord4 { width: 150px; height: 247px;top: 173px;left: 197px;background: url(<?php echo base_url(); ?>teeth/images/15.png) no-repeat 0 0; background-size: 41%;}
        .teethord4:hover{background: url(<?php echo base_url(); ?>teeth/images/15.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}
        .teethord5 { width: 150px; height: 247px; top: 169px; left: 230px; background: url(<?php echo base_url(); ?>teeth/images/14.png) no-repeat 0 0;background-size: 41%;}
        .teethord5:hover{background: url(<?php echo base_url(); ?>teeth/images/14.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}
        .teethord6 {width: 150px;height: 247px;top: 156px;left: 262px;background: url(<?php echo base_url(); ?>teeth/images/13.png) no-repeat 0 0;background-size: 46%;}
        .teethord6:hover{background: url(<?php echo base_url(); ?>teeth/images/13.png) no-repeat 0 0; background-size: 46%;filter: grayscale(100%);}

        .teethord7 {width: 150px;height: 247px;top: 171px;left: 302px;background: url(<?php echo base_url(); ?>teeth/images/12.png) no-repeat 0 0;background-size: 41%;}
        .teethord7:hover{background: url(<?php echo base_url(); ?>teeth/images/12.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord8 {width: 150px;height: 247px;top: 169px;left: 338px;background: url(<?php echo base_url(); ?>teeth/images/11.png) no-repeat 0 0;background-size: 41%;}
        .teethord8:hover{background: url(<?php echo base_url(); ?>teeth/images/11.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord9 {width: 150px;height: 247px;top: 167px;left: 377px;background: url(<?php echo base_url(); ?>teeth/images/21.png) no-repeat 0 0;background-size: 41%;}

        .teethord9:hover{background: url(<?php echo base_url(); ?>teeth/images/21.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}


        .teethord10 { width: 150px; height: 247px; top: 170px;  left: 413px;   background: url(<?php echo base_url(); ?>teeth/images/22.png) no-repeat 0 0;   background-size: 41%;}

        .teethord10:hover{background: url(<?php echo base_url(); ?>teeth/images/22.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord11 {  width: 150px;  height: 247px;  top: 161px;  left: 446px;   background: url(<?php echo base_url(); ?>teeth/images/23.png) no-repeat 0 0;   background-size: 44%;}

        .teethord11:hover{background: url(<?php echo base_url(); ?>teeth/images/23.png) no-repeat 0 0; background-size: 44%;filter: grayscale(100%);}


        .teethord12 { width: 150px;  height: 247px; top: 169px; left: 483px; background: url(<?php echo base_url(); ?>teeth/images/24.png) no-repeat 0 0;   background-size: 41%;}

        .teethord12:hover{background: url(<?php echo base_url(); ?>teeth/images/24.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord13 { width: 150px; height: 247px; top: 172px; left: 518px;  background: url(<?php echo base_url(); ?>teeth/images/25.png) no-repeat 0 0;   background-size: 41%;}

        .teethord13:hover{background: url(<?php echo base_url(); ?>teeth/images/25.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord14 { width: 150px; height: 247px; top: 171px; left: 563px; background: url(<?php echo base_url(); ?>teeth/images/26.png) no-repeat 0 0;  background-size: 40%;}

        .teethord14:hover{background: url(<?php echo base_url(); ?>teeth/images/26.png) no-repeat 0 0; background-size: 40%;filter: grayscale(100%);}

        .teethord15 { width: 150px; height: 247px;top: 171px; left: 614px;  background: url(<?php echo base_url(); ?>teeth/images/27.png) no-repeat 0 0;    background-size: 41%;}

        .teethord15:hover{background: url(<?php echo base_url(); ?>teeth/images/27.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord16 { width: 150px; height: 247px; top: 171px; left: 658px;  background: url(<?php echo base_url(); ?>teeth/images/28.png) no-repeat 0 0;   background-size: 41%;}

        .teethord16:hover{background: url(<?php echo base_url(); ?>teeth/images/28.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord17 { width: 150px; height: 247px; top: 258px;  left: 69px;  background: url(<?php echo base_url(); ?>teeth/images/48.png) no-repeat 0 0;    background-size: 41%;}

        .teethord17:hover{background: url(<?php echo base_url(); ?>teeth/images/48.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord18 { width: 150px; height: 247px;  top: 255px;  left: 116px; background: url(<?php echo base_url(); ?>teeth/images/47.png) no-repeat 0 0;   background-size: 40%;}

        .teethord18:hover{background: url(<?php echo base_url(); ?>teeth/images/47.png) no-repeat 0 0; background-size: 40%;filter: grayscale(100%);}

        .teethord19 { width: 150px; height: 247px;  top: 261px;   left: 165px;  background: url(<?php echo base_url(); ?>teeth/images/46.png) no-repeat 0 0;   background-size: 40%;}

        .teethord19:hover{background: url(<?php echo base_url(); ?>teeth/images/46.png) no-repeat 0 0; background-size: 40%;filter: grayscale(100%);}

        .teethord20 { width: 150px; height: 247px;  top: 268px;  left: 209px;  background: url(<?php echo base_url(); ?>teeth/images/45.png) no-repeat 0 0;   background-size: 41%;}

        .teethord20:hover{background: url(<?php echo base_url(); ?>teeth/images/45.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord21 { width: 150px;  height: 247px; top: 269px;  left: 245px;  background: url(<?php echo base_url(); ?>teeth/images/44.png) no-repeat 0 0;   background-size: 43%;}

        .teethord21:hover{background: url(<?php echo base_url(); ?>teeth/images/44.png) no-repeat 0 0; background-size: 43%;filter: grayscale(100%);}

        .teethord22 { width: 150px;  height: 247px;  top: 267px;  left: 280px;  background: url(<?php echo base_url(); ?>teeth/images/43.png) no-repeat 0 0;   background-size: 47%;}

        .teethord22:hover{background: url(<?php echo base_url(); ?>teeth/images/43.png) no-repeat 0 0; background-size:47%;filter: grayscale(100%);}

        .teethord23 { width: 150px; height: 247px; top: 266px;  left: 317px;   background: url(<?php echo base_url(); ?>teeth/images/42.png) no-repeat 0 0;    background-size: 41%;}

        .teethord23:hover{background: url(<?php echo base_url(); ?>teeth/images/42.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord24 { width: 150px; height: 247px; top: 268px; left: 344px; background: url(<?php echo base_url(); ?>teeth/images/41.png) no-repeat 0 0;   background-size: 41%;}

        .teethord24:hover{background: url(<?php echo base_url(); ?>teeth/images/41.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord25 { width: 150px; height: 247px;  top: 268px;  left: 372px;    background: url(<?php echo base_url(); ?>teeth/images/31.png) no-repeat 0 0;    background-size: 41%;}

        .teethord25:hover{background: url(<?php echo base_url(); ?>teeth/images/31.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord26 { width: 150px; height: 247px; top: 265px; left: 399px; background: url(<?php echo base_url(); ?>teeth/images/32.png) no-repeat 0 0;    background-size: 41%;}

        .teethord26:hover{background: url(<?php echo base_url(); ?>teeth/images/32.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord27 { width: 150px;  height: 247px; top: 268px;  left: 427px;    background: url(<?php echo base_url(); ?>teeth/images/33.png) no-repeat 0 0;   background-size: 47%;}

        .teethord27:hover{background: url(<?php echo base_url(); ?>teeth/images/33.png) no-repeat 0 0; background-size: 47%;filter: grayscale(100%);}

        .teethord28 { width: 150px; height: 247px;  top: 268px;  left: 467px;  background: url(<?php echo base_url(); ?>teeth/images/34.png) no-repeat 0 0;  background-size: 45%;}

        .teethord28:hover{background: url(<?php echo base_url(); ?>teeth/images/34.png) no-repeat 0 0; background-size: 45%;filter: grayscale(100%);}

        .teethord29 { width: 150px;  height: 247px;  top: 267px;  left: 507px;   background: url(<?php echo base_url(); ?>teeth/images/35.png) no-repeat 0 0;    background-size: 41%;}

        .teethord29:hover{background: url(<?php echo base_url(); ?>teeth/images/35.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord30 {  width: 150px;  height: 247px;  top: 259px;  left: 551px;    background: url(<?php echo base_url(); ?>teeth/images/36.png) no-repeat 0 0;   background-size: 41%;}

        .teethord30:hover{background: url(<?php echo base_url(); ?>teeth/images/36.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}


        .teethord31 { width: 150px;  height: 247px;  top: 254px;  left: 600px;   background: url(<?php echo base_url(); ?>teeth/images/37.png) no-repeat 0 0;   background-size: 41%;}

        .teethord31:hover{background: url(<?php echo base_url(); ?>teeth/images/37.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}

        .teethord32 { width: 150px;  height: 247px;  top: 258px;  left: 647px;   background: url(<?php echo base_url(); ?>teeth/images/38.png) no-repeat 0 0;   background-size: 41%;}

        .teethord32:hover{background: url(<?php echo base_url(); ?>teeth/images/38.png) no-repeat 0 0; background-size: 41%;filter: grayscale(100%);}


        ul#continents1 li a  {
            display: block;
            outline: none;
            height: 100%;
        }

        ul#continents1_new li a  {
            display: block;
            outline: none;
            height: 100%;
        }

        ul#continents2 li a  {
            display: block;
            outline: none;
            height: 100%;
        }
        ul#continents3 li a  {
            display: block;
            outline: none;
            height: 100%;
        }
        ul#continents1_teeth li a {
            height: 100%;
            display: block;
            outline: none;
        }
        ul#continents2_teeth li a {
            height: 100%;
            display: block;
            outline: none;
        }
        ul#continents1_new_teeth li a {
            height: 100%;
            display: block;
            outline: none;
        }

        ul#continents1_new_teeth li a {
            height: 100%;
            display: block;
            outline: none;
        }

    </style>
    <div id="container">


        <ul id="continents1">

<?php foreach ($teeths as $key => $teeth) { ?>
                <li class="teethord<?php echo $key + 1; ?>"><a href="javascript://" title="" onclick="getRecord_teechinfo('<?php echo $teeth->id; ?>', '<?php echo $teeth->teeth_note; ?>', '<?php echo $teeth->image; ?>')" data-original-title="<?php echo $teeth->teeth_note; ?>"></a></li>
<?php } ?>
        </ul>


        <div id="show_toothnumber" style="display: none"></div><div id="shw_tooth_number"></div>

        <div class="row_">
            <form id="form_addnotes_new" action="" accept-charset="utf-8" method="post" class="ptt10" enctype="multipart/form-data">
                <input type="hidden" name="patient_id" id="patient_id" value="123">
                <input type="hidden" name="teethsid" id="teethsid" value="">  
                <input type="hidden" name="toothinfo_ids" id="tooths_ids" value="">
                <input type="hidden" name="trtmnts_ids" id="trtmnts_ids" value="">
                <input type="hidden" name="trtypes" id="trtypes" value="">
                <input type="hidden" name="addnew" id="addnew" value="">

                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Notes &amp; Diagnosis</label>
                        <textarea class="form-control" name="toth_note" id="tooths_notes" rows="8" required=""></textarea> 
                    </div>
                </div> 
                <div class="col-sm-12">
                    <div class="align-center">                        
                        <button type="submit" class="btn btn-primary" value="save">Save</button>
                    </div>
                </div>
            </form>    
        </div><!--  
      </div>  -->



    </div>






    <style type="text/css">

        #container {     margin: 0 auto;}
        ul#continents1_teeth {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/child_teeth.jpg) no-repeat 0 0;  background-size: 100%;   background-position: center center;}

        ul#continents1_new_teeth {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/child_teeth.jpg) no-repeat 0 0;  background-size: 100%;   background-position: center center;}

        ul#continents2_teeth {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/teethchildimg1.jpg) no-repeat 0 0;  background-size: 100%;   background-position: center center;}

        ul#continents3_teeth {  list-style: none;  width: 780px;  height: 520px;  position: relative;  background: url(<?php echo base_url(); ?>images/teethchildimg2.jpg) no-repeat 0 0;  background-size: 100%;   background-position: center center;}

        ul#continents1_teeth li {position: absolute;}
        ul#continents1_new_teeth li {position: absolute;}
        ul#continents2_teeth li {position: absolute;}
        ul#continents3_teeth li {position: absolute;}

        .teeth_child1 { width: 120px;height: 150px;top: 120px;left: 93px;background: url(<?php echo base_url(); ?>teeth/images/55.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child1:hover{background: url(<?php echo base_url(); ?>teeth/images/55.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child2 { width: 120px;height: 150px;top: 120px;left: 161px;background: url(<?php echo base_url(); ?>teeth/images/54.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child2:hover{background: url(<?php echo base_url(); ?>teeth/images/54.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child3 { width: 120px;height: 150px;top: 115px;left: 204px;background: url(<?php echo base_url(); ?>teeth/images/53.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child3:hover{background: url(<?php echo base_url(); ?>teeth/images/53.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child4 { width: 120px;height: 150px;top: 121px;left: 241px;background: url(<?php echo base_url(); ?>teeth/images/52.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child4:hover{background: url(<?php echo base_url(); ?>teeth/images/52.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child5 { width: 120px;height: 150px;top: 116px;left: 283px;background: url(<?php echo base_url(); ?>teeth/images/51.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child5:hover{background: url(<?php echo base_url(); ?>teeth/images/51.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child6 { width: 120px;height: 150px;top: 116px;left: 325px;background: url(<?php echo base_url(); ?>teeth/images/61.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child6:hover{background: url(<?php echo base_url(); ?>teeth/images/61.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child7 { width: 120px;height: 150px;top: 118px;left: 370px;background: url(<?php echo base_url(); ?>teeth/images/62.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child7:hover{background: url(<?php echo base_url(); ?>teeth/images/62.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}


        .teeth_child8 { width: 120px;height: 150px;top: 118px;left: 409px;background: url(<?php echo base_url(); ?>teeth/images/63.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child8:hover{background: url(<?php echo base_url(); ?>teeth/images/63.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child9 { width: 120px;height: 150px;top: 121px;left: 452px;background: url(<?php echo base_url(); ?>teeth/images/64.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child9:hover{background: url(<?php echo base_url(); ?>teeth/images/64.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child10 { width: 120px;height: 150px;top: 120px;left: 520px;background: url(<?php echo base_url(); ?>teeth/images/65.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child10:hover{background: url(<?php echo base_url(); ?>teeth/images/65.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child11 { width: 120px;height: 150px;top: 277px;left: 101px;background: url(<?php echo base_url(); ?>teeth/images/85.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child11:hover{background: url(<?php echo base_url(); ?>teeth/images/85.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child12 { width: 120px;height: 150px;top: 270px;left: 177px;background: url(<?php echo base_url(); ?>teeth/images/84.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child12:hover{background: url(<?php echo base_url(); ?>teeth/images/84.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}


        .teeth_child13 { width: 120px;height: 150px;top: 280px;left: 223px;background: url(<?php echo base_url(); ?>teeth/images/83.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child13:hover{background: url(<?php echo base_url(); ?>teeth/images/83.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child14 { width: 120px;height: 150px;top: 273px;left: 260px;background: url(<?php echo base_url(); ?>teeth/images/82.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child14:hover{background: url(<?php echo base_url(); ?>teeth/images/82.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child15 { width: 120px;height: 150px;top: 269px;left: 291px;background: url(<?php echo base_url(); ?>teeth/images/81.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child15:hover{background: url(<?php echo base_url(); ?>teeth/images/81.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

        .teeth_child16 { width: 120px;height: 150px;top: 269px;left: 321px;background: url(<?php echo base_url(); ?>teeth/images/71.png) no-repeat 0 0;background-size: 92%;}
        .teeth_child16:hover{background: url(<?php echo base_url(); ?>teeth/images/71.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);

                             .teeth_child17 { width: 120px;height: 150px;top: 272px;left: 352px;background: url(<?php echo base_url(); ?>teeth/images/72.png) no-repeat 0 0;background-size: 92%;}

                             .teeth_child17:hover{background: url(<?php echo base_url(); ?>teeth/images/72.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

                             .teeth_child18 { width: 120px;height: 150px;top: 279px;left: 389px;background: url(<?php echo base_url(); ?>teeth/images/73.png) no-repeat 0 0;background-size: 92%;}
                             .teeth_child18:hover{background: url(<?php echo base_url(); ?>teeth/images/73.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

                             .teeth_child19 { width: 120px;height: 150px;top: 271px;left: 436px;background: url(<?php echo base_url(); ?>teeth/images/74.png) no-repeat 0 0;background-size: 92%;}
                             .teeth_child19:hover{background: url(<?php echo base_url(); ?>teeth/images/74.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

                             .teeth_child20 { width: 120px;height: 150px;top: 271px;left: 510px;background: url(<?php echo base_url(); ?>teeth/images/75.png) no-repeat 0 0;background-size: 92%;}
                             .teeth_child20:hover{background: url(<?php echo base_url(); ?>teeth/images/75.png) no-repeat 0 0; background-size: 92%;filter: brightness(85%);}

                             ul#continents1_teeth li a  {
                                 display: block;
                                 outline: none;
                                 height: 100%;
                             }
                             ul#continents1_new_teeth li a  {
                                 display: block;
                                 outline: none;
                                 height: 100%;
                             }
                             ul#continents2_teeth li a  {
                                 display: block;
                                 outline: none;
                                 height: 100%;
                             }
                             ul#continents2_teeth li a  {
                                 display: block;
                                 outline: none;
                                 height: 100%;
                             }

        </style>

 

        <script type="text/javascript">
            function getDatavalue(a)
            {
                if ($('#chkdiv').is(":checked"))
                {

                    $.ajax({
                        url: '<?php echo base_url(); ?>index.php/admin/patient/getteeth',
                        method: 'post',
                        success: function (response) {
                            $("#loadteeeth").html(response);
                        }
                    });
                    $.ajax({
                        url: '<?php echo base_url(); ?>index.php/admin/patient/getteethdata',
                        method: 'post',
                        success: function (response) {
                            $("#container").html(response);
                        }
                    });
                    /* $.ajax({
                     url:'<?php echo base_url(); ?>index.php/admin/patient/getteeth',
                     method: 'post',
                     success: function(response){
                     $("#loadteeeth").html(response);
                     }
                     });
                     $.ajax({
                     url:'<?php echo base_url(); ?>index.php/admin/patient/getteethdata',
                     method: 'post',
                     success: function(response){
                     $("#teeth_data_div_treatment").html(response);
                     }
                     });*/
                } else
                {

                    $.ajax({
                        url: '<?php echo base_url(); ?>index.php/admin/patient/getteeth_per',
                        method: 'post',
                        success: function (response) {
                            $("#loadteeeth").html(response);
                        }
                    });
                    $.ajax({
                        url: '<?php echo base_url(); ?>index.php/admin/patient/getteethdata_per',
                        method: 'post',
                        success: function (response) {
                            $("#container").html(response);
                        }
                    });


                }
            }
        </script>     


    </div>
    <div class="clear"></div>
    <!-- 
                                <div class="mt-20">
                                    <a href="javascript://" class="btn btn-primary border_radius30" data-toggle="tooltip" title="" onclick="getRecord_treatment('247')">Add Treatment</a>
                                </div>  -->




    <div id="focusdiv" class="addjob_patientbx mt-20">
        <div class="col-md-12">
            <h4 class="form_title">Job For Patient</h4>
            <div class="clear"></div>
            <hr class="border_hr">
        </div>

        <form id="formaddtreatment" action="" accept-charset="utf-8" method="post" class="ptt10" enctype="multipart/form-data">
            <input type="hidden" name="opd_no" value="123">
            <div class="row">     
                <div class="col-sm-6 pjob_tree">
                    <div class="form-group">  
                        <ul id="myUL">

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic', 1, )">Diagnostic</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Diagnostic -> Clinical Oral Evaluations', 13, )">Clinical Oral Evaluations</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Clinical Oral Evaluations -> Periodic oral evaluation', 17, )">Periodic oral evaluation</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Clinical Oral Evaluations -> limited oral evaluation Problem Focused', 18, )">limited oral evaluation Problem Focused</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Clinical Oral Evaluations -> Comprehensive oral evaluation – new or established patient', 19, )">Comprehensive oral evaluation – new or established patient</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Clinical Oral Evaluations -> Comprehensive periodontal evaluation – new or established patient', 20, )">Comprehensive periodontal evaluation – new or established patient</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures', 14, )">Image Capture X-ray ,CT,Pictures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Intraoral – periapical radiographic image', 21, )">Intraoral – periapical radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Intraoral – occlusal radiographic image', 22, )">Intraoral – occlusal radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Extraoral – first radiographic image', 23, )">Extraoral – first radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Bitewing – radiographic image', 24, )">Bitewing – radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Temporomandibular joint radiographic image', 25, )">Temporomandibular joint radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Panoramic radiographic image', 26, )">Panoramic radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Cephalometric radiographic image', 27, )">Cephalometric radiographic image</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Photographic images Oral/facial', 28, )">Photographic images Oral/facial</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Image Capture X-ray ,CT,Pictures -> Cone beam computed tomography', 29, )">Cone beam computed tomography</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Diagnostic -> Diagnostic  tests/ Models', 15, )">Diagnostic  tests/ Models</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Diagnostic  tests/ Models -> Saliva sample analysis', 30, )">Saliva sample analysis</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Diagnostic  tests/ Models -> Caries susceptibility tests', 31, )">Caries susceptibility tests</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Diagnostic  tests/ Models -> Premalignant pre-diagnostic test for detection of mucosal abnormalities', 32, )">Premalignant pre-diagnostic test for detection of mucosal abnormalities</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Diagnostic  tests/ Models -> Pulp vitality tests', 33, )">Pulp vitality tests</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Diagnostic  tests/ Models -> Diagnostic casts', 34, )">Diagnostic casts</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Diagnostic -> Oral Pathology Laboratory', 16, )">Oral Pathology Laboratory</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Oral Pathology Laboratory -> Accession of tissue, gross and microscopic examination', 35, )">Accession of tissue, gross and microscopic examination</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Diagnostic -> Oral Pathology Laboratory -> Accession of exfoliative cytologic smears, microscopic examination,', 36, )">Accession of exfoliative cytologic smears, microscopic examination,</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Preventive', 2, )">Preventive</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Prophylaxis', 37, )">Prophylaxis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Topical application of fluoride', 38, )">Topical application of fluoride</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Nutritional counseling for control of dental disease', 39, )">Nutritional counseling for control of dental disease</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Tobacco counseling', 40, )">Tobacco counseling</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Oral hygiene instructions', 41, )">Oral hygiene instructions</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Sealant', 42, )">Sealant</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Space maintainer', 43, )">Space maintainer</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Preventive -> Re-cementation of space maintainer', 44, )">Re-cementation of space maintainer</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative', 3, )">Restorative</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Restorative -> Amalgam Restorations', 45, )">Amalgam Restorations</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Amalgam Restorations -> One surface', 63, )">One surface</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Amalgam Restorations -> Two surface', 64, )">Two surface</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Amalgam Restorations -> Three surface', 65, )">Three surface</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Amalgam Restorations -> Four surface or more', 66, )">Four surface or more</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Restorative -> Composite Restorations – Direct', 46, )">Composite Restorations – Direct</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Composite Restorations – Direct -> Anterior', 51, )">Anterior</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Anterior -> One surface', 67, )">One surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Anterior -> Two surface', 68, )">Two surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Anterior -> Three surface', 69, )">Three surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Anterior -> Four or more surfaces', 70, )">Four or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Anterior -> Crown composite', 71, )">Crown composite</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Restorative -> Composite Restorations – Direct', 47, )">Composite Restorations – Direct</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Composite Restorations – Direct -> Posterior', 52, )">Posterior</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Posterior -> One surface', 72, )">One surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Posterior -> Two surface', 73, )">Two surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Posterior -> Three surface', 74, )">Three surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Composite Restorations – Direct -> Posterior -> Four or more surfaces', 75, )">Four or more surfaces</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Restorative -> Inlay/Onlay Restorations', 48, )">Inlay/Onlay Restorations</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay -Metallic', 53, )">Inlay -Metallic</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay -Metallic -> One surface', 76, )">One surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay -Metallic -> Two surface', 77, )">Two surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay -Metallic -> Three or more surface', 78, )">Three or more surface</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Metallic', 54, )">Onlay – Metallic</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Metallic -> Two surface', 79, )">Two surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Metallic -> Three surface', 80, )">Three surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Metallic -> Four or more surfaces', 81, )">Four or more surfaces</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay - Ceramic', 55, )">Inlay - Ceramic</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay - Ceramic -> One Surface', 82, )">One Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay - Ceramic -> Two Surface', 83, )">Two Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay - Ceramic -> Three or more Surface', 84, )">Three or more Surface</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Ceramic', 56, )">Onlay – Ceramic</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Ceramic -> Two Surface', 85, )">Two Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Ceramic -> Three Surface', 86, )">Three Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Ceramic -> Four or more surface', 87, )">Four or more surface</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay – Composite', 57, )">Inlay – Composite</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay – Composite -> One Surface', 88, )">One Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay – Composite -> Two Surface', 89, )">Two Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Inlay – Composite -> Three or more Surface', 90, )">Three or more Surface</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Composite', 58, )">Onlay – Composite</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Composite -> Two Surface', 91, )">Two Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Composite -> Three Surface', 92, )">Three Surface</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Onlay – Composite -> Four or nore surface', 93, )">Four or nore surface</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Resin', 59, )">Resin</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Resin -> Resin-based composite (indirect)', 94, )">Resin-based composite (indirect)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Resin -> Resin on metal', 95, )">Resin on metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Resin -> Provisional crown', 96, )">Provisional crown</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Porcelain', 60, )">Porcelain</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Porcelain -> Porcelain on ceramic substrate (e.g.Emax layer)', 97, )">Porcelain on ceramic substrate (e.g.Emax layer)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Porcelain -> Porcelain fused to  base metal', 98, )">Porcelain fused to  base metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Porcelain -> Porcelain fused to noble metal', 99, )">Porcelain fused to noble metal</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Metal', 61, )">Metal</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Metal -> Full cast  base metal', 100, )">Full cast  base metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Metal -> Full cast high noble metal', 101, )">Full cast high noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Metal -> Titanium', 102, )">Titanium</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Primary Tooth', 62, )">Primary Tooth</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Primary Tooth -> Primary tooth porcelain/ceramic Prefabricated  crown', 103, )">Primary tooth porcelain/ceramic Prefabricated  crown</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Restorative -> Inlay/Onlay Restorations -> Primary Tooth -> Primary tooth  stainless steel Prefabricated crown', 104, )">Primary tooth  stainless steel Prefabricated crown</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Restorative -> Crowns - Single', 49, )">Crowns - Single</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Restorative -> Other Restorative Services', 50, )">Other Restorative Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Recement inlay, onlay', 105, )">Recement inlay, onlay</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Recement crown', 106, )">Recement crown</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Core buildup, including any pins', 107, )">Core buildup, including any pins</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Post removal', 108, )">Post removal</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Labial veneer (resin laminate) – chairside', 109, )">Labial veneer (resin laminate) – chairside</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Labial veneer (resin laminate) – laboratory', 110, )">Labial veneer (resin laminate) – laboratory</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Labial veneer (porcelain laminate) – laboratory', 111, )">Labial veneer (porcelain laminate) – laboratory</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Veneer repair necessitated by restorative material failure', 112, )">Veneer repair necessitated by restorative material failure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Restorative -> Other Restorative Services -> Unspecified restorative procedure, by report', 113, )">Unspecified restorative procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics', 4, )">Endodontics</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Pulp Capping', 114, )">Pulp Capping</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Pulp Capping -> Pulp cap ? direct (excluding final restoration)', 195, )">Pulp cap ? direct (excluding final restoration)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Pulp Capping -> Pulp cap ? indirect (excluding final restoration)', 196, )">Pulp cap ? indirect (excluding final restoration)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Pulpotomy', 115, )">Pulpotomy</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Pulpotomy -> Pulpotomy -removal of pulp coronal to the dentinocemental Junction', 197, )">Pulpotomy -removal of pulp coronal to the dentinocemental Junction</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Pulpotomy -> Partial pulpotomy for apexogenesis ? permanent tooth with incomplete root development', 198, )">Partial pulpotomy for apexogenesis ? permanent tooth with incomplete root development</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Endodontic Therapy ', 116, )">Endodontic Therapy </span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Therapy  -> Primary Teeth', 121, )">Primary Teeth</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Primary Teeth -> Pulpal therapy (resorbable filling) ? anterior, primary tooth ', 199, )">Pulpal therapy (resorbable filling) ? anterior, primary tooth </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Primary Teeth -> Pulpal therapy (resorbable filling) ? posterior, primary tooth ', 200, )">Pulpal therapy (resorbable filling) ? posterior, primary tooth </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth', 122, )">Permanent Teeth</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth -> Anterior tooth ', 201, )">Anterior tooth </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth -> Bicuspid tooth ', 202, )">Bicuspid tooth </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth -> Molar', 203, )">Molar</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth -> Treatment of root canal obstruction; non-surgical access', 204, )">Treatment of root canal obstruction; non-surgical access</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth -> Incomplete endodontic therapy; inoperable, unrestorable or fractured tooth', 205, )">Incomplete endodontic therapy; inoperable, unrestorable or fractured tooth</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Therapy  -> Permanent Teeth -> Internal root repair of perforation defects', 206, )">Internal root repair of perforation defects</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Endodontic Retreatment', 117, )">Endodontic Retreatment</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Retreatment -> Apexification/recalcification/pulpal regeneration ', 123, )">Apexification/recalcification/pulpal regeneration </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Retreatment -> Apexification/recalcification/pulpal regeneration  -> Initial visit (apical closure/calcific repair of perforations, root resorption, pulp space disinfection, etc.) ', 210, )">Initial visit (apical closure/calcific repair of perforations, root resorption, pulp space disinfection, etc.) </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Retreatment -> Apexification/recalcification/pulpal regeneration  -> Interim medication replacement ', 211, )">Interim medication replacement </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Retreatment -> Apexification/recalcification/pulpal regeneration  -> Final visit (includes completed root canal therapy ? apical closure/calcific repair of perforations, root resorption, etc.) ', 212, )">Final visit (includes completed root canal therapy ? apical closure/calcific repair of perforations, root resorption, etc.) </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Retreatment -> Pulpal regeneration ', 124, )">Pulpal regeneration </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Endodontics -> Endodontic Retreatment -> Pulpal regeneration  -> Completion of regenerative treatment in an immature permanent tooth with a necrotic pulp', 213, )">Completion of regenerative treatment in an immature permanent tooth with a necrotic pulp</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Retreatment -> Anterior', 207, )">Anterior</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Retreatment -> Bicuspid', 208, )">Bicuspid</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Endodontic Retreatment -> Molar', 209, )">Molar</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Apicoectomy/Periradicular Services', 118, )">Apicoectomy/Periradicular Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Apicoectomy/Periradicular Services -> Anterior', 214, )">Anterior</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Apicoectomy/Periradicular Services -> Bicuspid', 215, )">Bicuspid</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Apicoectomy/Periradicular Services -> Molar', 216, )">Molar</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Reimplant', 119, )">Reimplant</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Reimplant -> Intentional reimplantation (including necessary splinting)', 217, )">Intentional reimplantation (including necessary splinting)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Endodontics -> Other Endodontic Procedures', 120, )">Other Endodontic Procedures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Endodontics -> Other Endodontic Procedures -> Unspecified endodontic procedure, by report', 218, )">Unspecified endodontic procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics', 5, )">Periodontics</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Periodontics -> Surgical Services ', 125, )">Surgical Services </span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> gingivectomy or gingivoplasty ', 163, )">gingivectomy or gingivoplasty </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> gingivectomy or gingivoplasty  -> Four or more contiguous teeth or tooth bounded spaces per quadrant ', 219, )">Four or more contiguous teeth or tooth bounded spaces per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> gingivectomy or gingivoplasty  -> One to three contiguous teeth or tooth bounded spaces per quadrant ', 220, )">One to three contiguous teeth or tooth bounded spaces per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> gingivectomy or gingivoplasty  -> To allow access for restorative procedure, per tooth ', 221, )">To allow access for restorative procedure, per tooth </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Anatomical crown exposure ', 164, )">Anatomical crown exposure </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Anatomical crown exposure  -> Four or more contiguous teeth per quadrant ', 222, )">Four or more contiguous teeth per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Anatomical crown exposure  -> One to three teeth per quadrant ', 223, )">One to three teeth per quadrant </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Flap procedure, including root planing ', 165, )">Flap procedure, including root planing </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Flap procedure, including root planing  -> Four or more contiguous teeth or tooth bounded spaces per quadrant ', 224, )">Four or more contiguous teeth or tooth bounded spaces per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Flap procedure, including root planing  -> One to three contiguous teeth or tooth bounded spaces per quadrant ', 225, )">One to three contiguous teeth or tooth bounded spaces per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Flap procedure, including root planing  -> Apically positioned flap', 226, )">Apically positioned flap</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Flap procedure, including root planing  -> Clinical crown lengthening ? hard tissue', 227, )">Clinical crown lengthening ? hard tissue</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Osseous surgery ', 166, )">Osseous surgery </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Osseous surgery  -> Four or more contiguous teeth or tooth bounded spaces per quadrant ', 228, )">Four or more contiguous teeth or tooth bounded spaces per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Osseous surgery  -> One to three contiguous teeth or tooth bounded spaces per quadrant ', 229, )">One to three contiguous teeth or tooth bounded spaces per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Osseous surgery  -> Bone replacement graft ', 230, )">Bone replacement graft </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Guided tissue regeneration ', 167, )">Guided tissue regeneration </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Guided tissue regeneration  -> Resorbable barrier', 231, )">Resorbable barrier</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Surgical Services  -> Guided tissue regeneration  -> Nonresorbable barrier', 232, )">Nonresorbable barrier</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Pedicle soft tissue graft procedure', 168, )">Pedicle soft tissue graft procedure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Subepithelial connective tissue graft procedures, per tooth', 169, )">Subepithelial connective tissue graft procedures, per tooth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Surgical Services  -> Soft tissue allograft', 170, )">Soft tissue allograft</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service', 126, )">Non-Surgical Periodontal Service</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Provisional splinting ', 171, )">Provisional splinting </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Provisional splinting  -> Intracoronal', 233, )">Intracoronal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Provisional splinting  -> Extracoronal', 234, )">Extracoronal</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Periodontal scaling and root planing ', 172, )">Periodontal scaling and root planing </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Periodontal scaling and root planing  -> Four or more teeth per quadrant ', 235, )">Four or more teeth per quadrant </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Periodontal scaling and root planing  -> One to three teeth per quadrant ', 236, )">One to three teeth per quadrant </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Other Periodontal Services', 173, )">Other Periodontal Services</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Periodontics -> Non-Surgical Periodontal Service -> Other Periodontal Services -> Unspecified periodontal procedure, by report', 237, )">Unspecified periodontal procedure, by report</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable)', 6, )">Prosthodontics (removable)</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care)', 127, )">Complete Dentures (Including Routine Post-Delivery Care)</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care) -> complete denture ', 174, )">complete denture </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care) -> complete denture  -> Maxillary', 238, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care) -> complete denture  -> Mandibular', 239, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care) -> immediate Complete denture ', 175, )">immediate Complete denture </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care) -> immediate Complete denture  -> Maxillary', 240, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Complete Dentures (Including Routine Post-Delivery Care) -> immediate Complete denture  -> Mandibular', 241, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care)', 128, )">Partial Dentures (Including Routine Post-delivery Care)</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Resin base ', 176, )">Resin base </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Resin base  -> Maxillary', 242, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Resin base  -> Mandibular', 243, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Cast metal framework with resin ', 177, )">Cast metal framework with resin </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Cast metal framework with resin  -> Maxillary', 244, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Cast metal framework with resin  -> Mandibular', 245, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Flexible base ', 178, )">Flexible base </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Flexible base  -> Maxillary', 246, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Partial Dentures (Including Routine Post-delivery Care) -> Flexible base  -> Mandibular', 247, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures', 129, )">Adjustments to Dentures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures -> Complete denture ', 179, )">Complete denture </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures -> Complete denture  -> Maxillary', 248, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures -> Complete denture  -> Mandibular', 249, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures -> Partial denture ', 180, )">Partial denture </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures -> Partial denture  -> Maxillary', 250, )">Maxillary</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Adjustments to Dentures -> Partial denture  -> Mandibular', 251, )">Mandibular</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Repairs ', 130, )">Repairs </span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Complete Dentures', 181, )">Complete Dentures</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Complete Dentures -> Repair broken complete denture base ', 252, )">Repair broken complete denture base </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Complete Dentures -> Replace missing or broken teeth ', 253, )">Replace missing or broken teeth </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures', 182, )">Partial Dentures</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Resin denture base ', 254, )">Resin denture base </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Cast framework ', 255, )">Cast framework </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Broken clasp ', 256, )">Broken clasp </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Replace broken teeth ', 257, )">Replace broken teeth </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Add tooth to existing partial denture ', 258, )">Add tooth to existing partial denture </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Add clasp to existing partial denture ', 259, )">Add clasp to existing partial denture </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Replace all teeth and acrylic on cast metal framework (maxillary)', 260, )">Replace all teeth and acrylic on cast metal framework (maxillary)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Repairs  -> Partial Dentures -> Replace all teeth and acrylic on cast metal framework (mandibular)', 261, )">Replace all teeth and acrylic on cast metal framework (mandibular)</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures', 131, )">Denture Rebase Procedures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures -> Ccomplete', 183, )">Ccomplete</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures -> Ccomplete -> Maxillary Denture', 262, )">Maxillary Denture</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures -> Ccomplete -> Mandibular Denture', 263, )">Mandibular Denture</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures -> Partial Dentures', 184, )">Partial Dentures</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures -> Partial Dentures -> Maxillary Partial Denture', 264, )">Maxillary Partial Denture</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Rebase Procedures -> Partial Dentures -> Mandibular Partial Denture', 265, )">Mandibular Partial Denture</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures', 132, )">Denture Reline Procedures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Complete Denture', 185, )">Complete Denture</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Complete Denture -> Maxillary  Complete Chairside', 266, )">Maxillary  Complete Chairside</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Complete Denture -> Mandibular Complete Chairside', 267, )">Mandibular Complete Chairside</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Complete Denture -> Maxillary  Complete Laboratory', 268, )">Maxillary  Complete Laboratory</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Complete Denture -> Mandibular Complete Laboratory', 269, )">Mandibular Complete Laboratory</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Partial Denture', 186, )">Partial Denture</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Partial Denture -> Maxillary partial denture chairside', 270, )">Maxillary partial denture chairside</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Partial Denture -> Mandibular partial denture chairside ', 271, )">Mandibular partial denture chairside </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Partial Denture -> Maxillary partial denture Laboratory', 272, )">Maxillary partial denture Laboratory</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Denture Reline Procedures -> Partial Denture -> Mandibular partial denture Laboratory', 273, )">Mandibular partial denture Laboratory</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis', 133, )">Interim Prosthesis</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis -> Complete Denture', 187, )">Complete Denture</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis -> Complete Denture -> Interim complete denture (maxillary) ', 274, )">Interim complete denture (maxillary) </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis -> Complete Denture -> Interim complete denture (mandibular) ', 275, )">Interim complete denture (mandibular) </span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis -> Partial denture', 188, )">Partial denture</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis -> Partial denture -> Interim partial denture (maxillary) ', 276, )">Interim partial denture (maxillary) </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics (removable) -> Interim Prosthesis -> Partial denture -> Interim partial denture (mandibular) ', 277, )">Interim partial denture (mandibular) </span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services', 134, )">Other Removable Prosthetic Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services -> Tissue conditioning, maxillary', 278, )">Tissue conditioning, maxillary</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services -> Tissue conditioning, mandibular', 279, )">Tissue conditioning, mandibular</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services -> Overdenture ? complete, by report', 280, )">Overdenture ? complete, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services -> Overdenture ? partial, by report', 281, )">Overdenture ? partial, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services -> Precision attachment, by report', 282, )">Precision attachment, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics (removable) -> Other Removable Prosthetic Services -> Unspecified removable prosthodontic procedure, by report', 283, )">Unspecified removable prosthodontic procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Maxillofacial Prosthetics', 7, )">Maxillofacial Prosthetics</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Facial moulage (sectional)', 284, )">Facial moulage (sectional)</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Facial moulage (complete)', 285, )">Facial moulage (complete)</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Nasal prosthesis', 286, )">Nasal prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Auricular prosthesis', 287, )">Auricular prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Orbital prosthesis', 288, )">Orbital prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Ocular prosthesis', 289, )">Ocular prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Facial prosthesis', 290, )">Facial prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Nasal septal prosthesis', 291, )">Nasal septal prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Ocular prosthesis, interim', 292, )">Ocular prosthesis, interim</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Cranial prosthesis', 293, )">Cranial prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Facial augmentation implant prosthesis', 294, )">Facial augmentation implant prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Nasal prosthesis, replacement', 295, )">Nasal prosthesis, replacement</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Auricular prosthesis, replacement', 296, )">Auricular prosthesis, replacement</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Orbital prosthesis, replacement', 297, )">Orbital prosthesis, replacement</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Facial prosthesis, replacement', 298, )">Facial prosthesis, replacement</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Obturator prosthesis, surgical', 299, )">Obturator prosthesis, surgical</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Obturator prosthesis, definitive', 300, )">Obturator prosthesis, definitive</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Obturator prosthesis, modification', 301, )">Obturator prosthesis, modification</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Mandibular resection prosthesis with guide flange', 302, )">Mandibular resection prosthesis with guide flange</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Mandibular resection prosthesis without guide flange', 303, )">Mandibular resection prosthesis without guide flange</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Obturator prosthesis, interim', 304, )">Obturator prosthesis, interim</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Trismus appliance (not for TMD treatment)', 305, )">Trismus appliance (not for TMD treatment)</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Feeding aid', 306, )">Feeding aid</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Speech aid prosthesis, pediatric', 307, )">Speech aid prosthesis, pediatric</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Speech aid prosthesis, adult', 308, )">Speech aid prosthesis, adult</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Palatal augmentation prosthesis', 309, )">Palatal augmentation prosthesis</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Palatal lift prosthesis, definitive', 310, )">Palatal lift prosthesis, definitive</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Palatal lift prosthesis, interim', 311, )">Palatal lift prosthesis, interim</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Palatal lift prosthesis, modification', 312, )">Palatal lift prosthesis, modification</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Speech aid prosthesis, modification', 313, )">Speech aid prosthesis, modification</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Surgical stent', 314, )">Surgical stent</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Radiation carrier', 315, )">Radiation carrier</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Radiation shield', 316, )">Radiation shield</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Radiation cone locator', 317, )">Radiation cone locator</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Fluoride gel carrier', 318, )">Fluoride gel carrier</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Commissure splint', 319, )">Commissure splint</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Surgical splint', 320, )">Surgical splint</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Topical medicament carrier', 321, )">Topical medicament carrier</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Adjust maxillofacial prosthetic appliance, by report', 322, )">Adjust maxillofacial prosthetic appliance, by report</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Maintenance and cleaning of a maxillofacial prosthesis by report', 323, )">Maintenance and cleaning of a maxillofacial prosthesis by report</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Maxillofacial Prosthetics -> Unspecified maxillofacial prosthesis, by report', 324, )">Unspecified maxillofacial prosthesis, by report</span>
                                        <ul class="nested">

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services', 8, )">Implant Services</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Implant Services -> Pre-Surgical Services', 135, )">Pre-Surgical Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Pre-Surgical Services -> Radiographic/surgical implant index, by report', 325, )">Radiographic/surgical implant index, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Implant Services -> Surgical Services', 136, )">Surgical Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Surgical placement of implant body: endosteal implant', 326, )">Surgical placement of implant body: endosteal implant</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Placement of interim implant body for transitional prosthesis', 327, )">Placement of interim implant body for transitional prosthesis</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant removal, by report', 328, )">Implant removal, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Debridement of a periimplant defect and surface cleaning of exposed implant surfaces, ', 329, )">Debridement of a periimplant defect and surface cleaning of exposed implant surfaces, </span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Debridement of osseous contouring of a periimplant defect', 330, )">Debridement of osseous contouring of a periimplant defect</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Bone graft for repair of periimplant defect placement of a barrier membrane or biologic materials to aid in osseous regeneration ', 331, )">Bone graft for repair of periimplant defect placement of a barrier membrane or biologic materials to aid in osseous regeneration </span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Bone graft at time of implant placement', 332, )">Bone graft at time of implant placement</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Interim abutment', 333, )">Interim abutment</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Connecting bar ? implant supported or abutment supported', 334, )">Connecting bar ? implant supported or abutment supported</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Prefabricated abutment ? includes modification and placement', 335, )">Prefabricated abutment ? includes modification and placement</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Custom abutment ? includes placement Implant/Abutment Supported Removable Dentures', 336, )">Custom abutment ? includes placement Implant/Abutment Supported Removable Dentures</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant/abutment supported removable denture for completely edentulous arch', 337, )">Implant/abutment supported removable denture for completely edentulous arch</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant/abutment supported removable denture for partially edentulous arch Implant /Abutment Supported Fixed Dentures (Hybrid Prosthesis)', 338, )">Implant/abutment supported removable denture for partially edentulous arch Implant /Abutment Supported Fixed Dentures (Hybrid Prosthesis)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant/abutment supported fixed denture for completely edentulous arch', 339, )">Implant/abutment supported fixed denture for completely edentulous arch</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant/abutment supported fixed denture for partially edentulous arch, Single Crowns, Abutment Supported', 340, )">Implant/abutment supported fixed denture for partially edentulous arch, Single Crowns, Abutment Supported</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported porcelain/ceramic crown', 341, )">Abutment supported porcelain/ceramic crown</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported porcelain fused to metal crown (high noble metal)', 342, )">Abutment supported porcelain fused to metal crown (high noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported porcelain fused to metal crown (predominantly base metal)', 343, )">Abutment supported porcelain fused to metal crown (predominantly base metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported porcelain fused to metal crown (noble metal)', 344, )">Abutment supported porcelain fused to metal crown (noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported cast metal crown (high noble metal)', 345, )">Abutment supported cast metal crown (high noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported cast metal crown (predominantly base metal)', 346, )">Abutment supported cast metal crown (predominantly base metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported cast metal crown (noble metal)', 347, )">Abutment supported cast metal crown (noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Abutment supported crown ? (titanium)', 348, )">Abutment supported crown ? (titanium)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant supported porcelain/ceramic crown', 349, )">Implant supported porcelain/ceramic crown</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant supported porcelain fused to metal crown (titanium, titanium alloy, high noble metal)', 350, )">Implant supported porcelain fused to metal crown (titanium, titanium alloy, high noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Surgical Services -> Implant supported metal crown (titanium, titanium alloy, high noble metal)', 351, )">Implant supported metal crown (titanium, titanium alloy, high noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported', 137, )">Fixed Partial Denture, Abutment Supported</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for porcelain/ceramic FPD', 352, )">Abutment supported retainer for porcelain/ceramic FPD</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for porcelain fused to metal FPD (high noble metal)', 353, )">Abutment supported retainer for porcelain fused to metal FPD (high noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for porcelain fused to metal FPD (predominantly base metal)', 354, )">Abutment supported retainer for porcelain fused to metal FPD (predominantly base metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for porcelain fused to metal FPD (noble metal)', 355, )">Abutment supported retainer for porcelain fused to metal FPD (noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for cast metal FPD (high noble metal)', 356, )">Abutment supported retainer for cast metal FPD (high noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for cast metal FPD (predominantly base metal)', 357, )">Abutment supported retainer for cast metal FPD (predominantly base metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer for cast metal FPD (noble metal)', 358, )">Abutment supported retainer for cast metal FPD (noble metal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Abutment Supported -> Abutment supported retainer crown for FPD ? (titanium)', 359, )">Abutment supported retainer crown for FPD ? (titanium)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported', 138, )">Fixed Partial Denture, Implant Supported</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Implant supported retainer for ceramic FPD', 360, )">Implant supported retainer for ceramic FPD</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Implant supported retainer for porcelain fused to metal FPD ', 361, )">Implant supported retainer for porcelain fused to metal FPD </span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Implant supported retainer for cast metal FPD ', 362, )">Implant supported retainer for cast metal FPD </span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Implant maintenance procedures, including removal of prosthesis, cleansing  abutments and reinsertion ', 363, )">Implant maintenance procedures, including removal of prosthesis, cleansing  abutments and reinsertion </span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Repair implant supported prosthesis, by report', 364, )">Repair implant supported prosthesis, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Repair implant abutment, by report', 365, )">Repair implant abutment, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Replacement of semi-precision or precision attachment ', 366, )">Replacement of semi-precision or precision attachment </span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Recement implant/abutment supported crown', 367, )">Recement implant/abutment supported crown</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Recement implant/abutment supported fixed partial denture', 368, )">Recement implant/abutment supported fixed partial denture</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Implant Services -> Fixed Partial Denture, Implant Supported -> Unspecified implant procedure, by report', 369, )">Unspecified implant procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed', 9, )">Prosthodontics, fixed</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays ', 139, )">Fixed Partial Denture Retainers ? Inlays/Onlays </span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Retainer', 189, )">Retainer</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Retainer -> Retainer ? cast metal for resin bonded fixed prosthesis', 370, )">Retainer ? cast metal for resin bonded fixed prosthesis</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Retainer -> Retainer ? porcelain/ceramic for resin bonded fixed prosthesis', 371, )">Retainer ? porcelain/ceramic for resin bonded fixed prosthesis</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay ', 190, )">inlay </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? porcelain/ceramic, two surfaces ', 372, )">Inlay ? porcelain/ceramic, two surfaces </span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? porcelain/ceramic, three or more surfaces', 373, )">Inlay ? porcelain/ceramic, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? cast high noble metal, two surfaces', 374, )">Inlay ? cast high noble metal, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? cast high noble metal, three or more surfaces', 375, )">Inlay ? cast high noble metal, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? cast predominantly base metal, two surfaces', 376, )">Inlay ? cast predominantly base metal, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? cast predominantly base metal, three or more surfaces', 377, )">Inlay ? cast predominantly base metal, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? cast noble metal, two surfaces', 378, )">Inlay ? cast noble metal, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? cast noble metal, three or more surfaces', 379, )">Inlay ? cast noble metal, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> inlay  -> Inlay ? titanium', 380, )">Inlay ? titanium</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay ', 191, )">Onlay </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? porcelain/ceramic, two surfaces', 381, )">Onlay ? porcelain/ceramic, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? porcelain/ceramic, three or more surfaces', 382, )">Onlay ? porcelain/ceramic, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? cast high noble metal, two surfaces', 383, )">Onlay ? cast high noble metal, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? cast high noble metal, three or more surfaces', 384, )">Onlay ? cast high noble metal, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? cast predominantly base metal, two surfaces', 385, )">Onlay ? cast predominantly base metal, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? cast predominantly base metal, three or more surfaces', 386, )">Onlay ? cast predominantly base metal, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? cast noble metal, two surfaces', 387, )">Onlay ? cast noble metal, two surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? cast noble metal, three or more surfaces', 388, )">Onlay ? cast noble metal, three or more surfaces</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Inlays/Onlays  -> Onlay  -> Onlay ? titanium', 389, )">Onlay ? titanium</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns', 140, )">Fixed Partial Denture Retainers ? Crowns</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns ', 192, )">Crowns </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? indirect resin based composite', 390, )">Crown ? indirect resin based composite</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? resin with high noble metal', 391, )">Crown ? resin with high noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? resin with predominantly base metal', 392, )">Crown ? resin with predominantly base metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? resin with noble metal', 393, )">Crown ? resin with noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? porcelain/ceramic', 394, )">Crown ? porcelain/ceramic</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? porcelain fused to high noble metal', 395, )">Crown ? porcelain fused to high noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? porcelain fused to predominantly base metal', 396, )">Crown ? porcelain fused to predominantly base metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? porcelain fused to noble metal', 397, )">Crown ? porcelain fused to noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? 3?4 cast high noble metal', 398, )">Crown ? 3?4 cast high noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? 3?4 cast predominantly base metal', 399, )">Crown ? 3?4 cast predominantly base metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? 3?4 cast noble metal', 400, )">Crown ? 3?4 cast noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? 3?4 porcelain/ceramic', 401, )">Crown ? 3?4 porcelain/ceramic</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? full cast high noble metal', 402, )">Crown ? full cast high noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? full cast predominantly base metal', 403, )">Crown ? full cast predominantly base metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? full cast noble metal', 404, )">Crown ? full cast noble metal</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Provisional retainer crown ? prior to final impression', 405, )">Provisional retainer crown ? prior to final impression</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Prosthodontics, fixed -> Fixed Partial Denture Retainers ? Crowns -> Crowns  -> Crown ? titanium', 406, )">Crown ? titanium</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services', 141, )">Other Fixed Partial Denture Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Connector bar', 407, )">Connector bar</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Recement fixed partial denture', 408, )">Recement fixed partial denture</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Stress breaker', 409, )">Stress breaker</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Precision attachment', 410, )">Precision attachment</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Coping', 411, )">Coping</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Fixed partial denture repair necessitated by restorative material failure', 412, )">Fixed partial denture repair necessitated by restorative material failure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Pediatric partial denture, fixed', 413, )">Pediatric partial denture, fixed</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Prosthodontics, fixed -> Other Fixed Partial Denture Services -> Unspecified fixed prosthodontic procedure, by report', 414, )">Unspecified fixed prosthodontic procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery', 10, )">Oral and Maxillofacial Surgery</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care)', 142, )">Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care)</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Extraction, coronal remnants ? deciduous tooth', 415, )">Extraction, coronal remnants ? deciduous tooth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Extraction, erupted tooth or exposed root (elevation and/or forceps removal)', 416, )">Extraction, erupted tooth or exposed root (elevation and/or forceps removal)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Surgical removal of erupted tooth requiring removal of bone and/or sectioning of tooth, and including  elevation of mucoperiosteal flap if indicated', 417, )">Surgical removal of erupted tooth requiring removal of bone and/or sectioning of tooth, and including  elevation of mucoperiosteal flap if indicated</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Removal of impacted tooth ? soft tissue', 418, )">Removal of impacted tooth ? soft tissue</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Removal of impacted tooth ? partially bony', 419, )">Removal of impacted tooth ? partially bony</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Removal of impacted tooth ? completely bony', 420, )">Removal of impacted tooth ? completely bony</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Removal of impacted tooth ? completely bony, with unusual surgical complications', 421, )">Removal of impacted tooth ? completely bony, with unusual surgical complications</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Surgical removal of residual tooth roots (cutting procedure)', 422, )">Surgical removal of residual tooth roots (cutting procedure)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Extractions (Includes local anesthesia, suturing, if needed, and routine postoperative care) -> Coronectomy ? intentional partial tooth removal', 423, )">Coronectomy ? intentional partial tooth removal</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures', 143, )">Other Surgical Procedures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Oroantral fistula closure', 424, )">Oroantral fistula closure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Primary closure of a sinus perforation', 425, )">Primary closure of a sinus perforation</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Tooth reimplantation and/or stabilization of accidentally evulsed or displaced tooth', 426, )">Tooth reimplantation and/or stabilization of accidentally evulsed or displaced tooth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Tooth transplantation (includes reimplantation from one site to another and splinting and/or stabilization)', 427, )">Tooth transplantation (includes reimplantation from one site to another and splinting and/or stabilization)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Surgical access of an unerupted tooth', 428, )">Surgical access of an unerupted tooth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Mobilization of erupted or malpositioned tooth to aid eruption', 429, )">Mobilization of erupted or malpositioned tooth to aid eruption</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Placement of device to facilitate eruption of impacted tooth', 430, )">Placement of device to facilitate eruption of impacted tooth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Biopsy of oral tissue ? hard (bone, tooth)', 431, )">Biopsy of oral tissue ? hard (bone, tooth)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Biopsy of oral tissue ? soft', 432, )">Biopsy of oral tissue ? soft</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Exfoliative cytological sample collection', 433, )">Exfoliative cytological sample collection</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Brush biopsy ? transepithelial sample collection', 434, )">Brush biopsy ? transepithelial sample collection</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Surgical repositioning of teeth', 435, )">Surgical repositioning of teeth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Transseptal fiberotomy/supra crestal fiberotomy, by report', 436, )">Transseptal fiberotomy/supra crestal fiberotomy, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Surgical placement: temporary anchorage device [screw retained plate] requiring surgical flap', 437, )">Surgical placement: temporary anchorage device [screw retained plate] requiring surgical flap</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Surgical placement: temporary anchorage device requiring surgical flap', 438, )">Surgical placement: temporary anchorage device requiring surgical flap</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Surgical placement: temporary anchorage device without surgical flap', 439, )">Surgical placement: temporary anchorage device without surgical flap</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Surgical Procedures -> Harvest of bone fur use in autogenous grafting procedure', 440, )">Harvest of bone fur use in autogenous grafting procedure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Alveoloplasty ? Surgical Preparation of Ridge for Dentures', 144, )">Alveoloplasty ? Surgical Preparation of Ridge for Dentures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Alveoloplasty ? Surgical Preparation of Ridge for Dentures -> Alveoloplasty in conjunction with extractions ? four or more teeth or tooth spaces, per quadrant', 441, )">Alveoloplasty in conjunction with extractions ? four or more teeth or tooth spaces, per quadrant</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Alveoloplasty ? Surgical Preparation of Ridge for Dentures -> Alveoloplasty in conjunction with extractions ? one to three teeth or tooth spaces, per quadrant', 442, )">Alveoloplasty in conjunction with extractions ? one to three teeth or tooth spaces, per quadrant</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Alveoloplasty ? Surgical Preparation of Ridge for Dentures -> Alveoloplasty not in conjunction with extractions ? four or more teeth or tooth spaces, per quadrant', 443, )">Alveoloplasty not in conjunction with extractions ? four or more teeth or tooth spaces, per quadrant</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Alveoloplasty ? Surgical Preparation of Ridge for Dentures -> Alveoloplasty not in conjunction with extractions ? one to three teeth or tooth spaces, per quadrant', 444, )">Alveoloplasty not in conjunction with extractions ? one to three teeth or tooth spaces, per quadrant</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Vestibuloplasty', 145, )">Vestibuloplasty</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Vestibuloplasty -> Vestibuloplasty ? ridge extension (secondary epithelialization)', 445, )">Vestibuloplasty ? ridge extension (secondary epithelialization)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Vestibuloplasty -> Vestibuloplasty ? ridge extension (including soft tissue grafts, muscle reattachment, revision of soft tissue attachment and management of hypertrophied and hyperplastic tissue) Includes non-odontogenic cysts', 446, )">Vestibuloplasty ? ridge extension (including soft tissue grafts, muscle reattachment, revision of soft tissue attachment and management of hypertrophied and hyperplastic tissue) Includes non-odontogenic cysts</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion ', 146, )">Excision of  Soft tissue lesion </span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Excision of benign lesion up to 1.25 cm', 447, )">Excision of benign lesion up to 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Excision of benign lesion greater than 1.25 cm', 448, )">Excision of benign lesion greater than 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Excision of benign lesion, complicated', 449, )">Excision of benign lesion, complicated</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Excision of malignant lesion up to 1.25 cm CDT 2013', 450, )">Excision of malignant lesion up to 1.25 cm CDT 2013</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Excision of malignant lesion greater than 1.25 cm', 451, )">Excision of malignant lesion greater than 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Excision of malignant lesion, complicated', 452, )">Excision of malignant lesion, complicated</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Excision of  Soft tissue lesion  -> Destruction of lesion(s) by physical or chemical method, by report', 453, )">Destruction of lesion(s) by physical or chemical method, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions', 147, )">Surgical Excision of Intra-Osseous Lesions</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Excision of malignant tumor ? lesion diameter up to 1.25 cm', 454, )">Excision of malignant tumor ? lesion diameter up to 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Excision of malignant tumor ? lesion diameter greater than 1.25 cm', 455, )">Excision of malignant tumor ? lesion diameter greater than 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of benign odontogenic cyst or tumor ? lesion diameter up to 1.25 cm', 456, )">Removal of benign odontogenic cyst or tumor ? lesion diameter up to 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of benign odontogenic cyst or tumor ? lesion diameter greater than 1.25 cm', 457, )">Removal of benign odontogenic cyst or tumor ? lesion diameter greater than 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of benign nonodontogenic cyst or tumor ? lesion diameter up to 1.25 cm', 458, )">Removal of benign nonodontogenic cyst or tumor ? lesion diameter up to 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of benign nonodontogenic cyst or tumor ? lesion diameter greater than 1.25 cm', 459, )">Removal of benign nonodontogenic cyst or tumor ? lesion diameter greater than 1.25 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of lateral exostosis (maxilla or mandible)', 460, )">Removal of lateral exostosis (maxilla or mandible)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of torus palatinus', 461, )">Removal of torus palatinus</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Removal of torus mandibularis', 462, )">Removal of torus mandibularis</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Surgical reduction of osseous tuberosity', 463, )">Surgical reduction of osseous tuberosity</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Excision of Intra-Osseous Lesions -> Radical resection of maxilla or mandible', 464, )">Radical resection of maxilla or mandible</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision', 148, )">Surgical Incision</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Incision and drainage of abscess ? intraoral soft tissue', 465, )">Incision and drainage of abscess ? intraoral soft tissue</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Incision and drainage of abscess ? intraoral soft tissue ? complicated (includes drainage of multiple fascial spaces)', 466, )">Incision and drainage of abscess ? intraoral soft tissue ? complicated (includes drainage of multiple fascial spaces)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Incision and drainage of abscess ? extraoral soft tissue', 467, )">Incision and drainage of abscess ? extraoral soft tissue</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Incision and drainage of abscess ? extraoral soft tissue ? complicated (includes drainage of multiple fascial spaces)', 468, )">Incision and drainage of abscess ? extraoral soft tissue ? complicated (includes drainage of multiple fascial spaces)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Removal of foreign body from mucosa, skin, or subcutaneous alveolar tissue', 469, )">Removal of foreign body from mucosa, skin, or subcutaneous alveolar tissue</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Removal of reaction producing foreign bodies, musculoskeletal system', 470, )">Removal of reaction producing foreign bodies, musculoskeletal system</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Partial ostectomy/sequestrectomy for removal of non-vital bone', 471, )">Partial ostectomy/sequestrectomy for removal of non-vital bone</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Surgical Incision -> Maxillary sinusotomy for removal of tooth fragment or foreign body', 472, )">Maxillary sinusotomy for removal of tooth fragment or foreign body</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures ', 149, )">Treatment of Fractures </span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple', 193, )"> Simple</span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Maxilla ? open reduction (teeth immobilized, if present)', 473, )">Maxilla ? open reduction (teeth immobilized, if present)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Maxilla ? closed reduction (teeth immobilized, if present)', 474, )">Maxilla ? closed reduction (teeth immobilized, if present)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Mandible ? open reduction (teeth immobilized, if present)', 475, )">Mandible ? open reduction (teeth immobilized, if present)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Mandible ? closed reduction (teeth immobilized, if present)', 476, )">Mandible ? closed reduction (teeth immobilized, if present)</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Malar and/or zygomatic arch ? open reduction', 477, )">Malar and/or zygomatic arch ? open reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Malar and/or zygomatic arch ? closed reduction', 478, )">Malar and/or zygomatic arch ? closed reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Alveolus ? closed reduction, may include stabilization of teeth', 479, )">Alveolus ? closed reduction, may include stabilization of teeth</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Alveolus ? open reduction, may include stabilization of teeth', 480, )">Alveolus ? open reduction, may include stabilization of teeth</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  ->  Simple -> Facial bones ? complicated reduction with fixation and multiple surgical approaches', 481, )">Facial bones ? complicated reduction with fixation and multiple surgical approaches</span>
                                                    </li>

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound ', 194, )">Compound </span>

                                                <ul class="nested">

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Maxilla ? open reduction', 482, )">Maxilla ? open reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Maxilla ? closed reduction', 483, )">Maxilla ? closed reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Mandible ? open reduction', 484, )">Mandible ? open reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Mandible ? closed reduction', 485, )">Mandible ? closed reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Malar and/or zygomatic arch ? open reduction', 486, )">Malar and/or zygomatic arch ? open reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Malar and/or zygomatic arch ? closed reduction', 487, )">Malar and/or zygomatic arch ? closed reduction</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Alveolus ? open reduction stabilization of teeth', 488, )">Alveolus ? open reduction stabilization of teeth</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Alveolus, closed reduction stabilization of teeth CDT 2013', 489, )">Alveolus, closed reduction stabilization of teeth CDT 2013</span>
                                                    </li>

                                                    <li style="cursor: pointer;"><span onclick="getvalue('Oral and Maxillofacial Surgery -> Treatment of Fractures  -> Compound  -> Facial bones ? complicated reduction with fixation and multiple surgical approaches', 490, )">Facial bones ? complicated reduction with fixation and multiple surgical approaches</span>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions', 150, )">Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Open reduction of dislocation', 491, )">Open reduction of dislocation</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Closed reduction of dislocation', 492, )">Closed reduction of dislocation</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Manipulation under anesthesia', 493, )">Manipulation under anesthesia</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Condylectomy', 494, )">Condylectomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Surgical discectomy, with/without implant', 495, )">Surgical discectomy, with/without implant</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Disc repair', 496, )">Disc repair</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Synovectomy', 497, )">Synovectomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Myotomy', 498, )">Myotomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Joint reconstruction', 499, )">Joint reconstruction</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthrotomy', 500, )">Arthrotomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroplasty', 501, )">Arthroplasty</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthrocentesis', 502, )">Arthrocentesis</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Non-arthroscopic lysis and lavage', 503, )">Non-arthroscopic lysis and lavage</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroscopy ? diagnosis, with or without biopsy', 504, )">Arthroscopy ? diagnosis, with or without biopsy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroscopy ? surgical: lavage and lysis of adhesions', 505, )">Arthroscopy ? surgical: lavage and lysis of adhesions</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroscopy ? surgical: disc repositioning and stabilization', 506, )">Arthroscopy ? surgical: disc repositioning and stabilization</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroscopy ? surgical: synovectomy', 507, )">Arthroscopy ? surgical: synovectomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroscopy ? surgical: discectomy', 508, )">Arthroscopy ? surgical: discectomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Arthroscopy ? surgical: debridement', 509, )">Arthroscopy ? surgical: debridement</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Occlusal orthotic device, by report', 510, )">Occlusal orthotic device, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Reduction of Dislocation and Management of Other Temporomandibular Joint Dysfunctions -> Unspecified TMD therapy, by report', 511, )">Unspecified TMD therapy, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Repair of Traumatic Wounds', 151, )">Repair of Traumatic Wounds</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Repair of Traumatic Wounds -> Suture of recent small wounds up to 5 cm', 512, )">Suture of recent small wounds up to 5 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Repair of Traumatic Wounds -> Complicated suture ? up to 5 cm', 513, )">Complicated suture ? up to 5 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Repair of Traumatic Wounds -> Complicated suture ? greater than 5 cm', 514, )">Complicated suture ? greater than 5 cm</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures', 152, )">Other Repair Procedures</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Skin graft (identify defect covered, location and type of graft)', 515, )">Skin graft (identify defect covered, location and type of graft)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Collection and application of autologous blood concentrate product', 516, )">Collection and application of autologous blood concentrate product</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Osteoplasty ? for orthognathic deformities', 517, )">Osteoplasty ? for orthognathic deformities</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Osteotomy ? mandibular rami', 518, )">Osteotomy ? mandibular rami</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Osteotomy ? mandibular rami with bone graft; includes obtaining the graft', 519, )">Osteotomy ? mandibular rami with bone graft; includes obtaining the graft</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Osteotomy ? segmented or subapical', 520, )">Osteotomy ? segmented or subapical</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Osteotomy ? body of mandible', 521, )">Osteotomy ? body of mandible</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> LeFort I (maxilla ? total)', 522, )">LeFort I (maxilla ? total)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> LeFort I (maxilla ? segmented)', 523, )">LeFort I (maxilla ? segmented)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> LeFort II or LeFort III (osteoplasty of facial bones for midface hypoplasia or retrusion)-without bone graft', 524, )">LeFort II or LeFort III (osteoplasty of facial bones for midface hypoplasia or retrusion)-without bone graft</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> LeFort II or LeFort III ? with bone graft', 525, )">LeFort II or LeFort III ? with bone graft</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Osseous, osteoperiosteal, or cartilage graft of the mandible or maxilla ? autogenous or nonautogenous, by report', 526, )">Osseous, osteoperiosteal, or cartilage graft of the mandible or maxilla ? autogenous or nonautogenous, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Sinus augmentation with bone or bone substitutes via a lateral open approach', 527, )">Sinus augmentation with bone or bone substitutes via a lateral open approach</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Sinus augmentation via a vertical approach', 528, )">Sinus augmentation via a vertical approach</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Bone replacement graft for ridge preservation ? per site', 529, )">Bone replacement graft for ridge preservation ? per site</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Repair of maxillofacial soft and/or hard tissue defect CDT 2013', 530, )">Repair of maxillofacial soft and/or hard tissue defect CDT 2013</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Frenulectomy ? also known as frenectomy or frenotomy ? separate procedure not incidental to another procedure', 531, )">Frenulectomy ? also known as frenectomy or frenotomy ? separate procedure not incidental to another procedure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Frenuloplasty', 532, )">Frenuloplasty</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Excision of hyperplastic tissue ? per arch', 533, )">Excision of hyperplastic tissue ? per arch</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Excision of pericoronal gingiva', 534, )">Excision of pericoronal gingiva</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Surgical reduction of fibrous tuberosity', 535, )">Surgical reduction of fibrous tuberosity</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Sialolithotomy', 536, )">Sialolithotomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Excision of salivary gland, by report', 537, )">Excision of salivary gland, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Sialodochoplasty', 538, )">Sialodochoplasty</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Closure of salivary fistula', 539, )">Closure of salivary fistula</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Emergency tracheotomy', 540, )">Emergency tracheotomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Coronoidectomy', 541, )">Coronoidectomy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Synthetic graft ? mandible or facial bones, by report', 542, )">Synthetic graft ? mandible or facial bones, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Implant-mandible for augmentation purposes (excluding alveolar ridge), by report', 543, )">Implant-mandible for augmentation purposes (excluding alveolar ridge), by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Appliance removal (not by dentist who placed appliance), includes removal of archbar', 544, )">Appliance removal (not by dentist who placed appliance), includes removal of archbar</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Intraoral placement of a fixation device not in conjunction with a fracture', 545, )">Intraoral placement of a fixation device not in conjunction with a fracture</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Oral and Maxillofacial Surgery -> Other Repair Procedures -> Unspecified oral surgery procedure, by report', 546, )">Unspecified oral surgery procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics', 11, )">Orthodontics</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Orthodontics -> Limited Orthodontic Treatment', 153, )">Limited Orthodontic Treatment</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Limited Orthodontic Treatment -> Limited orthodontic treatment of the primary dentition', 547, )">Limited orthodontic treatment of the primary dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Limited Orthodontic Treatment -> Limited orthodontic treatment of the transitional dentition', 548, )">Limited orthodontic treatment of the transitional dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Limited Orthodontic Treatment -> Limited orthodontic treatment of the adolescent dentition', 549, )">Limited orthodontic treatment of the adolescent dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Limited Orthodontic Treatment -> Limited orthodontic treatment of the adult dentition', 550, )">Limited orthodontic treatment of the adult dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Orthodontics -> Interceptive Orthodontic Treatment', 154, )">Interceptive Orthodontic Treatment</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Interceptive Orthodontic Treatment -> Interceptive orthodontic treatment of the primary dentition', 551, )">Interceptive orthodontic treatment of the primary dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Interceptive Orthodontic Treatment -> Interceptive orthodontic treatment of the transitional dentition', 552, )">Interceptive orthodontic treatment of the transitional dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Orthodontics -> Comprehensive Orthodontic', 155, )">Comprehensive Orthodontic</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Comprehensive Orthodontic -> Comprehensive orthodontic treatment of the transitional dentition', 553, )">Comprehensive orthodontic treatment of the transitional dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Comprehensive Orthodontic -> Comprehensive orthodontic treatment of the adolescent dentition', 554, )">Comprehensive orthodontic treatment of the adolescent dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Comprehensive Orthodontic -> Comprehensive orthodontic treatment of the adult dentition', 555, )">Comprehensive orthodontic treatment of the adult dentition</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Orthodontics -> Minor Treatment to Control Harmful Habits', 156, )">Minor Treatment to Control Harmful Habits</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Minor Treatment to Control Harmful Habits -> Removable appliance therapy', 556, )">Removable appliance therapy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Minor Treatment to Control Harmful Habits -> Fixed appliance therapy', 557, )">Fixed appliance therapy</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Orthodontics -> Other Orthodontic Services', 157, )">Other Orthodontic Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Pre-orthodontic treatment visit', 558, )">Pre-orthodontic treatment visit</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Periodic orthodontic treatment visit (as part of contract)', 559, )">Periodic orthodontic treatment visit (as part of contract)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Orthodontic retention (removal of appliances, construction and placement of retainer(s))', 560, )">Orthodontic retention (removal of appliances, construction and placement of retainer(s))</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Orthodontic treatment (alternative billing to a contract fee)', 561, )">Orthodontic treatment (alternative billing to a contract fee)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Repair of orthodontic appliance', 562, )">Repair of orthodontic appliance</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Replacement of lost or broken retainer', 563, )">Replacement of lost or broken retainer</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Rebonding or recementing; and/or repair, as required, of fixed retainers', 564, )">Rebonding or recementing; and/or repair, as required, of fixed retainers</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Orthodontics -> Other Orthodontic Services -> Unspecified orthodontic procedure, by report', 565, )">Unspecified orthodontic procedure, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services', 12, )">Adjunctive General Services</span>
                                <ul class="nested">
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Adjunctive General Services -> Unclassified Treatment', 158, )">Unclassified Treatment</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Unclassified Treatment -> Palliative (emergency) treatment of dental pain ? minor procedure', 566, )">Palliative (emergency) treatment of dental pain ? minor procedure</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Unclassified Treatment -> Fixed partial denture sectioning', 567, )">Fixed partial denture sectioning</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Adjunctive General Services -> Anesthesia', 159, )">Anesthesia</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Local anesthesia not in conjunction with operative or surgical procedures', 568, )">Local anesthesia not in conjunction with operative or surgical procedures</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Regional block anesthesia', 569, )">Regional block anesthesia</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Trigeminal division block anesthesia', 570, )">Trigeminal division block anesthesia</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Local anesthesia in conjunction with operative or surgical procedures', 571, )">Local anesthesia in conjunction with operative or surgical procedures</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Deep sedation/general anesthesia ? first 30 minutes', 572, )">Deep sedation/general anesthesia ? first 30 minutes</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Deep sedation/general anesthesia ? each additional 15 minutes', 573, )">Deep sedation/general anesthesia ? each additional 15 minutes</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Inhalation of nitrous oxide/anxiolysis, analgesia', 574, )">Inhalation of nitrous oxide/anxiolysis, analgesia</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Intravenous conscious sedation/analgesia ? first 30 minutes', 575, )">Intravenous conscious sedation/analgesia ? first 30 minutes</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Intravenous conscious sedation/analgesia ? each additional 15 minutes', 576, )">Intravenous conscious sedation/analgesia ? each additional 15 minutes</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Anesthesia -> Non-intravenous conscious sedation', 577, )">Non-intravenous conscious sedation</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Adjunctive General Services -> Professional Consultation', 160, )">Professional Consultation</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Professional Consultation -> Consultation ? diagnostic service provided by dentist or physician other than requesting dentist or physician Professional Visits', 578, )">Consultation ? diagnostic service provided by dentist or physician other than requesting dentist or physician Professional Visits</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Professional Consultation -> House/extended care facility call', 579, )">House/extended care facility call</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Professional Consultation -> hospital or ambulatory surgical center call', 580, )">hospital or ambulatory surgical center call</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Professional Consultation -> Office visit for observation (during regularly scheduled hours) ? no other services performed', 581, )">Office visit for observation (during regularly scheduled hours) ? no other services performed</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Professional Consultation -> Office visit ? after regularly scheduled hours', 582, )">Office visit ? after regularly scheduled hours</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Professional Consultation -> Case presentation, detailed and extensive treatment planning', 583, )">Case presentation, detailed and extensive treatment planning</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Adjunctive General Services -> Drugs', 161, )">Drugs</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Drugs -> Therapeutic parenteral drug, single administration', 584, )">Therapeutic parenteral drug, single administration</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Drugs -> Therapeutic parenteral drugs, two or more administrations, different medications', 585, )">Therapeutic parenteral drugs, two or more administrations, different medications</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Drugs -> Other drugs and/or medicaments, by report', 586, )">Other drugs and/or medicaments, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  
                                    <li><span class="caret" style="cursor: pointer;" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services', 162, )">Miscellaneous Services</span>
                                        <ul class="nested">

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Application of desensitizing medicament', 587, )">Application of desensitizing medicament</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Application of desensitizing resin for cervical and/or root surface, per tooth', 588, )">Application of desensitizing resin for cervical and/or root surface, per tooth</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Behavior management, by report', 589, )">Behavior management, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Treatment of complications (post-surgical) ? unusual circumstances, by report', 590, )">Treatment of complications (post-surgical) ? unusual circumstances, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Occlusal guard, by report', 591, )">Occlusal guard, by report</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Fabrication of athletic mouthguard', 592, )">Fabrication of athletic mouthguard</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Repair and/or reline of occlusal guard', 593, )">Repair and/or reline of occlusal guard</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Occlusion analysis ? mounted case', 594, )">Occlusion analysis ? mounted case</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Occlusal adjustment ? limited', 595, )">Occlusal adjustment ? limited</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Occlusal adjustment ? complete', 596, )">Occlusal adjustment ? complete</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Enamel microabrasion', 597, )">Enamel microabrasion</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> Odontoplasty 1-2 teeth; includes removal of enamel projections', 598, )">Odontoplasty 1-2 teeth; includes removal of enamel projections</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> External bleaching ? per arch ? performed in office', 599, )">External bleaching ? per arch ? performed in office</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                            <li style="cursor: pointer;"><span class="caret" onclick="getvalue('Adjunctive General Services -> Miscellaneous Services -> External bleaching ? per tooth ( CDT 2013)', 600, )">External bleaching ? per tooth ( CDT 2013)</span>

                                                <ul class="nested">

                                                </ul>

                                            </li>

                                        </ul>
                                    </li>  

                                </ul>
                            </li> 

                        </ul> 
                    </div>
                </div>
                <script type="text/javascript">
                    function getvalue(a, b, c)
                    {
                        //alert(a+'<<>>'+b);
                        //document.getElementById('job_name').value=a;
                        $("#job_name").val(a);
                        //$("#testing").html(a);
                        $("#job_id").val(b);

                        $("#treatment_amount").val(c);
                    }
                    /*function getvalue2(a,b)
                     { 
                     alert(a);
                     $("#job_name").val('');
                     $("#job_name").val('a');
                     $("#job_id").val(b);
                     }*/

                </script>

                <div class="col-sm-6 ajp_form">
                    <div class="form-group">
                        <label><strong>Patient Name:</strong> adasdas  </label>
                    </div>

                    <div class="form-group">
                        <label>Treatment Type</label>
                        <select name="treatment_type" id="treatment_type" class="form-control" required="">

                            <option value="">Select</option>

                            <option value="chief_complaint">Chief Complaint</option>
                            <option value="other_findings">Other Findings</option>
                            <option value="existing">Existing</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Job Name</label>
                        <input type="text" class="form-control job_name" name="job_name" id="job_name" value="">
                        <input type="hidden" class="form-control" name="job_id" id="job_id">
                        <input type="hidden" class="form-control" name="treatmentplans_id" id="treatmentplans_id">
                    </div>
                    <div class="form-group">
                        <label>Primary Doctor Name</label>

                        <select name="treatment_doctor" id="treatment_doctor" class="form-control" required="">


                            <option value="">Select</option>
                            <option value="1">Jyoti Chorasia</option>
                            <option value="8">Y.k.. VIRMANI</option>
                            <option value="11">Rijuta Virmani</option>
                            <option value="21">Priya Gupta</option>
                            <option value="25">Anant Malik</option>
                            <option value="39">Sudhakar S</option>
                            <option value="44">subbarao test</option>
                            <option value="46">doctor D</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estimated Amount</label>
                                <input type="text" class="form-control" name="treatment_amount" id="treatment_amount" required="" onkeypress="return isNumberKey(event)" onkeyup="discount(this.value)">
                            </div>
                        </div>

                        <input type="hidden" name="distype" id="distype" value="">
                        <input type="hidden" name="disamt" id="disamt" value="">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Courtesy (if any)</label>
                                <input type="text" class="form-control" name="treatment_courtesy" id="" value="">
                            </div>
                            <span id="errtext"></span>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Estimated Total Amount</label>
                                <input type="text" class="form-control" name="treatment_courtesy" id="treatment_courtesy" onkeypress="return isNumberKey(event)" value="">
                            </div>
                            <span id="errtext"></span>
                        </div>
                        <input type="hidden" name="hid" id="hid" value="<?php echo $id; ?>">
                        <input type="hidden" name="treatmentcode" id="treatmentcode" value="">
                    </div>    
                </div> 
 
                <div class="clear"></div>
 
                <div class="col-sm-12">


                </div>
 
                <div class="col-sm-12">
                    <div class="box-footer">
                        <div class="align-center" id="save_divs">                        
                            <button type="submit" class="btn btn-primary" value="save">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeview();">Fill Later</button>
                        </div>
                    </div>
                    <div class="align-center" id="view_divs" style="display: none;">       
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeview();">Fill Later</button>
                    </div>
                </div>
            </div>
        </form> 



    </div>

    <script>
        function getRecord_teechinfo(id, b, img1)
        {
          
            var img1 = '<?php echo base_url(); ?>uploads/teeth_images/' + img1;
            var doc = document.getElementById("treatment_doctor").value;
            var pid = document.getElementById("patient_id").value;
            var tcode = document.getElementById("treatmentcode").value;

            //$('#trcode').val(tcode);
            if (tcode)
            {
                document.getElementById("shw").style.display = "block";
            }
            document.getElementById('trcode').innerHTML = tcode;

            $('#tids1').val(tcode);
            $('#teeth_id').val(id);
            $('#doc_id').val(doc);
            $('#tooth_patient_id').val(pid);
            $('#teeth_nte').html(b);
            $('#workteeth').html('<img src=' + img1 + '>');

            $('#teethsid').val(id);
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patient/getteethnumber',
                type: "POST",
                data: {teethid: id},
                success: function (data) {

                    var tcode = data;
                    document.getElementById('shw_tooth_number').innerHTML = tcode;
                }
            })
            document.getElementById("show_toothnumber").style.display = "block";
            //holdModal('add_teethinfo');
        }

        function getDatavalue_wr(a)
        {
            if ($('#chkdiv1').is(":checked"))
            {

                $.ajax({
                    url: '<?= base_url() ?>index.php/admin/patient/getteeth_new',
                    method: 'post',
                    success: function (response) {
                        $("#loadteeeth_wk").html(response);
                    }
                });
                $.ajax({
                    url: '<?= base_url() ?>index.php/admin/patient/getteethdata_new',
                    method: 'post',
                    success: function (response) {
                        $("#container_new").html(response);
                    }
                });

            } else
            {

                $.ajax({
                    url: '<?= base_url() ?>index.php/admin/patient/getteeth_per_new',
                    method: 'post',
                    success: function (response) {
                        $("#loadteeeth_wk").html(response);
                    }
                });
                $.ajax({
                    url: '<?= base_url() ?>index.php/admin/patient/getteethdata_per_new',
                    method: 'post',
                    success: function (response) {
                        $("#container_new").html(response);
                    }
                });


            }
        }
    </script>