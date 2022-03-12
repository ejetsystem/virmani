 
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
                
                foreach ($teethar_cat as $key => $teetharcat_data) {
                    if ($teetharcat_data->id <= 5) {
                        ?>
                        <option value="<?php echo $teetharcat_data->id; ?>" <?php
                        if ($teetharcat_data->id == '4') {
                            echo "selected='selected'";
                        }
                        ?>><?php echo $teetharcat_data->teeth_category_name; ?></option>
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


        <div id="show_toothnumber" style="display: none"></div>
        <div id="shw_tooth_number"></div>

        <div class="row_">
            <form id="form_addnotes_new" action="" accept-charset="utf-8" method="post" class="ptt10" enctype="multipart/form-data">
                <input type="hidden" name="patient_id" id="patient_id" value="<?php echo ucfirst($patients[0]['id']); ?>">
                <input type="hidden" name="teethsid" id="teethsid" value="">  
                <input type="hidden" name="toothinfo_ids" id="tooths_ids" value="">
                <input type="hidden" name="trtmnts_ids" id="trtmnts_ids" value="">
                <input type="hidden" name="trtypes" id="trtypes" value="">
                <input type="hidden" name="addnew" id="addnew" value="">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
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


    </div>
    <div class="clear"></div>


    <div id="focusdiv" class="addjob_patientbx mt-20">
        <div class="col-md-12">
            <h4 class="form_title">Job For Patient</h4>
            <div class="clear"></div>
            <hr class="border_hr">
        </div>

        <form id="formaddtreatment1" action="" accept-charset="utf-8"  method="post" class="ptt10" enctype="multipart/form-data" >
            <input type="hidden" name="opd_no" value="<?php echo $id; ?>">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
            <div class="row">     
                <div class="col-sm-6 pjob_tree">
                    <div class="form-group">  
                        <ul id="myUL">
                            <?php
                            $query_check = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='0'");
                            $res_check = $query_check->result_array();
                            foreach ($res_check as $res_checkv) {
                                ?>                           
                                <li style="cursor: pointer;"><span class="caret" onclick="getvalue1('<?php echo $res_checkv['category']; ?>',<?php echo $res_checkv['id']; ?>,<?php echo $res_checkv['amount']; ?>)"><?php echo $res_checkv['category']; ?></span>
                                    <ul class="nested">
                                        <?php
                                        $query_check = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='0'");
                                        $query_check1 = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='" . $res_checkv['id'] . "'");
                                        $res_check1 = $query_check1->result_array();
                                        foreach ($res_check1 as $res_checkv1) {
                                            ?>
                                            <li><span class="caret"  style="cursor: pointer;" onclick="getvalue1('<?php echo $res_checkv['category'] . ' -> ' . $res_checkv1['category']; ?>',<?php echo $res_checkv1['id']; ?>,<?php echo $res_checkv1['amount']; ?>)"><?php echo $res_checkv1['category'];
                                            ; ?></span>
                                                <ul class="nested">
                                                    <?php
                                                    $query_check2 = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='" . $res_checkv1['id'] . "'");
                                                    $res_check2 = $query_check2->result_array();
                                                    foreach ($res_check2 as $res_checkv2) {
                                                        ?> 
                                                        <li style="cursor: pointer;"><span  class="caret"  onclick="getvalue1('<?php echo $res_checkv['category'] . ' -> ' . $res_checkv1['category'] . ' -> ' . $res_checkv2['category']; ?>',<?php echo $res_checkv2['id']; ?>,<?php echo $res_checkv2['amount']; ?>)"><?php echo $res_checkv2['category'];
                                                    ; ?></span>

                                                            <ul class="nested">
                                                                <?php
                                                                $query_check3 = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='" . $res_checkv2['id'] . "'");
                                                                $res_check3 = $query_check3->result_array();
                                                                foreach ($res_check3 as $res_checkv3) {
                                                                    ?> 
                                                              <li style="cursor: pointer;"><span  onclick="getvalue1('<?php echo $res_checkv['category'] . ' -> ' . $res_checkv1['category'] . ' -> ' . $res_checkv2['category'] . ' -> ' . $res_checkv3['category']; ?>',<?php echo $res_checkv3['id']; ?>,<?php echo $res_checkv3['amount']; ?>)"><?php echo $res_checkv3['category'];?></span>
                                                                    </li>
                                                            <?php
                                                        }
                                                        ?> 
                                                            </ul>
                                                        </li>
                                                <?php
                                            }
                                            ?> 
                                                </ul>
                                            </li>  
                                    <?php
                                }
                                ?> 
                                    </ul>
                                </li> 
                        <?php } ?> 
                        </ul> 
                    </div>
                </div>
                

                <div class="col-sm-6 ajp_form">
                <?php
                //print_r($patients);
                //die;
                //$patient_name=$this->db->get_where("patientses", array('id' => $id))->row();
                ?>
                    <div class="form-group">
                        <label><strong>Patient Name:</strong> <?php echo $patients[0]['name']; ?> </label>
                    </div>

                    <div class="form-group">
                        <label>Treatment Type</label>
                        <select name="treatment_type" id="treatment_type1" class="form-control" required="">

                            <option value=""><?php echo $this->lang->line('select') ?></option>

                            <option value="chief_complaint">Chief Complaint</option>
                            <option value="other_findings">Other Findings</option>
                            <option value="existing">Existing</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Job Name</label>
                        <input type="text" class="form-control job_name" name="job_name" id="job_name1" value="">
                        <input type="hidden" class="form-control" name="job_id" id="job_id1">
                        <input type="hidden" class="form-control" name="treatmentplans_id" id="treatmentplans_id1" >
                    </div>
                    <div class="form-group">
                        <label>Primary Doctor Name</label>

                        <select name="treatment_doctor" id="treatment_doctor1" class="form-control" required="">


                            <option value=""><?php echo $this->lang->line('select') ?></option>
                            <?php foreach ($doctors as $dkey => $dvalue) {?>
                                <option value="<?php echo $dvalue->id ?>"><?php echo $dvalue->name; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estimated Amount</label>
                                <input type="text" class="form-control" name="treatment_amount" id="treatment_amount1" required onkeypress="return isNumberKey(event)" onkeyup="discount1(this.value)">
                            </div>
                        </div>

                        <?php
                        //$patient_refer=$this->db->get_where("roles", array('name' => $patient_name->refer_by))->row();
                        // $patient_refer->discount_type;
                        //$patient_refer->amount;
                        ?>
<!--        <input type="hidden" name="distype" id="distype1" value="<?php echo $patient_refer->discount_type; ?>">
        <input type="hidden" name="disamt" id="disamt1" value="<?php echo $patient_refer->amount; ?>">-->

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
                                <input type="text" class="form-control" name="treatment_courtesy" id="treatment_courtesy1" onkeypress="return isNumberKey(event)" value="">
                            </div>
                            <span id="errtext"></span>
                        </div>
                        <input type="hidden" name="hid" id="hid1" value="<?php echo $id; ?>">
                        <input type="hidden" name="treatmentcodes" id="treatmentcodes" value="">
                    </div>    
                </div> 



                <!--   <div class="col-md-12 mb25">
                <a href="#" class="btn btn-primary border_radius30" data-toggle="tooltip" title="" onclick="getRecord_notes()" data-original-title=""><i class="fa fa-sticky-note-o"></i> Notes</a>
                </div> -->
                <div class="clear"></div>

        <!-- <a href="#" class="btn btn-primary" data-toggle="tooltip" title="" onclick="getRecord_notes()" data-original-title=""><i class="fas fa-sticky-note-o"></i> Notes </a> -->

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
        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function () {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }
    </script>