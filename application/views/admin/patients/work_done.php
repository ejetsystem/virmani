<?php $patient_id = $patients[0]['id']; ?>
<style type="text/css">
    table {
        table-layout: fixed;
    }


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
    #shw_tooth_number{
        margin-bottom: 1rem;
    }
    p.texp {
        font-weight: 600;
        margin-top: 13px;
        margin-bottom: 0px;
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
    <div class="box box-light mt-20">
        <div class="box-body box-profile" id="refpatientdiv">
            <h4 class="form_title">Work Done Information</h4>  
            <hr class="border_hr">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover datatable" cellspacing="0" width="100%">
                    <thead>
                        <tr role="row" class="success table-info">
                            <th scope="col">Tooth Name</th>
                            <th scope="col">Work Done</th>
                            <th scope="col">Treatment Code</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($workdones as $workdone) { ?>
                        <tr id="row_<?php echo $workdone['id'] ?>">
                                <td><?php echo $workdone['print_tooth_name'] ?></td>
                                <td><?php echo $workdone['workdone_date'] ?></td>
                                <td><?php
                                    if (!empty($workdone['workdoneon'])) {
                                        echo $workdone['workdoneon'];
                                    } else {
                                        ?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" onclick="scheduleRequest('<?php echo $workdone['id'] ?>');"> Add Code</button>
    <?php } ?>
                                </td>
                                <td><?php echo $workdone['name'] ?></td>
                                <td>
                                    <a data-val="Category"  data-id="<?php echo $workdone['id'] ?>"  href="<?php echo base_url(); ?>admin/patients/getteethinfodelete/<?php echo $workdone['id'] ?>/<?php echo $patient_id ?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
<?php } ?>
                    </tbody>
                </table>
            </div>

            <h4 class="form_title">Work Done</h4>  
            <hr class="border_hr">

            <form action="<?php echo base_url(); ?>admin/patients/add_workdone_report" method="post" id="save_total_workdne">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <input type="hidden" name="patient_name" value="<?php echo $patients[0]['name']; ?>" class="form-control">
                <!--            <div class="row">
                                 
                                <div class="col-sm-3" style="display:none;">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="patient_name" value="<?php echo $patients[0]['name']; ?>" class="form-control" required>
                                    </div>
                                </div> 
                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tooth Number</label>
                                        <input type="text" name="tooth_number" id="tooth_number" value="" class="form-control" required readonly>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Notes & Diagnosis</label>
                                        <input type="text" name="notesdiagnosis" id="notesdiagnosis" value="" class="form-control" required readonly>
                                    </div>
                                </div>
                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Dated</label>
                                        <input type="text" name="workdone_date" class="form-control" value="<?php echo date('d/m/Y'); ?>" required readonly>
                                    </div>
                                </div>
                
                                <div class="col-sm-3" id="ld_div">
                                    <div class="form-group">
                                         <label>Work Done as On</label> 
                                        <label>Treatment Code</label>
                                         <input type="text" name="supplier" class="form-control" required> 
                                        <select name="workdoneon" id="workdoneon" class="form-control" onchange="choose_job(this.value);">
                                            <option value="0">-- Job -- </option>
                <?php foreach ($treatmentplans as $plandata) { ?>
                                                        <option value="<?php echo $plandata['id']; ?>"><?php echo ucwords($plandata['job']); ?></option>
<?php } ?>
                                        </select>
                                    </div>
                                </div>
                
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Special Notes</label>
                                        <textarea class="form-control" rows="4" name="wrk_special_notes"></textarea>
                                    </div>
                                </div>
                            </div>-->

                <input type="hidden" name="wrk_apt_id" id="wrk_apt_id">
                <div class="clear"></div>
                <input type="hidden" name="wk_patient_id" value="<?php echo $patient_id; ?>">
                <div class="col-md-12">
                    <div class="row">
                                         <!-- <input type="checkbox" name="" value="on" id="chkdiv1" onclick="getDatavalue_wr(this.value)"> Milk Teeth<br/> -->
                        <div class="col-md-6" id="loadteeeth_wk">
                            <label>Tooth Notation</label>
                            <select class="form-control" name="teethcat_id" onchange="gettecchnumbers_new(this.value)">
                                <?php
                                $this->db->select('*')->from('teeth_category');
                                $this->db->order_by("teeth_category_name", "asc");
                                $query1 = $this->db->get();
                                $teethar_cat = $query1->result_array();
                                foreach ($teethar_cat as $key => $teetharcat_data) {
                                    if ($teetharcat_data['id'] <= 5) {
                                        ?>
                                        <option value="<?php echo $teetharcat_data['id']; ?>"  <?php
                                        if ($teetharcat_data['id'] == '4') {
                                            echo "selected='selected'";
                                        }
                                        ?>><?php echo $teetharcat_data['teeth_category_name']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                            </select>
                        </div>
                        <div class="col-md-6 mt-20">
                            <input type="checkbox" name="" value="on" id="chkdiv1" onclick="getDatavalue_wr(this.value)"> Milk Teeth<br/>
                        </div>
                    </div>
                    <div class="newteeth" id="container_new">
                        <input type="hidden" name="print_tooth_name" id="tooth_no_note" value="">
                        <input type="hidden" name="print_tooth_id" required="" id="teethsid" value=""> 
                        <ul id="continents1_new">
                            <?php
                            $i = 1;
                            $this->db->select('*')->from('teeth');
                            $this->db->where('teeth_cat', 4);
                            $query = $this->db->get();
                            $teethar = $query->result_array();
                            foreach ($teethar as $key => $teethar_data) {
                                ?> 

                                <li class="teethord<?php echo $i; ?>" ><a href="#"  title="" onclick="getRecord_teechinfo_new(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
                                <?php
                                $i++;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="table-responsive" id="loadprescriptioninfo">
                    <?php
                    $SQL = $this->db->query('select * FROM `prescription` WHERE patient_id ="' . $patient_id . '" and workdone_id="0" order by id desc');
                    $resultlist = $SQL->result_array();
                    $tnrows = $SQL->num_rows();
                    $i = 1;
                    foreach ($resultlist as $presc) {
                        $brand_name = $this->db->get_where("medicine_brand", array('id' => $presc["medicine_brand_id"]))->row();
                        $medicine_category = $this->db->get_where("medicine_category", array('id' => $presc["medicine_category_id"]))->row();
                        ?>
                        <h3>Prescription</h3><?php $total_tbls = $presc['total_tablets'] * $presc['days']; ?>

                        <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">

                            <tr>
                                <td><label>Tablet:</label><?php echo $presc['medicine']; ?> (<?php echo $brand_name->medicine_brand; ?>) (<?php echo $presc['instruction']; ?>) (<?php echo $total_tbls; ?> tablets total)    <p>(<?php echo $medicine_category->medicine_category; ?>) (<?php echo $presc['medicine_company']; ?>)</p> </td> </tr>

                            <tr>
                                <td>  <label>Basic Salt:</label><span class="sb-1"><?php echo $presc['basic_salt']; ?></span></td> 
                            </tr>

                            <tr>
                                <td> <label>Dosage:</label><span class="sb-1"><?php echo $presc['dosage']; ?> for <?php echo $presc['days']; ?>&nbsp;Days</span></td></tr>
                            <tr>
                                <td> 
                                    <label>description:</label>
                                    <span class="sb-1"><?php echo $presc['description']; ?></span>
                            <?php } ?>
                            </td>
                            </tr>      </table> 

                </div>



                <div class="clear"></div>
                <div class="row">
                    <div id="show_toothnumber" style="display: none"></div>
                        <div id="shw_tooth_number">
                            <p class="texp">Tooth Number: <span class="tre-code"></span></p>
                            <span id="tooth_no_note_view"></span>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Notes & Diagnosis</label>
                                <textarea class="form-control" rows="4" name="notesdiagnosis"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mt-20">
                            <div class="payment_bxblock">
                                <h4><strong>Payment</strong></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Estimate</label>
                                            <input name="estimate" id="estimate" placeholder="" type="text" class="form-control" value=""  onkeypress="return isNumberKey(event)"> 
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Amount Due for Todays's Work.</label>
                                            <input name="amt_due_current_work" id="amt_due_current_work" placeholder="" type="text" class="form-control" value=""  onkeypress="return isNumberKey(event)"> 
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>If Any.</label>
                                            <input name="if_any_amt" placeholder="" type="text" class="form-control" value="0" onkeypress="return isNumberKey(event)">
                                        </div>
                                    </div>
                                    <?php
                                    $prev_amount = $this->db->get_where("partial_payments", array('wk_patient_id' => $patient_id))->row();
                                    if ($prev_amount->pending_amount) {
                                        $prev_amt = $prev_amount->pending_amount;
                                    } else {
                                        $prev_amt = "0";
                                    }
                                    ?>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Prev Bal Amt Due</label>
                                            <input name="prev_bal_amt" placeholder="" type="text" class="form-control" value="<?php echo $prev_amt; ?>" onkeypress="return isNumberKey(event)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adv.</label>
                                            <input name="adv_amt" placeholder="" type="text" class="form-control" value="0" onkeypress="return isNumberKey(event)">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 mt-20">
                            <h4><strong>&nbsp;</strong></h4>
                            <div class="form-group">
                                <label><strong>By Doctor</strong></label>
                                <!-- <input type="text" name="supplier" class="form-control" required> -->
                                <select name="workdone_doc" id="workdone_doc" class="form-control" required>
                                    <option value="">Select Doctor</option>
                                    <?php foreach ($doctors as $dkey => $dvalue) { ?>
                                        <option value="<?php echo $dvalue->id ?>"><?php echo $dvalue->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="payment_bxblock pyatm">
                                <h4><strong>Treatment</strong></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="treatment_status" id="observation" value="0" >
                                            <label class="form-check-label" for="observation">
                                                Observation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="treatment_status" id="completed" value="1" >
                                            <label class="form-check-label" for="completed">
                                                Completed
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="treatment_status" id="incompleted" value="2" >
                                            <label class="form-check-label" for="incompleted">
                                                Incompleted
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="align-center workdone_buttons">
                                    <!--                                <div id="act">
                                                                        <a href="#prescription" class="btn btn-primary" data-toggle="tab" aria-expanded="true">Edit</a>
                                                                    </div>-->

                                    <!--<a href="#" class="btn btn-purple" data-toggle="tooltip" title="" onclick="getRecord_id('20')" data-original-title="Add Prescription">Prescription</a>-->
                                    <input type="submit" name="" value="Submit" class="btn btn-primary">

                                    <!--<a href="#" class="btn btn-purple" data-toggle="tooltip" title="" onclick="getappointment_id('20')" data-original-title="Add Prescription">Next Appointment</a>-->

                                    <!--<a hre  f="#appointments" class="btn btn-dgreen" data-toggle="tab" aria-expanded="true">Appointment's</a>-->


                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class="clear"></div>





                </form>


            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="treatmentCode" tabindex="-1" role="dialog" aria-labelledby="treatmentCodeLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form name="treamentCodeFrm" id="treamentCodeFrm" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                                                    ;
                                                    ?></span>
                                                        <ul class="nested">
                                                            <?php
                                                            $query_check2 = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='" . $res_checkv1['id'] . "'");
                                                            $res_check2 = $query_check2->result_array();
                                                            foreach ($res_check2 as $res_checkv2) {
                                                                ?> 
                                                                <li style="cursor: pointer;"><span  class="caret"  onclick="getvalue1('<?php echo $res_checkv['category'] . ' -> ' . $res_checkv1['category'] . ' -> ' . $res_checkv2['category']; ?>',<?php echo $res_checkv2['id']; ?>,<?php echo $res_checkv2['amount']; ?>)"><?php echo $res_checkv2['category'];
                                                            ;
                                                            ?></span>

                                                                    <ul class="nested">
                                                                        <?php
                                                                        $query_check3 = $this->db->query("SELECT * FROM `diagnosis_data` WHERE parent='" . $res_checkv2['id'] . "'");
                                                                        $res_check3 = $query_check3->result_array();
                                                                        foreach ($res_check3 as $res_checkv3) {
                                                                            ?> 
                                                                            <li style="cursor: pointer;"><span  onclick="getvalue1('<?php echo $res_checkv['category'] . ' -> ' . $res_checkv1['category'] . ' -> ' . $res_checkv2['category'] . ' -> ' . $res_checkv3['category']; ?>',<?php echo $res_checkv3['id']; ?>,<?php echo $res_checkv3['amount']; ?>)"><?php echo $res_checkv3['category']; ?></span>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Name</label>
                                <input type="text" class="form-control job_name" name="job_name" id="job_name1" value="">
                                <input type="hidden" class="form-control" name="job_id" id="job_id1">
                                <input type="hidden" class="form-control" name="workdone_id" id="workdone_id">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="submit_btn" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function getDatavalue_wr(a)
        {
            if ($('#chkdiv1').is(":checked"))
            {

                $.ajax({
                    url: '<?php echo base_url() ?>admin/patients/getteeth_new',
                    method: 'post',
                    data: {csrf_test_name: csrf_token},
                    success: function (response) {
                        $("#loadteeeth_wk").html(response);
                    }
                });
                $.ajax({
                    url: '<?php echo base_url() ?>admin/patients/getteethdata_new',
                    method: 'post',
                    data: {csrf_test_name: csrf_token},
                    success: function (response) {
                        $("#container_new").html(response);
                    }
                });

            } else
            {

                $.ajax({
                    url: '<?php echo base_url() ?>admin/patients/getteeth_per_new',
                    method: 'post',
                    data: {csrf_test_name: csrf_token},
                    success: function (response) {
                        $("#loadteeeth_wk").html(response);
                    }
                });
                $.ajax({
                    url: '<?php echo base_url() ?>admin/patients/getteethdata_per_new',
                    method: 'post',
                    data: {csrf_test_name: csrf_token},
                    success: function (response) {
                        $("#container_new").html(response);
                    }
                });


            }
        }
    </script>    

    <script type="text/javascript">

        function gettecchnumbers(a)
        {
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patient/getteethlist',
                type: "POST",
                data: {teeth_cat_id: a, csrf_test_name: csrf_token},
                success: function (data) {
                    //$("#teeth_data_div").show();
                    $("#teeth_data_div").html(data);
                }
            })
        }

        function gettecchnumbers_new(a)
        {
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patients/getteethlist_treatment',
                type: "POST",
                data: {teeth_cat_id: a, csrf_test_name: csrf_token},
                success: function (data) {
                    //$("#teeth_data_div").show();
                    // $("#teeth_data_div_treatment").html(data);

                    $("#container_new").html(data);

                }
            })
        } 
        function gettecchnumbers_treatment(a)
        {
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patients/getteethlist_treatment',
                type: "POST",
                data: {teeth_cat_id: a, csrf_test_name: csrf_token},
                success: function (data) {
                    //$("#teeth_data_div").show();
                    // $("#teeth_data_div_treatment").html(data);

                    $("#container").html(data);

                }
            })
        }


        function getRecord_teechinfo_new(id, b, img1)
        {

            $('#teeth_id').val(id);
            $('#teeth_nte').html(b);

            $('#teethsid').val(id);
            $.ajax({
                url: base_url + 'admin/patients/getteethnumber',
                type: "POST",
                data: {teethid: id, csrf_test_name: csrf_token},
                success: function (data) {

                    // var tcode = data;
                    document.getElementById('tooth_no_note_view').innerHTML = data;
                    document.getElementById('tooth_no_note').value = data;

                }
            })
            document.getElementById("show_toothnumber").style.display = "block";
            //holdModal('add_teethinfo');
        }

    </script>
    <script>
        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function () {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }
        
        function scheduleRequest(id) {
            $('#workdone_id').val(id);
            $('#treatmentCode').modal('show');
        }
        $(document).ready(function () {
        $('#submit_btn').click(function () {

            var fd = new FormData($('#treamentCodeFrm')[0]);
            fd.append('csrf_test_name', csrf_token);

            // AJAX request
            $.ajax({
                url: '<?php echo base_url(); ?>admin/patients/add_treatmentCode',
                type: 'post',
                data: fd,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {

                    if (data.status == "fail") {
                         window.location.reload(true);
                    } else {
                        
                        window.location.reload(true);
                    }
                },
                error: function () {
                    //  alert("Fail")
                }
            });
        });
    });
    </script>


