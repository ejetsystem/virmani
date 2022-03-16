<!-- <?php 
date_default_timezone_set('Asia/Kolkata');
function SplitTime($StartTime, $EndTime, $Duration="60"){
    $ReturnArray = array ();// Define output
    $StartTime    = strtotime ($StartTime); //Get Timestamp
    $EndTime      = strtotime ($EndTime); //Get Timestamp
    $AddMins  = $Duration * 60;
    while ($StartTime < $EndTime) //Run loop
    {
      $ReturnArray[] = date ("G:i", $StartTime);
        $StartTime += $AddMins; //Endtime check
      }
      return $ReturnArray;
    }

    function multi_array_search($search_for, $search_in) { 
      foreach ($search_in as $element) {
        if ( ($element === $search_for) || (is_array($element) && multi_array_search($search_for, $element)) ){
          return true;
        }
      }
      return false;
    }  
    ?>

    <?php
    $sdate = date("Y-m-d");
    if(isset($_REQUEST['sdate']) && $_REQUEST['sdate'] != ''){
     $sdate = $_POST['sdate'];
   }
   $field_date = date("Y-m-d",strtotime($sdate));
   $splitimes = SplitTime($sdate." 10:00", $sdate." 20:00", "15");
   $ci =& get_instance(); 
   $appintment_info=array();
   $doctor_id = $_REQUEST['doctor_id'];

   if($chair_id == 'all'){
    $chairs = array(1,2,3,4,5);
  } else {
    $chairs = explode(",",$chair_id);
  }

  if($doctor_id == 'all'){
    $doctor_cond= '';
  } else {
    $doctor_cond = 'AND e.doctor IN('.$_REQUEST['doctor_id'].')';
  }

  $chair_colors = array('chair_green','chair_blue','chair_purple','chair_dbrown','chair_mgreen');

  foreach($splitimes as $stime){ 
    $start_date = $sdate.' '.$stime.':00';
    foreach($chairs as $chair){
     $query_check = $ci->db->query("SELECT *,e.id even_id FROM `events` e,appointment a WHERE ('".$start_date."' BETWEEN e.`start_date` AND e.`end_date`) AND e.appointment_no = a.appointment_no AND e.event_type='appointment' ".$doctor_cond." AND e.chair = ".$chair);
     $res_check = $query_check->result();
     if(count($res_check) > 0){
      foreach($res_check as $rcheck){ 
        $rcheck = (array) $rcheck;  
        if(multi_array_search($rcheck['appointment_no'], $appintment_info)){ 
         $appintment_info[$stime][$chair][] = 'empty';
       } else { 
        $appintment_info[$stime][$chair][] = $rcheck; 
      }  
    }  
  } else {
    $appintment_info[$stime][$chair][] = 'Allot';
  }  
}  
} 
?> 
<table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th width="16%">Slot Time</th>
      <?php foreach($chairs as $ch){ ?>
        <th width="16%">Chair <?php echo $ch; ?></th>
      <?php } ?> 
    </tr>
  </thead>
  <tbody> 

    <?php
    foreach($appintment_info as $val => $ainfo_data){ 
      $date_now = date("Y-m-d H:i:s");
      $cdate_now = $sdate.' '.$val ;
      if ($date_now > $cdate_now) {
        $che_v =  'style="background:#ddd;"';
        $che_c = 0;
      } else {
        $che_v =  '';
        $che_c = 1;
      } 
      ?>
      <tr>
        <td><strong><?php  echo date("h:i A",strtotime($val)); ?></strong></td> 
        <?php foreach($ainfo_data as $chair_no => $ainfo){ 
          ?>
          
          <?php 
          if($ainfo[0] != 'Allot'){ 
            $row_s = 'rowspan="'.($ainfo[0]['slot_type_cal']+1).'"';
          } else {
            $row_s = '';
          }
          ?>  
          
          <?php if($ainfo[0] == 'Allot'){ ?>
            <td <?php echo $che_v;  ?>>
              <a href="javascript://" <?php if($che_c > 0){ ?>onclick="add_application('<?php echo $field_date; ?>','<?php echo date("h:i A",strtotime($val)); ?>',<?php echo $chair_no; ?>);" <?php } else { ?> onclick="alert_function();"<?php } ?>><?php echo $ainfo[0]; ?></a> 
              
            </td> 
            
          <?php  } else if($ainfo[0] =='empty'){
          } else { //echo 'now'.$ainfo[0].'now'; ?>
          <td <?php echo $row_s; ?> <?php echo $che_v;  ?> style="background-color: #f7f2f2;">
            <?php
            $doctor_data=$this->db->get_where("staff", array('id' => $ainfo[0]['doctor']))->row();
            $doctor_d = $doctor_data->name." ".$doctor_data->surname;
                                                   // echo count($ainfo); ?>
                                                   <div class="chr_default <?php echo $chair_colors[($ainfo[0]['chair']-1)]; ?>">
                                                    <?php if($che_c > 0 && $field_date!=date('Y-m-d')){ ?>
                                                     <span style="color: #fff;" class="ar_int"><b>Arrived:</b> &nbsp;&nbsp;&nbsp;<input type="checkbox" id="arrivedstat<?php echo $ainfo[0]['even_id']; ?>" <?php if($ainfo[0]['appointment_status']=='Arrived'){ echo "checked='checked'"; } ?> name=""   onclick="getreadystat('Arrived','<?php echo $ainfo[0]['appointment_no']; ?>',<?php echo $ainfo[0]['patient_id'];?>,<?php echo $ainfo[0]['even_id'];?>);gopage()"></span>
                                                     <?php
                                                   }
                                                   ?>
                                                   <a href="javascript://" onclick="view_event(<?php echo $ainfo[0]['even_id']; ?>);">
                                                    <p><?php echo $ainfo[0]['patient_name'];?></p>
                                                    <p><?php echo $ainfo[0]['event_description'];?></p>
                                                    <p><strong>Doctor:</strong> <?php echo $doctor_d;?></p>
                                                  </a>
                                                </div>  
                                              </td> 
                                              <?php
                                            }  ?>
                                            <?php
                                            ?>
                                          <?php } ?>
                                        </tr>  
                                        <?php 
                                      } 
                                      ?> 
                                    </tbody>
                                  </table> 
                                  <script type="text/javascript">
                                    function gopage()
                                    {
                                      window.location.href="<?php echo base_url(); ?>/admin/patient/waitingroom";
                                    }
                                  </script> -->