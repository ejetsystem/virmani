<style>
    .pjob_tree #myUL {
        margin: 0;
        padding: 0;
    }
    .pjob_tree ul, .pjob_tree #myUL {
        list-style-type: none;
    }
    ul {
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }
    .pjob_tree .caret {
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: initial;
        border: 0px;
    }
    /*  .caret {
          display: inline-block;
          width: 0;
          height: 0;
          margin-left: 2px;
          vertical-align: middle;
          border-top: 4px dashed;
          border-top: 4px solid\9;
          border-right: 4px solid transparent;
          border-left: 4px solid transparent;
      }*/

    span {
        text-transform: capitalize;
    }
    .pjob_tree .nested {
        display: none;
    }
    .pjob_tree ul, .pjob_tree #myUL {
        list-style-type: none;
    }
    ol, ul {
        margin-top: 0;
        margin-bottom: 10px;
    }
    .mr-5 {
        width: 10.7%;
    }
    .pjob_tree .active {
    display: block;
}
.pjob_tree .caret::before {
    content: "\25B6";
    color: black;
    display: inline-block;
    margin-right: 6px;
}
.pjob_tree .caret-down::before {
    -ms-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    ': ;
    transform: rotate(90deg);
}
</style>
<div class="content-wrapper">

    <!-- Main content -->

    <section class="content container">
        <div class="box add_area d-block my-20">
            <div class="box-header with-border patot">
                <div class="pat_list_top">
                    <h3><?php echo ucfirst($patients[0]['name']); ?></h3>
                    <p class="ram_text"><?php echo $patients[0]['present_address']; ?> </p>

                    <p class="ram_text"><?php echo $contact[0]['phone1']; ?></p>
                    <hr>
                    <lable>Balance Payment:</lable><span>0</span><br>
                    <lable>Medical History &amp; Allergies: </lable><span></span><br>
                    <lable>Special Note: </lable><span> </span><br>
                    <lable>Referred By: </lable><span> </span>, &nbsp; <lable>  Referrer Name: </lable><span></span> <br>
                    <lable>Referals Sent: </lable><span>53</span>
                </div>
            </div>
        </div>

        <div class="box add_area d-block my-20 p-20">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    //print_r($_SERVER);
                    echo $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    $pathFragments = explode('/', $path);
                    echo $end = end($pathFragments);
                    ?>
                    <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="patientsinfo" data-mdb-toggle="tab" href="#patientinfo" role="tab" aria-controls="patientinfo" aria-selected="false">Patient Info</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="appointment" data-mdb-toggle="tab" href="#appointments" role="tab" aria-controls="appointments" aria-selected="false" >Appointments</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="treatmentplan" data-mdb-toggle="tab" href="#treatmentplans" role="tab" aria-controls="treatmentplans" aria-selected="true">Treatment Plan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="workdone" data-mdb-toggle="tab" href="#worksdone" role="tab" aria-controls="worksdone" aria-selected="false">Work Done</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="worksdonehistory" data-mdb-toggle="tab" href="#workdonehistory" role="tab" aria-controls="workdonehistory" aria-selected="false">Work Done History</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="accounting" data-mdb-toggle="tab" href="#accountings" role="tab" aria-controls="accountings" aria-selected="false">Accounting</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lab" data-mdb-toggle="tab" href="#labs" role="tab" aria-controls="labs" aria-selected="false">Lab</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="xray" data-mdb-toggle="tab" href="#xrays" role="tab" aria-controls="xrays" aria-selected="false">X-Ray</a>
                        </li>
                    </ul>

                    <!-- Tabs content -->
                    <div class="tab-content" id="ex2-content">
                        <div class="tab-pane fade" id="patientinfo" role="tabpanel" aria-labelledby="patientsinfo">
                            <!--Start Patient Info  -->
                            <div class="box box-light mt-20">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Relative of Patient</h3>
                                </div>
                                <div class="box-body box-profile" id="refpatientdiv">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr class="bg-info text-center">
                                                    <th style="color: white !important;font-weight: bold;">Name</th>
                                                    <th style="color: white !important;font-weight: bold;">Relation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Name 1</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Name 2</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Name 3</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Patient Info  -->

                            <!-- Start Refferal of Patient -->
                            <div class="box box-light mt-20">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Refferals of Patient</h3>
                                </div>
                                <div class="box-body box-profile" id="refpatientdiv">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr class="bg-info">
                                                    <th style="color: white !important;font-weight: bold;">ID No</th>
                                                    <th style="color: white !important;font-weight: bold;">Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="http://sonaai.co/dental/admin/staff/doctorprofile/8" style="text-decoration: underline; color: #f00;">D MASDASM,</a>
                                                    </td>
                                                    <td>QWEQWEWQEQWEQE</td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- aria-expanded Refferal of Patient -->
                        </div>
                        <div class="tab-pane fade" id="appointments" role="tabpanel" aria-labelledby="appointment">
                            <!--Start Appointments -->
                            <div class="box box-light mt-20">
                                <div class="box-body box-profile" id="refpatientdiv">
                                    <input type="text" name="search" class="form-control col-2" placeholder="Search...">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 282px;">Doctor Name</th>
                                                    <th rowspan="1" colspan="1" style="width: 234px;">Start Time</th>
                                                    <th rowspan="1" colspan="1" style="width: 130px;">Slot</th>
                                                    <th rowspan="1" colspan="1" style="width: 347px;">Cause/Treatment</th>
                                                    <th rowspan="1" colspan="1" style="width: 154px;">Chair</th>
                                                    <th rowspan="1" colspan="1" style="width: 204px;">Work Done</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Appointments -->
                        </div>
                        <div class="tab-pane fade  show active" id="treatmentplans" role="tabpanel" aria-labelledby="treatmentplan">
                            <?php echo $this->load->view('admin/patients/treatment_plan', $data, TRUE); ?>
                        </div>

                        <div class="tab-pane fade" id="worksdone" role="tabpanel" aria-labelledby="workdone">
                            <!--Start Appointments -->
                            <div class="box box-light mt-20">
                                <div class="box-body box-profile" id="refpatientdiv">
                                    <input type="text" name="search" class="form-control col-2" placeholder="Search...">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1" style="width: 282px;">Doctor Name</th>
                                                    <th rowspan="1" colspan="1" style="width: 234px;">Start Time</th>
                                                    <th rowspan="1" colspan="1" style="width: 130px;">Slot</th>
                                                    <th rowspan="1" colspan="1" style="width: 347px;">Cause/Treatment</th>
                                                    <th rowspan="1" colspan="1" style="width: 154px;">Chair</th>
                                                    <th rowspan="1" colspan="1" style="width: 204px;">Work Done</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Appointments -->
                        </div>
                        <div class="tab-pane fade" id="workdonehistory" role="tabpanel" aria-labelledby="worksdonehistory">
                            Tab 5 content
                        </div>
                        <div class="tab-pane fade" id="accountings" role="tabpanel" aria-labelledby="accounting">
                            Tab 6 content
                        </div>
                        <div class="tab-pane fade" id="labs" role="tabpanel" aria-labelledby="lab">
                            Tab 7 content
                        </div>
                        <div class="tab-pane fade" id="xrays" role="tabpanel" aria-labelledby="xray">
                            Tab 8 content
                        </div>

                    </div>
                    <!-- Tabs content -->








                </div>
            </div>
        </div>



    </section>
</div>

<script>
    $('.nav-tabs a').click(function () {
        $(this).tab('show');
    })
</script>

<script type="text/javascript">
    function getvalue1(a, b, c)
    {
        //document.getElementById('job_name').value=a;
        $("#job_name1").val(a);
        //$("#testing").html(a);
        $("#job_id1").val(b);

        $("#treatment_amount1").val(c);
    }
    /*function getvalue2(a,b)
     { 
     alert(a);
     $("#job_name").val('');
     $("#job_name").val('a');
     $("#job_id").val(b);
     }*/

</script>

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
