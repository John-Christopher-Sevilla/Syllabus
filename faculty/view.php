<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Faculty</title>
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>
    
      <div class="contaier">
<?php
 include '../core/process.php';
  

  if(isset($_GET['file_id'])){
    $file_id = $_GET['file_id'];

    $sql = "SELECT * FROM `clo` a JOIN `core` b JOIN `course_outline` c JOIN `course_req` d JOIN `others` e JOIN `references` f ON a.file_id LIKE '$file_id' AND b.file_id LIKE '$file_id' AND c.file_id LIKE '$file_id' AND d.file_id LIKE '$file_id' AND e.file_id LIKE '$file_id' AND f.file_id LIKE '$file_id'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if($count == 0){
      echo "<div class='alert alert-secondary' role='alert'>No such file!</div>";
    }else{
      while($row = mysqli_fetch_array($query)){
        $college = $row['college'];
        $dept = $row['department'];
        $prog = $row['program'];
        $cc = $row['course_code'];
        $term = $row['term'];
        $sched = $row['class_sched'];
        $rev_date = $row['rev_date'];
        $co_req = $row['co_requisite'];
        $credit = $row['credit'];
        $pre_req = $row['pre_requisite'];
        $course_place = $row['course_place'];
        $course_type = $row['course_type'];
        $faculty = $row['faculty'];
        $consult = $row['consult'];
        $cont_num = $row['contact_details'];
        $dean = $row['dean'];
        $head = $row['dept_chair'];
        $clo1 = $row['clo1'];
        $clo2 = $row['clo2'];
        $clo3 = $row['clo3'];
        $p1_1 = $row['p1_1'];
        $p1_2 = $row['p1_2'];
        $p1_3 = $row['p1_3'];
        $p2_1 = $row['p2_1'];
        $p2_2 = $row['p2_2'];
        $p2_3 = $row['p2_3'];
        $p3_1 = $row['p3_1'];
        $p3_2 = $row['p3_2'];
        $p3_3 = $row['p3_3'];
        $p4_1 = $row['p4_1'];
        $p4_2 = $row['p4_2'];
        $p4_3 = $row['p4_3'];
        $desc = $row['coure_desc'];
        $row1 = $row['row1'];
        $row2 = $row['row2'];
        $row3 = $row['row3'];
        $row4 = $row['row4'];
        $row5 = $row['row5'];
        $row6 = $row['row6'];
        $row7 = $row['row7'];
        $row8 = $row['row8'];
        $row9 = $row['row9'];
        $row10 = $row['row10'];
        $row11 = $row['row11'];
        $row12 = $row['row12'];
        $row13 = $row['row13'];
        $row14 = $row['row14'];
        $row15 = $row['row15'];
        $type_req1 = $row['type_req1'];
        $type_req2 = $row['type_req2'];
        $type_req3 = $row['type_req3'];
        $spec_req1 = $row['spec_req1'];
        $spec_req2 = $row['spec_req2'];
        $spec_req3 = $row['spec_req3'];
        $sub1 = $row['sub1'];
        $sub2 = $row['sub2'];
        $sub3 = $row['sub3'];
        $due_at1 = $row['due_at1'];
        $due_at2 = $row['due_at2'];
        $due_at3 = $row['due_at3'];
        $prim1 = $row['prim1'];
        $prim2 = $row['prim2'];
        $prim3 = $row['prim3'];
        $prim4 = $row['prim4'];
        $prim5 = $row['prim5'];
        $supp1 = $row['supp1'];
        $supp2 = $row['supp2'];
        $supp3 = $row['supp3'];
        $supp4 = $row['supp4'];
        $supp5 = $row['supp5'];
        $web1 = $row['web1'];
        $web2 = $row['web2'];
        $web3 = $row['web3'];
        $web4 = $row['web4'];
        $web5 = $row['web5'];
        $gcode = $row['gcode'];
        $support = $row['support'];
        $created_at =$row['created_at'];
?>
<form action="../core/process.php" method="POST">
      <input type="hidden" name="file_id" value="<?php echo $id; ?>" class="form-control">
      <table class="table">
        <tr>
          <th colspan="2" rowspan="5">
            <img src="../img/1logo.png" alt="" style="width: 120px; height: 100px; float: left;">
            BICOL UNIVERSITY <br>
            Legazpi City
          </th>
          <th>Course Code:</th>
          <td colspan="3"><input type="hidden" name="cc" class="form-control" value="<?php echo $cc; ?>"><?php echo $cc; ?></td>

        </tr>
        <tr>
          <th>Term</th>
          <td><input type="hidden" name="term" class="form-control" value="<?php echo $term; ?>"><?php echo $term; ?></td>
          <th>Class Schedule</th>
          <td><input type="hidden" name="class_sched" class="form-control" value="<?php echo $sched; ?>"><?php echo $sched; ?></td>
        </tr>
        <tr>
          <th>Revision Date</th>
          <td><input type="hidden" name="rev_date" class="form-control" value="<?php echo $rev_date; ?>"><?php echo $rev_date; ?></td>
          <th>Co-Requisite/s</th>
          <td><input type="hidden" name="co_req" class="form-control" value="<?php echo $co_req; ?>"><?php echo $co_req; ?></td>
        </tr>
        <tr>
          <th>Credit</th>
          <td><input type="hidden" name="credit" class="form-control" value="<?php echo $credit; ?>"><?php echo $credit; ?></td>
          <th>Pre-Requisite/s</th>
          <td><input type="hidden" name="pre_req" class="form-control" value="<?php echo $pre_req; ?>"><?php echo $pre_req; ?></td>
        </tr>
        <tr>
          <th>Course Placement</th>
          <td><input type="hidden" name="course_place" class="form-control" value="<?php echo $course_place; ?>"><?php echo $course_place; ?></td>
          <th>Type of Course</th>
          <td><input type="hidden" name="course_type" class="form-control" value="<?php echo $course_type; ?>"><?php echo $course_type; ?></td>
        </tr>
        <tr>
          <th>College:</th>
          <td><input type="hidden" name="college" class="form-control" value="<?php echo $college; ?>"><?php echo $college; ?></td>
          <th>Faculty</th>
          <td><input type="hidden" name="faculty" class="form-control" value="<?php echo $faculty; ?>"><?php echo $faculty; ?></td>
          <th>Consultation Hours</th>
          <td><input type="hidden" name="consult" class="form-control" value="<?php echo $consult; ?>"><?php echo $consult; ?></td>
        </tr>
        <tr>
          <th>Department:</th>
          <td><input type="hidden" name="dept" class="form-control" value="<?php echo $dept; ?>"><?php echo $dept; ?></td>
          <th>Contact Details</th>
          <td><input type="hidden" name="cont_num" class="form-control" value="<?php echo $cont_num; ?>"><?php echo $cont_num; ?></td>
          <th rowspan="2" style="vertical-align: middle;">Dean/Director</th>
          <td rowspan="2" style="vertical-align: middle;"><input type="hidden" name="dean" class="form-control" value="<?php echo $dean; ?>"><?php echo $dean; ?></td>
        </tr>
        <tr>
          <th>Program</th>
          <td><input type="hidden" name="program" class="form-control" value="<?php echo $prog; ?>"><?php echo $prog; ?></td>
          <th>Department Chair</th>
          <td><input type="hidden" name="dept_chair" class="form-control" value="<?php  echo $head; ?>"><?php  echo $head; ?></td>
        </tr>
        <tr>
          <th>Vision</th> 
          <td><p style="text-align: justify;">A world-class university producing leaders and change agents for social transformation and development</p></td>
          <th>Core Values</th>
          <td colspan="3"><p style="text-align: justify;">Scholarship, Leadership, Character, Service</p></td>
        </tr>
        <tr>
          <th>Mission</th>
          <td><p style="text-align: justify;">Give professional and technical training, and provide advanced and specialized instruction in literature, philosophy, the sciences, and arts besides providing for the promotion of scientific and technological researches (RA5521, Section 3.0)</p></td>
          <th>Quality Policy</th>
          <td colspan="3"><p style="text-align: justify;">Bicol University commits to continually strive for excellence in instruction, research and extension by meeting the highest level of clientele satisfaction and adhering to quality standards and applicable statutory and regulatory requirements.</p></td>
        </tr>
      </table>

      <div class="txt-area">
        <p><b>Institunional Learning Outcomes: </b></p>
        <p>Every BU graduate should:</p>
        <ol>
          <li>
            Demonstrate critical thinking and integrative skills to solve problems and to support lifelong learning;
          </li><br>
          <li>
            Communicate effectively and appropriately orally and in writing for various purposes with the responsible use ICT tools;
          </li><br>
          <li>
            Collaborate with diverse people ethically and with mastery of knowledge and skills in given disciplines; and 
          </li><br>
          <li>
            Create knowledge and innovation to promote inclusive development as well as globalization.
          </li>
        </ol>
      </div>
      <div class="txt-area">
        <p><b>Program Learning Outcomes: </b></p>
        <ol>
          <li>
            Apply knowledge of computing, science, and mathematics appropriate to the discipline.
          </li><br>
          <li>
            Understand best practices and standards and their applications
          </li><br>
          <li>
            Identify and analyze user needs and take them into account in the selection, creation, evaluation and evaluation of computer-based systems.
          </li><br>
          <li>
            Design, implement, and evaluate computer-based systems, processes, components, or programs to meet desired needs and requirements under various constraints
          </li>
        </ol>
      </div>
      <div class="txt-area">
        <p><b>Course Description</b></p>
        <textarea hidden name="desc" class="form-control" ><?php echo $desc; ?></textarea>
        <p style="text-indent: 50px;">
          <?php echo $desc; ?>
        </p>
      </div>
      <br>
      <div class="txt-area">
        <p>
          <b>Course Learning Outcomes:</b>
          <!-- <button type="button" id="addCol" name="add" class="btn btn-primary" style="float: right;" onclick="newCol()"><span class="material-icons" style="vertical-align: middle;">add</span>Add column</button>
          <button type="button" id="add" name="add" class="btn btn-primary" style="float: right; margin-right: 5px;" onclick="newRow()"><span class="material-icons" style="vertical-align: middle;">add</span>Add row</button> -->
         
        </p>
        <br>
        <p id="txt" style="margin-top: 10px; margin-bottom: 10px;"></p>
      </div>
      <table class="table" style="align-content: center;">
        <tr>
          <th class="tbl">
            Course Learning <br> Outcomes
          </th>
          <th>
            P1
          </th>
          <th>
            P2
          </th>
          <th>
            P3
          </th>
          <th>
            P4
          </th>
        </tr>
        <tr>
          <td>
            <input type="hidden" name="col1" id="" class="form-control" value="<?php echo $clo1; ?>"><?php echo $clo1; ?><br>
            <input type="hidden" name="col2" id="" class="form-control" value="<?php echo $clo2; ?>"><?php echo $clo2; ?><br>
            <input type="hidden" name="col3" id="" class="form-control" value="<?php echo $clo3; ?>"><?php echo $clo3; ?>
            <span id="col"></span>
          </td>
          <td>
            <input type="hidden" name="p1_1" id="" class="form-control" value="<?php echo $p1_1; ?>"><?php echo $p1_1; ?><br>
            <input type="hidden" name="p1_2" id="" class="form-control" value="<?php echo $p1_2; ?>"><?php echo $p1_2; ?><br>
            <input type="hidden" name="p1_3" id="" class="form-control" value="<?php echo $p1_3; ?>"><?php echo $p1_3; ?>
            <span id="p1"></span>
          </td>
          <td>
            <input type="hidden" name="p2_1" id="" class="form-control" value="<?php echo $p2_1; ?>"><?php echo $p2_1; ?><br>
            <input type="hidden" name="p2_2" id="" class="form-control" value="<?php echo $p2_2; ?>"><?php echo $p2_2; ?><br>
            <input type="hidden" name="p2_3" id="" class="form-control" value="<?php echo $p2_3; ?>"><?php echo $p2_3; ?>
            <span id="p2"></span>
          </td>
          <td>
            <input type="hidden" name="p3_1" id="" class="form-control" value="<?php echo $p3_1; ?>"><?php echo $p3_1; ?><br>
            <input type="hidden" name="p3_2" id="" class="form-control" value="<?php echo $p3_2; ?>"><?php echo $p3_2; ?><br>
            <input type="hidden" name="p3_3" id="" class="form-control" value="<?php echo $p3_3; ?>">
            <span id="p3"></span>
          </td>
          <td>
            <input type="hidden" name="p4_1" id="" class="form-control" value="<?php echo $p4_1; ?>"><?php echo $p4_1; ?><br>
            <input type="hidden" name="p4_2" id="" class="form-control" value="<?php echo $p4_2; ?>"><?php echo $p4_2; ?><br>
            <input type="hidden" name="p4_3" id="" class="form-control" value="<?php echo $p4_3; ?>"><?php echo $p4_3; ?>
            <span id="p4"></span>
          </td>
        </tr>
      </table>
      <p style="text-align: center;"><i style="font-size: 10pt;">Legend: I - Introduced concepts/principles; P - Practice with supervision; D - Demonstrated across different settings with minimal supervision</i></p>
      <br>
      <div class="txt-area">
        <p>
          <b>
            Course Outline:
          </b>
        </p>
      </div>
      <br>
      <table class="table" id="tbl_crs">
        <tr>
          <th>
            Specific Learning Outcomes
            <!-- <button type="button" onclick="sol()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Learning Content 
            <!-- <button type="button" onclick="lc()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Instructional Delivery
            <!-- <button type="button" onclick="ins_del()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Instructional Resources
            <!-- <button type="button" onclick="ins_rec()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Performance Standard
            <!-- <button type="button" onclick="ps()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Assessment Tasks/Outputs
            <!-- <button type="button" onclick="assess()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Time Allotment
            <!-- <button type="button" onclick="allot()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
        </tr>
        <?php echo $row1; ?>
        <?php echo $row2; ?>
        <?php echo $row3; ?>
        <?php echo $row4; ?>
        <?php echo $row5; ?>
        <?php echo $row6; ?>
        <?php echo $row7; ?>
        <?php echo $row8; ?>
        <?php echo $row9; ?>
        <?php echo $row10; ?>
        <?php echo $row11; ?>
        <?php echo $row12; ?>
        <?php echo $row13; ?>
        <?php echo $row14; ?>
        <?php echo $row15; ?>
        <!-- <tr>
          <td>
            
            <input type="text" name="sol1" class="form-control"><br>
            <input type="text" name="sol2" class="form-control"><br>
            <input type="text" name="sol3" class="form-control"><br>
            <input type="text"  name="sol4" class="form-control"><br>
            <input type="text"  name="sol5" class="form-control"><br>
            <input type="text"  name="sol6" class="form-control"><br>
            <input type="text"  name="sol7" class="form-control"><br>
            <input type="text"  name="sol8" class="form-control"><br>
            <input type="text"  name="sol9" class="form-control"><br>
            <input type="text"  name="sol10" class="form-control"><br>
            <input type="text"  name="sol11" class="form-control"><br>
            <input type="text"  name="sol12" class="form-control"><br>
            <input type="text"  name="sol13" class="form-control"><br>
            <input type="text"  name="sol14" class="form-control"><br>
            <input type="text"  name="sol15" class="form-control">
            <span id="sol"></span>
          </td>
          <td>

          <input type="text" name="lc1" class="form-control"><br>
            <input type="text" name="lc2" class="form-control"><br>
            <input type="text" name="lc3" class="form-control"><br>
            <input type="text"  name="lc4" class="form-control"><br>
            <input type="text"  name="lc5" class="form-control"><br>
            <input type="text"  name="lc6" class="form-control"><br>
            <input type="text"  name="lc7" class="form-control"><br>
            <input type="text"  name="lc8" class="form-control"><br>
            <input type="text"  name="lc9" class="form-control"><br>
            <input type="text"  name="lc10" class="form-control"><br>
            <input type="text"  name="lc11" class="form-control"><br>
            <input type="text"  name="lc12" class="form-control"><br>
            <input type="text"  name="lc13" class="form-control"><br>
            <input type="text"  name="lc14" class="form-control"><br>
            <input type="text"  name="lc15" class="form-control">
            <span id="lc"></span>
          </td>
          <td>

          <input type="text" name="ins_del1" class="form-control"><br>
            <input type="text" name="ins_del2" class="form-control"><br>
            <input type="text" name="ins_del3" class="form-control"><br>
            <input type="text"  name="ins_del4" class="form-control"><br>
            <input type="text"  name="ins_del5" class="form-control"><br>
            <input type="text"  name="ins_del6" class="form-control"><br>
            <input type="text"  name="ins_del7" class="form-control"><br>
            <input type="text"  name="ins_del8" class="form-control"><br>
            <input type="text"  name="ins_del9" class="form-control"><br>
            <input type="text"  name="ins_del10" class="form-control"><br>
            <input type="text"  name="ins_del11" class="form-control"><br>
            <input type="text"  name="ins_del12" class="form-control"><br>
            <input type="text"  name="ins_del13" class="form-control"><br>
            <input type="text"  name="ins_del14" class="form-control"><br>
            <input type="text"  name="ins_del15" class="form-control">
            <span id="ins_del"></span>
          </td>
          <td>

          <input type="text" name="ins_rec1" class="form-control"><br>
            <input type="text" name="ins_rec2" class="form-control"><br>
            <input type="text" name="ins_rec3" class="form-control"><br>
            <input type="text"  name="ins_rec4" class="form-control"><br>
            <input type="text"  name="ins_rec5" class="form-control"><br>
            <input type="text"  name="ins_rec6" class="form-control"><br>
            <input type="text"  name="ins_rec7" class="form-control"><br>
            <input type="text"  name="ins_rec8" class="form-control"><br>
            <input type="text"  name="ins_rec9" class="form-control"><br>
            <input type="text"  name="ins_rec10" class="form-control"><br>
            <input type="text"  name="ins_rec11" class="form-control"><br>
            <input type="text"  name="ins_rec12" class="form-control"><br>
            <input type="text"  name="ins_rec13" class="form-control"><br>
            <input type="text"  name="ins_rec14" class="form-control"><br>
            <input type="text"  name="ins_rec15" class="form-control">
            <span id="ins_rec"></span>
          </td>
          <td>

          <input type="text" name="ps1" class="form-control"><br>
            <input type="text" name="ps2" class="form-control"><br>
            <input type="text" name="ps3" class="form-control"><br>
            <input type="text"  name="ps4" class="form-control"><br>
            <input type="text"  name="ps5" class="form-control"><br>
            <input type="text"  name="ps6" class="form-control"><br>
            <input type="text"  name="ps7" class="form-control"><br>
            <input type="text"  name="ps8" class="form-control"><br>
            <input type="text"  name="ps9" class="form-control"><br>
            <input type="text"  name="ps10" class="form-control"><br>
            <input type="text"  name="ps11" class="form-control"><br>
            <input type="text"  name="ps12" class="form-control"><br>
            <input type="text"  name="ps13" class="form-control"><br>
            <input type="text"  name="ps14" class="form-control"><br>
            <input type="text"  name="ps15" class="form-control">
            <span id="ps"></span>
          </td>
          <td>

          <input type="text" name="assess1" class="form-control"><br>
            <input type="text" name="assess2" class="form-control"><br>
            <input type="text" name="assess3" class="form-control"><br>
            <input type="text"  name="assess4" class="form-control"><br>
            <input type="text"  name="assess5" class="form-control"><br>
            <input type="text"  name="assess6" class="form-control"><br>
            <input type="text"  name="assess7" class="form-control"><br>
            <input type="text"  name="assess8" class="form-control"><br>
            <input type="text"  name="assess9" class="form-control"><br>
            <input type="text"  name="assess10" class="form-control"><br>
            <input type="text"  name="assess11" class="form-control"><br>
            <input type="text"  name="assess12" class="form-control"><br>
            <input type="text"  name="assess13" class="form-control"><br>
            <input type="text"  name="assess14" class="form-control"><br>
            <input type="text"  name="assess15" class="form-control">
            <span id="assess"></span>
          </td>
          <td>

          <input type="text" name="allot1" class="form-control"><br>
            <input type="text" name="allot2" class="form-control"><br>
            <input type="text" name="allot3" class="form-control">
            <input type="text"  name="allot4" class="form-control"><br>
            <input type="text"  name="allot5" class="form-control"><br>
            <input type="text"  name="allot6" class="form-control"><br>
            <input type="text"  name="allot7" class="form-control"><br>
            <input type="text"  name="allot8" class="form-control"><br>
            <input type="text"  name="allot9" class="form-control"><br>
            <input type="text"  name="allot10" class="form-control"><br>
            <input type="text"  name="allot11" class="form-control"><br>
            <input type="text"  name="allot12" class="form-control"><br>
            <input type="text"  name="allot13" class="form-control"><br>
            <input type="text"  name="allot14" class="form-control"><br>
            <input type="text"  name="allot15" class="form-control">
            <span id="allot"></span>
          </td>
        </tr> -->
      </table>
      <br>
      <div class="txt-area">
        <p>
          <b>
            Course Requirements:
          </b>
        </p>
      </div>
      <table class="table">
        <tr>
          <th>
            Type of Requirements
          </th>
          <th>
            Specific Requirements
          </th>
          <th>
            Modality of Submision
          </th>
          <th>
            Due Date
          </th>
        </tr>
        <tr>
          <td>
            <input type="text" name="type1" id="" class="form-control-plaintext" value="<?php echo $type_req1; ?>"><br>
            <input type="text" name="type2" id="" class="form-control-plaintext" value="<?php echo $type_req2; ?>"><br>
            <input type="text" name="type3" id="" class="form-control-plaintext" value="<?php echo $type_req3; ?>">
          </td>
          <td>
            <input type="text" name="spec1" id="" class="form-control-plaintext" value="<?php echo $spec_req1; ?>"><br>
            <input type="text" name="spec2" id="" class="form-control-plaintext" value="<?php echo $spec_req2; ?>"><br>
            <input type="text" name="spec3" id="" class="form-control-plaintext" value="<?php echo $spec_req3; ?>">
          </td>
          <td>
            <input type="text" name="sub1" id="" class="form-control-plaintext" value="<?php echo $sub1; ?>"><br>
            <input type="text" name="sub2" id="" class="form-control-plaintext" value="<?php echo $sub2; ?>"><br>
            <input type="text" name="sub3" id="" class="form-control-plaintext" value="<?php echo $sub3; ?>">
          </td>
          <td>
            <input type="text" name="due1" id="" class="form-control-plaintext" value="<?php echo $due_at1; ?>"><br>
            <input type="text" name="due2" id="" class="form-control-plaintext" value="<?php echo $due_at2; ?>"><br>
            <input type="text" name="due3" id="" class="form-control-plaintext" value="<?php echo $due_at3; ?>">
          </td>
        </tr>
      </table>
      <div class="txt-area">
        <p>
          <b>
            Course Assessment:
          </b>
        </p>
      </div>
      <table class="table">
        <tr>
          <th colspan="4">BU Grading System</th>
        </tr>
      </table>
      <table class="table">
        <thead>
          <tr>
            <th>
              <i>Midterm/Tentative Final Grade:</i>
            </th>
            <th></th>
            <th></th>
            <th>
              <i>System of Computing Grades:</i>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Discussion Forums <br>
              Lesson Activities/Quizzes/Assignments <br>
              Major Exam <br>
              Laboratory Activities
            </td>
            <td></td>
            <td>
              10% <br>
              25% <br>
              35% <br>
              30%
            </td>
            <td style="vertical-align: middle;">
              Final Grade = (40%) (Midterm) + (60%) (Tent. Final)
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <div class="txt-area">
        <p>
          <b>
            References:
          </b>
        </p>
        <p>
          <u>Primary:</u>
          <!-- <button type="button" class="btn" style="float: right;" onclick="primary()" ><span class="material-icons">add</span></button> -->
          <ol>
            <li>
              <input type="text" name="prim1" id="" class="form-control-plaintext" value="<?php echo $prim1; ?>">
            </li><br>
            <li>
              <input type="text" name="prim2" id="" class="form-control-plaintext" value="<?php echo $prim2; ?>">
            </li><br>
            <li>
              <input type="text" name="prim3" id="" class="form-control-plaintext" value="<?php echo $prim3; ?>">
            </li><br>
            <li>
              <input type="text" name="prim4" id="" class="form-control-plaintext" value="<?php echo $prim4; ?>">
            </li><br>
            <li>
              <input type="text" name="prim5" id="" class="form-control-plaintext" value="<?php echo $prim5; ?>">  
            </li>
            <!-- <input type="text" text name="prim6" id="" class="form-control">
            <input type="text" text name="prim7" id="" class="form-control">
            <input type="text" text name="prim8" id="" class="form-control">
            <input type="text" text name="prim9" id="" class="form-control">
            <input type="text" text name="prim10" id="" class="form-control"> -->
            <span id="rep"></span>
          </ol>
        </p>
        <p>
          <u>Supplementary:</u>
          <!-- <button type="button" onclick="supp()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          <ol>
            <li>
              <input type="text" name="supp1" id="" class="form-control-plaintext" value="<?php echo $supp1; ?>">
            </li><br>
            <li>
              <input type="text" name="supp2" id="" class="form-control-plaintext" value="<?php echo $supp2; ?>">
            </li><br>
            <li>
              <input type="text" name="supp3" id="" class="form-control-plaintext" value="<?php echo $supp3; ?>">
            </li><br>
            <li>
              <input type="text"  name="supp4" id="" class="form-control-plaintext" value="<?php echo $supp4; ?>">
            </li><br>
            <li>
              <input type="text"  name="supp5" id="" class="form-control-plaintext" value="<?php echo $supp5; ?>">
            </li>
            <!-- <input type="text" text name="supp6" id="" class="form-control">
            <input type="text" text name="supp7" id="" class="form-control">
            <input type="text" text name="supp8" id="" class="form-control">
            <input type="text" text name="supp9" id="" class="form-control">
            <input type="text" text name="supp10" id="" class="form-control">
            <span id="supp"></span> -->
          </ol>
        </p>
        <p>
          <u>Websites:</u>
          <!-- <button type="button" onclick="web()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
        </p>
        <ol>
          <li>
            <input type="text" name="web1" id="" class="form-control-plaintext" value="<?php echo $web1; ?>">
          </li><br>
          <li>
            <input type="text" name="web2" id="" class="form-control-plaintext" value="<?php echo $web2; ?>">
          </li><br>
          <li>
            <input type="text" name="web3" id="" class="form-control-plaintext" value="<?php echo $web3; ?>">
          </li><br>
          <li>
            <input type="text"  name="web4" id="" class="form-control-plaintext" value="<?php echo $web4; ?>">
          </li><br>
          <li>
            <input type="text"  name="web5" id="" class="form-control-plaintext" value="<?php echo $web5; ?>">
          </li>
          <!-- <input type="text" text name="web6" id="" class="form-control">
          <input type="text" text name="web7" id="" class="form-control">
          <input type="text" text name="web8" id="" class="form-control">
          <input type="text" text name="web9" id="" class="form-control">
          <input type="text" name="web10" class="form-control">
          <span id="web"></span> -->
        </ol>
      </div>
      <br>
      <div class="txt-area">
        <p>
          <b>
            Course Policies:
          </b>
        </p>
        <p>
          <b>
            Academic Integrity Policy:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          For this course, the Honor Code is that there will be no plagiarizing on written work and no cheating on exams. Proper citation must be given to authors whose works were used in the process of developing instructional materials and learning in this course. If a student is caught cheating on an exam, he or she will be given zero mark for the exam. If a student is caught cheating twice, the student will be referred to the Office of Student Services and be given a failing grade in accordance with the guidelines as stated in the BU Students Handbook.
        </p>
        <p>
          <b>
          Policies on Absences and Tardiness:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          According to CHED policy, the total number of absences by the students should not be more than 20% of the total number of meetings or 7 Hours for a two-unit-course. Students incurring more than 7 hours of unexcused absences automatically gets a failing grade regardless of class standing. This policy is applicable only for residential (face-to-face) mode of instruction delivery.
        </p>
        <p>
          <b>
            Language of Instruction:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          The language of Instruction is English. Students are expected to use English in their outputs and reports.
        </p>
        <p>
          <b>
            Use of the Learning Management System:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          The Bicol University Learning Management System (BU-LMS) will be used as the primary Course Site for this course. However, a parallel Google Classroom will also be used for those with difficulty accessing the BU-LMS. Here is the link for the courses:
        </p>
        <p>
          BU-LMS: <b>bulms.bicol-u.edu.ph</b>
          <b style="margin-left: 15%;">Google Classroom Code: </b> <input type="text" hidden name="gclass" id="" style="border-top: none;border-left: none; border-right: none;border-bottom: none;" value=""><?php echo $gcode; ?>
        </p>
        <br><br>
        <p style="text-indent: 50px;">
          For students with zero internet connectivity, communications will be via phone and submissions will be through Mail or Drop Box.
        </p>
        <p>
          <b>
            Special/Make-up Quiz/Examinations/Work:
          </b>
        </p>
        <p style="text-indent: 50px;">
          Make-Up Major Exams will be given to students upon approval of their request for such from the Department Head. No Make-Up Classes for Quizzes.
        </p>
        <p>
          <b>
            Dress and Grooming Codes:
          </b>
        </p>
        <p style="text-indent: 50px;">
          Synchronous activity through online platforms (e.g., Google Meet, Zoom, etc.) a proper attire is expected among participants.
        </p>
        <p>
          <b>
            Advising and Support:
          </b>
          <p style="text-indent: 50px;">
            <?php echo $support; ?>
          </p>
        </p>
        <textarea hidden name="support" id="" cols="30" rows="10" class="form-control"></textarea>
        
        <p>
          <b>
            Caveat:
          </b>
          Issues and matters not stated in this syllabus that are important for this course should be consulted with the course Instructor.
        </p>
      </div>
      <table class="table">
        <thead>
          <th>Prepared by:</th>
          <th>Reviewed by:</th>
          <th>Approved:</th>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: center;">
              <input type="text" hidden name="author" id="" class="form-control">
              <?php echo $faculty; ?>
            </td>
            <td style="text-align: center;">
              <input type="text" hidden name="head" id="" class="form-control">
              <?php echo $head; ?>
            </td>
            <td style="text-align: center;">
              <input type="text" hidden name="dean_name" id="" class="form-control">
              <?php echo $dean; ?>
            </td>
          </tr>
          <tr>
            <td align="center">
              Instructor
            </td>
            <td align="center">
              Department Head
            </td>
            <td align="center">
              Dean
            </td>
          </tr>
          <tr>
            <td colspan="3">
              Date: <input type="text" hidden name="created" id="" style="border-top: none;border-left: none; border-right: none;border-bottom: none;">
              <?php echo $created_at; ?>
            </td>
          </tr>
        </tbody>
      </table>
<?php
      }
    }
  }
?>
</form>
      </div>
    </body>
</html>

<!-- ################## E D I T ############# -->
<!-- edit/update -->
<?php
  if(isset($_GET['edit'])){
    $file_id  = $_GET['edit'];

    $sql = "SELECT * FROM `clo` a JOIN `core` b JOIN `sol` c JOIN `course_req` d JOIN `others` e JOIN `references` f JOIN `lc` g JOIN `ins_del` h JOIN `ins_rec` i JOIN `ps` j JOIN `assess` k JOIN `allot` l ON a.file_id LIKE '$file_id' AND b.file_id LIKE '$file_id' AND c.file_id LIKE '$file_id' AND d.file_id LIKE '$file_id' AND e.file_id LIKE '$file_id' AND f.file_id LIKE '$file_id' AND g.file_id LIKE '$file_id' AND h.file_id LIKE '$file_id' AND i.file_id LIKE '$file_id' AND j.file_id LIKE '$file_id' AND k.file_id LIKE '$file_id' AND l.file_id LIKE '$file_id'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if($count == 0){
      echo "<div class='alert alert-secondary' role='alert'>No such file!</div>";
    }else{
      while($row = mysqli_fetch_array($query)){
        $college = $row['college'];
        $dept = $row['department'];
        $prog = $row['program'];
        $cc = $row['course_code'];
        $term = $row['term'];
        $sched = $row['class_sched'];
        $rev_date = $row['rev_date'];
        $co_req = $row['co_requisite'];
        $credit = $row['credit'];
        $pre_req = $row['pre_requisite'];
        $course_place = $row['course_place'];
        $course_type = $row['course_type'];
        $faculty = $row['faculty'];
        $consult = $row['consult'];
        $cont_num = $row['contact_details'];
        $dean = $row['dean'];
        $head = $row['dept_chair'];
        $clo1 = $row['clo1'];
        $clo2 = $row['clo2'];
        $clo3 = $row['clo3'];
        $p1_1 = $row['p1_1'];
        $p1_2 = $row['p1_2'];
        $p1_3 = $row['p1_3'];
        $p2_1 = $row['p2_1'];
        $p2_2 = $row['p2_2'];
        $p2_3 = $row['p2_3'];
        $p3_1 = $row['p3_1'];
        $p3_2 = $row['p3_2'];
        $p3_3 = $row['p3_3'];
        $p4_1 = $row['p4_1'];
        $p4_2 = $row['p4_2'];
        $p4_3 = $row['p4_3'];
        $desc = $row['coure_desc'];
        $sol1 = $row['sol1']; 
        $sol2 = $row['sol2']; 
        $sol3 = $row['sol3']; 
        $sol4 = $row['sol4']; 
        $sol5 = $row['sol5']; 
        $sol6 = $row['sol6']; 
        $sol7 = $row['sol7']; 
        $sol8 = $row['sol8']; 
        $sol9 = $row['sol9']; 
        $sol10 = $row['sol10']; 
        $sol11 = $row['sol11']; 
        $sol12 = $row['sol12']; 
        $sol13 = $row['sol13']; 
        $sol14 = $row['sol14']; 
        $sol15 = $row['sol15'];

        $lc1 = $row['lc1'];
        $lc2 = $row['lc2'];
        $lc3 = $row['lc3'];
        $lc4 = $row['lc4'];
        $lc5 = $row['lc5'];
        $lc6 = $row['lc6'];
        $lc7 = $row['lc7'];
        $lc8 = $row['lc8'];
        $lc9 = $row['lc9'];
        $lc10 = $row['lc10'];
        $lc11 = $row['lc11'];
        $lc12 = $row['lc12'];
        $lc13 = $row['lc13'];
        $lc14 = $row['lc14'];
        $lc15 = $row['lc15'];

        $ins_del1 = $row['ins_del1'];
        $ins_del2 = $row['ins_del2'];
        $ins_del3 = $row['ins_del3'];
        $ins_del4 = $row['ins_del4'];
        $ins_del5 = $row['ins_del5'];
        $ins_del6 = $row['ins_del6'];
        $ins_del7 = $row['ins_del7'];
        $ins_del8 = $row['ins_del8'];
        $ins_del9 = $row['ins_del9'];
        $ins_del10 = $row['ins_del10'];
        $ins_del11 = $row['ins_del11'];
        $ins_del12 = $row['ins_del12'];
        $ins_del13 = $row['ins_del13'];
        $ins_del14 = $row['ins_del14'];
        $ins_del15 = $row['ins_del15'];

        $ins_rec1 = $row['ins_rec1'];
        $ins_rec2 = $row['ins_rec2'];
        $ins_rec3 = $row['ins_rec3'];
        $ins_rec4 = $row['ins_rec4'];
        $ins_rec5 = $row['ins_rec5'];
        $ins_rec6 = $row['ins_rec6'];
        $ins_rec7 = $row['ins_rec7'];
        $ins_rec8 = $row['ins_rec8'];
        $ins_rec9 = $row['ins_rec9'];
        $ins_rec10 = $row['ins_rec10'];
        $ins_rec11 = $row['ins_rec11'];
        $ins_rec12 = $row['ins_rec12'];
        $ins_rec13 = $row['ins_rec13'];
        $ins_rec14 = $row['ins_rec14'];
        $ins_rec15 = $row['ins_rec15'];

        $ps1 = $row['ps1'];
        $ps2 = $row['ps2'];
        $ps3 = $row['ps3'];
        $ps4 = $row['ps4'];
        $ps5 = $row['ps5'];
        $ps6 = $row['ps6'];
        $ps7 = $row['ps7'];
        $ps8 = $row['ps8'];
        $ps9 = $row['ps9'];
        $ps10 = $row['ps10'];
        $ps11 = $row['ps11'];
        $ps12 = $row['ps12'];
        $ps13 = $row['ps13'];
        $ps14 = $row['ps14'];
        $ps15 = $row['ps15'];

        $ass1 = $row['ass1'];
        $ass2 = $row['ass2'];
        $ass3 = $row['ass3'];
        $ass4 = $row['ass4'];
        $ass5 = $row['ass5'];
        $ass6 = $row['ass6'];
        $ass7 = $row['ass7'];
        $ass8 = $row['ass8'];
        $ass9 = $row['ass9'];
        $ass10 = $row['ass10'];
        $ass11 = $row['ass11'];
        $ass12 = $row['ass12'];
        $ass13 = $row['ass13'];
        $ass14 = $row['ass14'];
        $ass15 = $row['ass15'];

        $all1 = $row['all1'];
        $all2 = $row['all2'];
        $all3 = $row['all3'];
        $all4 = $row['all4'];
        $all5 = $row['all5'];
        $all6 = $row['all6'];
        $all7 = $row['all7'];
        $all8 = $row['all8'];
        $all9 = $row['all9'];
        $all10 = $row['all10'];
        $all11 = $row['all11'];
        $all12 = $row['all12'];
        $all13 = $row['all13'];
        $all14 = $row['all14'];
        $all15 = $row['all15'];
        $type_req1 = $row['type_req1'];
        $type_req2 = $row['type_req2'];
        $type_req3 = $row['type_req3'];
        $spec_req1 = $row['spec_req1'];
        $spec_req2 = $row['spec_req2'];
        $spec_req3 = $row['spec_req3'];
        $sub1 = $row['sub1'];
        $sub2 = $row['sub2'];
        $sub3 = $row['sub3'];
        $due_at1 = $row['due_at1'];
        $due_at2 = $row['due_at2'];
        $due_at3 = $row['due_at3'];
        $prim1 = $row['prim1'];
        $prim2 = $row['prim2'];
        $prim3 = $row['prim3'];
        $prim4 = $row['prim4'];
        $prim5 = $row['prim5'];
        $supp1 = $row['supp1'];
        $supp2 = $row['supp2'];
        $supp3 = $row['supp3'];
        $supp4 = $row['supp4'];
        $supp5 = $row['supp5'];
        $web1 = $row['web1'];
        $web2 = $row['web2'];
        $web3 = $row['web3'];
        $web4 = $row['web4'];
        $web5 = $row['web5'];
        $gcode = $row['gcode'];
        $support = $row['support'];
        $created_at =$row['created_at'];
?>
<form action="../core/process.php" method="POST">
      <input type="hidden" name="file_id" value="<?php echo $file_id; ?>" class="form-control">
      <button type="button" name="cmt" class="btn btn-primary" value="<?php echo $file_id; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
        View Comments
      </button>
      <table class="table">
        <tr>
          <th colspan="2" rowspan="5">
            <img src="../img/1logo.png" alt="" style="width: 120px; height: 100px; float: left;">
            BICOL UNIVERSITY <br>
            Legazpi City
          </th>
          <th>Course Code:</th>
          <td colspan="3"><input type="text" name="cc" class="form-control" value="<?php echo $cc; ?>"></td>

        </tr>
        <tr>
          <th>Term</th>
          <td><input type="text" name="term" class="form-control" value="<?php echo $term; ?>"></td>
          <th>Class Schedule</th>
          <td><input type="text" name="class_sched" class="form-control" value="<?php echo $sched; ?>"></td>
        </tr>
        <tr>
          <th>Revision Date</th>
          <td><input type="text" name="rev_date" class="form-control" value="<?php echo $rev_date; ?>"></td>
          <th>Co-Requisite/s</th>
          <td><input type="text" name="co_req" class="form-control" value="<?php echo $co_req; ?>"></td>
        </tr>
        <tr>
          <th>Credit</th>
          <td><input type="text" name="credit" class="form-control" value="<?php echo $credit; ?>"></td>
          <th>Pre-Requisite/s</th>
          <td><input type="text" name="pre_req" class="form-control" value="<?php echo $pre_req; ?>"></td>
        </tr>
        <tr>
          <th>Course Placement</th>
          <td><input type="text" name="course_place" class="form-control" value="<?php echo $course_place; ?>"></td>
          <th>Type of Course</th>
          <td><input type="text" name="course_type" class="form-control" value="<?php echo $course_type; ?>"></td>
        </tr>
        <tr>
          <th>College:</th>
          <td><input type="text" name="college" class="form-control" value="<?php echo $college; ?>"></td>
          <th>Faculty</th>
          <td><input type="text" name="faculty" class="form-control" value="<?php echo $faculty; ?>"></td>
          <th>Consultation Hours</th>
          <td><input type="text" name="consult" class="form-control" value="<?php echo $consult; ?>"></td>
        </tr>
        <tr>
          <th>Department:</th>
          <td><input type="text" name="dept" class="form-control" value="<?php echo $dept; ?>"></td>
          <th>Contact Details</th>
          <td><input type="text" name="cont_num" class="form-control" value="<?php echo $cont_num; ?>"></td>
          <th rowspan="2" style="vertical-align: middle;">Dean/Director</th>
          <td rowspan="2" style="vertical-align: middle;"><input type="text" name="dean" class="form-control" value="<?php echo $dean; ?>"></td>
        </tr>
        <tr>
          <th>Program</th>
          <td><input type="text" name="program" class="form-control" value="<?php echo $prog; ?>"></td>
          <th>Department Chair</th>
          <td><input type="text" name="dept_chair" class="form-control" value="<?php  echo $head; ?>"></td>
        </tr>
        <tr>
          <th>Vision</th> 
          <td><p style="text-align: justify;">A world-class university producing leaders and change agents for social transformation and development</p></td>
          <th>Core Values</th>
          <td colspan="3"><p style="text-align: justify;">Scholarship, Leadership, Character, Service</p></td>
        </tr>
        <tr>
          <th>Mission</th>
          <td><p style="text-align: justify;">Give professional and technical training, and provide advanced and specialized instruction in literature, philosophy, the sciences, and arts besides providing for the promotion of scientific and technological researches (RA5521, Section 3.0)</p></td>
          <th>Quality Policy</th>
          <td colspan="3"><p style="text-align: justify;">Bicol University commits to continually strive for excellence in instruction, research and extension by meeting the highest level of clientele satisfaction and adhering to quality standards and applicable statutory and regulatory requirements.</p></td>
        </tr>
      </table>

      <div class="txt-area">
        <p><b>Institunional Learning Outcomes: </b></p>
        <p>Every BU graduate should:</p>
        <ol>
          <li>
            Demonstrate critical thinking and integrative skills to solve problems and to support lifelong learning;
          </li><br>
          <li>
            Communicate effectively and appropriately orally and in writing for various purposes with the responsible use ICT tools;
          </li><br>
          <li>
            Collaborate with diverse people ethically and with mastery of knowledge and skills in given disciplines; and 
          </li><br>
          <li>
            Create knowledge and innovation to promote inclusive development as well as globalization.
          </li>
        </ol>
      </div>
      <div class="txt-area">
        <p><b>Program Learning Outcomes: </b></p>
        <ol>
          <li>
            Apply knowledge of computing, science, and mathematics appropriate to the discipline.
          </li><br>
          <li>
            Understand best practices and standards and their applications
          </li><br>
          <li>
            Identify and analyze user needs and take them into account in the selection, creation, evaluation and evaluation of computer-based systems.
          </li><br>
          <li>
            Design, implement, and evaluate computer-based systems, processes, components, or programs to meet desired needs and requirements under various constraints
          </li>
        </ol>
      </div>
      <div class="txt-area">
        <p><b>Course Description</b></p>
        <textarea name="desc" class="form-control" ><?php echo $desc; ?></textarea>
      </div>
      <br>
      <div class="txt-area">
        <p>
          <b>Course Learning Outcomes:</b>
          <!-- <button type="button" id="addCol" name="add" class="btn btn-primary" style="float: right;" onclick="newCol()"><span class="material-icons" style="vertical-align: middle;">add</span>Add column</button>
          <button type="button" id="add" name="add" class="btn btn-primary" style="float: right; margin-right: 5px;" onclick="newRow()"><span class="material-icons" style="vertical-align: middle;">add</span>Add row</button> -->
         
        </p>
        <br>
        <p id="txt" style="margin-top: 10px; margin-bottom: 10px;"></p>
      </div>
      <table class="table" style="align-content: center;">
        <tr>
          <th class="tbl">
            Course Learning <br> Outcomes
          </th>
          <th>
            P1
          </th>
          <th>
            P2
          </th>
          <th>
            P3
          </th>
          <th>
            P4
          </th>
        </tr>
        <tr>
          <td>
            <input type="text" name="col1" id="" class="form-control" value="<?php echo $clo1; ?>"><br>
            <input type="text" name="col2" id="" class="form-control" value="<?php echo $clo2; ?>"><br>
            <input type="text" name="col3" id="" class="form-control" value="<?php echo $clo3; ?>">
            <span id="col"></span>
          </td>
          <td>
            <input type="text" name="p1_1" id="" class="form-control" value="<?php echo $p1_1; ?>"><br>
            <input type="text" name="p1_2" id="" class="form-control" value="<?php echo $p1_2; ?>"><br>
            <input type="text" name="p1_3" id="" class="form-control" value="<?php echo $p1_3; ?>">
            <span id="p1"></span>
          </td>
          <td>
            <input type="text" name="p2_1" id="" class="form-control" value="<?php echo $p2_1; ?>"><br>
            <input type="text" name="p2_2" id="" class="form-control" value="<?php echo $p2_2; ?>"><br>
            <input type="text" name="p2_3" id="" class="form-control" value="<?php echo $p2_3; ?>">
            <span id="p2"></span>
          </td>
          <td>
            <input type="text" name="p3_1" id="" class="form-control" value="<?php echo $p3_1; ?>"><br>
            <input type="text" name="p3_2" id="" class="form-control" value="<?php echo $p3_2; ?>"><br>
            <input type="text" name="p3_3" id="" class="form-control" value="<?php echo $p3_3; ?>">
            <span id="p3"></span>
          </td>
          <td>
            <input type="text" name="p4_1" id="" class="form-control" value="<?php echo $p4_1; ?>"><br>
            <input type="text" name="p4_2" id="" class="form-control" value="<?php echo $p4_2; ?>"><br>
            <input type="text" name="p4_3" id="" class="form-control" value="<?php echo $p4_3; ?>">
            <span id="p4"></span>
          </td>
        </tr>
      </table>
      <p style="text-align: center;"><i style="font-size: 10pt;">Legend: I - Introduced concepts/principles; P - Practice with supervision; D - Demonstrated across different settings with minimal supervision</i></p>
      <br>
      <div class="txt-area">
        <p>
          <b>
            Course Outline:
          </b>
        </p>
      </div>
      <br>
      <table class="table" id="tbl_crs">
        <tr>
          <th>
            Specific Learning Outcomes
            <!-- <button type="button" onclick="sol()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Learning Content 
            <!-- <button type="button" onclick="lc()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Instructional Delivery
            <!-- <button type="button" onclick="ins_del()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Instructional Resources
            <!-- <button type="button" onclick="ins_rec()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Performance Standard
            <!-- <button type="button" onclick="ps()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Assessment Tasks/Outputs
            <!-- <button type="button" onclick="assess()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
          <th>
            Time Allotment
            <!-- <button type="button" onclick="allot()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          </th>
        </tr>
        <tr>
          <td>
            <input type="text" name="sol1" class="form-control" value="<?php echo $sol1 ?>"><br>
            <input type="text" name="sol2" class="form-control" value="<?php echo $sol2 ?>"><br>
            <input type="text" name="sol3" class="form-control" value="<?php echo $sol3 ?>"><br>
            <input type="text"  name="sol4" class="form-control" value="<?php echo $sol4 ?>"><br>
            <input type="text"  name="sol5" class="form-control" value="<?php echo $sol5 ?>"><br>
            <input type="text"  name="sol6" class="form-control" value="<?php echo $sol6 ?>"><br>
            <input type="text"  name="sol7" class="form-control" value="<?php echo $sol7 ?>" ><br>
            <input type="text"  name="sol8" class="form-control" value="<?php echo $sol8 ?>"><br>
            <input type="text"  name="sol9" class="form-control" value="<?php echo $sol9 ?>"><br>
            <input type="text"  name="sol10" class="form-control" value="<?php echo $sol10 ?>"><br>
            <input type="text"  name="sol11" class="form-control" value="<?php echo $sol11 ?>"><br>
            <input type="text"  name="sol12" class="form-control" value="<?php echo $sol12 ?>"><br>
            <input type="text"  name="sol13" class="form-control" value="<?php echo $sol13 ?>"><br>
            <input type="text"  name="sol14" class="form-control" value="<?php echo $sol14 ?>"><br>
            <input type="text"  name="sol15" class="form-control" value="<?php echo $sol15 ?>">
            <span id="sol"></span>
          </td>
          <td>

            <input type="text" name="lc1" class="form-control" value="<?php echo $lc1 ?>"><br>
            <input type="text" name="lc2" class="form-control" value="<?php echo $lc2 ?>"><br>
            <input type="text" name="lc3" class="form-control" value="<?php echo $lc3 ?>"><br>
            <input type="text"  name="lc4" class="form-control" value="<?php echo $lc4 ?>"><br>
            <input type="text"  name="lc5" class="form-control" value="<?php echo $lc5 ?>"><br>
            <input type="text"  name="lc6" class="form-control" value="<?php echo $lc6 ?>"><br>
            <input type="text"  name="lc7" class="form-control" value="<?php echo $lc7 ?>" ><br>
            <input type="text"  name="lc8" class="form-control" value="<?php echo $lc8 ?>"><br>
            <input type="text"  name="lc9" class="form-control" value="<?php echo $lc9 ?>"><br>
            <input type="text"  name="lc10" class="form-control" value="<?php echo $lc10 ?>"><br>
            <input type="text"  name="lc11" class="form-control" value="<?php echo $lc11 ?>"><br>
            <input type="text"  name="lc12" class="form-control" value="<?php echo $lc12 ?>"><br>
            <input type="text"  name="lc13" class="form-control" value="<?php echo $lc13 ?>"><br>
            <input type="text"  name="lc14" class="form-control" value="<?php echo $lc14 ?>"><br>
            <input type="text"  name="lc15" class="form-control" value="<?php echo $lc15 ?>">
            <span id="lc"></span>
          </td>
          <td>

            <input type="text" name="ins_del1" class="form-control" value="<?php echo $ins_del1 ?>"><br>
            <input type="text" name="ins_del2" class="form-control" value="<?php echo $ins_del2 ?>"><br>
            <input type="text" name="ins_del3" class="form-control" value="<?php echo $ins_del3 ?>"><br>
            <input type="text"  name="ins_del4" class="form-control" value="<?php echo $ins_del4 ?>"><br>
            <input type="text"  name="ins_del5" class="form-control" value="<?php echo $ins_del5 ?>"><br>
            <input type="text"  name="ins_del6" class="form-control" value="<?php echo $ins_del6 ?>"><br>
            <input type="text"  name="ins_del7" class="form-control" value="<?php echo $ins_del7 ?>" ><br>
            <input type="text"  name="ins_del8" class="form-control" value="<?php echo $ins_del8 ?>"><br>
            <input type="text"  name="ins_del9" class="form-control" value="<?php echo $ins_del9 ?>"><br>
            <input type="text"  name="ins_del10" class="form-control" value="<?php echo $ins_del10 ?>"><br>
            <input type="text"  name="ins_del11" class="form-control" value="<?php echo $ins_del11 ?>"><br>
            <input type="text"  name="ins_del12" class="form-control" value="<?php echo $ins_del12 ?>"><br>
            <input type="text"  name="ins_del13" class="form-control" value="<?php echo $ins_del13 ?>"><br>
            <input type="text"  name="ins_del14" class="form-control" value="<?php echo $ins_del14 ?>"><br>
            <input type="text"  name="ins_del15" class="form-control" value="<?php echo $ins_del15 ?>">
            <span id="ins_del"></span>
          </td>
          <td>

          <input type="text" name="ins_rec1" class="form-control" value="<?php echo $ins_rec1 ?>"><br>
            <input type="text" name="ins_rec2" class="form-control" value="<?php echo $ins_rec2 ?>"><br>
            <input type="text" name="ins_rec3" class="form-control" value="<?php echo $ins_rec3 ?>"><br>
            <input type="text"  name="ins_rec4" class="form-control" value="<?php echo $ins_rec4 ?>"><br>
            <input type="text"  name="ins_rec5" class="form-control" value="<?php echo $ins_rec5 ?>"><br>
            <input type="text"  name="ins_rec6" class="form-control" value="<?php echo $ins_rec6 ?>"><br>
            <input type="text"  name="ins_rec7" class="form-control" value="<?php echo $ins_rec7 ?>" ><br>
            <input type="text"  name="ins_rec8" class="form-control" value="<?php echo $ins_rec8 ?>"><br>
            <input type="text"  name="ins_rec9" class="form-control" value="<?php echo $ins_rec9 ?>"><br>
            <input type="text"  name="ins_rec10" class="form-control" value="<?php echo $ins_rec10 ?>"><br>
            <input type="text"  name="ins_rec11" class="form-control" value="<?php echo $ins_rec11 ?>"><br>
            <input type="text"  name="ins_rec12" class="form-control" value="<?php echo $ins_rec12 ?>"><br>
            <input type="text"  name="ins_rec13" class="form-control" value="<?php echo $ins_rec13 ?>"><br>
            <input type="text"  name="ins_rec14" class="form-control" value="<?php echo $ins_rec14 ?>"><br>
            <input type="text"  name="ins_rec15" class="form-control" value="<?php echo $ins_rec15 ?>">
            <span id="ins_rec"></span>
          </td>
          <td>

          <input type="text" name="ps1" class="form-control" value="<?php echo $ps1 ?>"><br>
            <input type="text" name="ps2" class="form-control" value="<?php echo $ps2 ?>"><br>
            <input type="text" name="ps3" class="form-control" value="<?php echo $ps3 ?>"><br>
            <input type="text"  name="ps4" class="form-control" value="<?php echo $ps4 ?>"><br>
            <input type="text"  name="ps5" class="form-control" value="<?php echo $ps5 ?>"><br>
            <input type="text"  name="ps6" class="form-control" value="<?php echo $ps6 ?>"><br>
            <input type="text"  name="ps7" class="form-control" value="<?php echo $ps7 ?>" ><br>
            <input type="text"  name="ps8" class="form-control" value="<?php echo $ps8 ?>"><br>
            <input type="text"  name="ps9" class="form-control" value="<?php echo $ps9 ?>"><br>
            <input type="text"  name="ps10" class="form-control" value="<?php echo $ps10 ?>"><br>
            <input type="text"  name="ps11" class="form-control" value="<?php echo $ps11 ?>"><br>
            <input type="text"  name="ps12" class="form-control" value="<?php echo $ps12 ?>"><br>
            <input type="text"  name="ps13" class="form-control" value="<?php echo $ps13 ?>"><br>
            <input type="text"  name="ps14" class="form-control" value="<?php echo $ps14 ?>"><br>
            <input type="text"  name="ps15" class="form-control" value="<?php echo $ps15 ?>">
            <span id="ps"></span>
          </td>
          <td>

          <input type="text" name="ass1" class="form-control" value="<?php echo $ass1 ?>"><br>
            <input type="text" name="ass2" class="form-control" value="<?php echo $ass2 ?>"><br>
            <input type="text" name="ass3" class="form-control" value="<?php echo $ass3 ?>"><br>
            <input type="text"  name="ass4" class="form-control" value="<?php echo $ass4 ?>"><br>
            <input type="text"  name="ass5" class="form-control" value="<?php echo $ass5 ?>"><br>
            <input type="text"  name="ass6" class="form-control" value="<?php echo $ass6 ?>"><br>
            <input type="text"  name="ass7" class="form-control" value="<?php echo $ass7 ?>" ><br>
            <input type="text"  name="ass8" class="form-control" value="<?php echo $ass8 ?>"><br>
            <input type="text"  name="ass9" class="form-control" value="<?php echo $ass9 ?>"><br>
            <input type="text"  name="ass10" class="form-control" value="<?php echo $ass10 ?>"><br>
            <input type="text"  name="ass11" class="form-control" value="<?php echo $ass11 ?>"><br>
            <input type="text"  name="ass12" class="form-control" value="<?php echo $ass12 ?>"><br>
            <input type="text"  name="ass13" class="form-control" value="<?php echo $ass13 ?>"><br>
            <input type="text"  name="ass14" class="form-control" value="<?php echo $ass14 ?>"><br>
            <input type="text"  name="ass15" class="form-control" value="<?php echo $ass15 ?>">
            <span id="assess"></span>
          </td>
          <td>

          <input type="text" name="all1" class="form-control" value="<?php echo $all1 ?>"><br>
            <input type="text" name="all2" class="form-control" value="<?php echo $all2 ?>"><br>
            <input type="text" name="all3" class="form-control" value="<?php echo $all3 ?>"><br>
            <input type="text"  name="all4" class="form-control" value="<?php echo $all4 ?>"><br>
            <input type="text"  name="all5" class="form-control" value="<?php echo $all5 ?>"><br>
            <input type="text"  name="all6" class="form-control" value="<?php echo $all6 ?>"><br>
            <input type="text"  name="all7" class="form-control" value="<?php echo $all7 ?>" ><br>
            <input type="text"  name="all8" class="form-control" value="<?php echo $all8 ?>"><br>
            <input type="text"  name="all9" class="form-control" value="<?php echo $all9 ?>"><br>
            <input type="text"  name="all10" class="form-control" value="<?php echo $all10 ?>"><br>
            <input type="text"  name="all11" class="form-control" value="<?php echo $all11 ?>"><br>
            <input type="text"  name="all12" class="form-control" value="<?php echo $all12 ?>"><br>
            <input type="text"  name="all13" class="form-control" value="<?php echo $all13 ?>"><br>
            <input type="text"  name="all14" class="form-control" value="<?php echo $all14 ?>"><br>
            <input type="text"  name="all15" class="form-control" value="<?php echo $all15 ?>">
            <span id="allot"></span>
          </td>
        </tr>
      </table>
      <br>
      <div class="txt-area">
        <p>
          <b>
            Course Requirements:
          </b>
        </p>
      </div>
      <table class="table">
        <tr>
          <th>
            Type of Requirements
          </th>
          <th>
            Specific Requirements
          </th>
          <th>
            Modality of Submision
          </th>
          <th>
            Due Date
          </th>
        </tr>
        <tr>
          <td>
            <input type="text" name="type1" id="" class="form-control" value="<?php echo $type_req1; ?>"><br>
            <input type="text" name="type2" id="" class="form-control" value="<?php echo $type_req2; ?>"><br>
            <input type="text" name="type3" id="" class="form-control" value="<?php echo $type_req3; ?>">
          </td>
          <td>
            <input type="text" name="spec1" id="" class="form-control" value="<?php echo $spec_req1; ?>"><br>
            <input type="text" name="spec2" id="" class="form-control" value="<?php echo $spec_req2; ?>"><br>
            <input type="text" name="spec3" id="" class="form-control" value="<?php echo $spec_req3; ?>">
          </td>
          <td>
            <input type="text" name="sub1" id="" class="form-control" value="<?php echo $sub1; ?>"><br>
            <input type="text" name="sub2" id="" class="form-control" value="<?php echo $sub2; ?>"><br>
            <input type="text" name="sub3" id="" class="form-control" value="<?php echo $sub3; ?>">
          </td>
          <td>
            <input type="text" name="due1" id="" class="form-control" value="<?php echo $due_at1; ?>"><br>
            <input type="text" name="due2" id="" class="form-control" value="<?php echo $due_at2; ?>"><br>
            <input type="text" name="due3" id="" class="form-control" value="<?php echo $due_at3; ?>">
          </td>
        </tr>
      </table>
      <div class="txt-area">
        <p>
          <b>
            Course Assessment:
          </b>
        </p>
      </div>
      <table class="table">
        <tr>
          <th colspan="4">BU Grading System</th>
        </tr>
      </table>
      <table class="table">
        <thead>
          <tr>
            <th>
              <i>Midterm/Tentative Final Grade:</i>
            </th>
            <th></th>
            <th>
              <i>System of Computing Grades:</i>
            </th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Discussion Forums <br>
              Lesson Activities/Quizzes/Assignments <br>
              Major Exam <br>
              Laboratory Activities
            </td>
            <td></td>
            <td>
              10% <br>
              25% <br>
              35% <br>
              30%
            </td>
            <td style="vertical-align: middle;">
              Final Grade = (40%) (Midterm) + (60%) (Tent. Final)
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <div class="txt-area">
        <p>
          <b>
            References:
          </b>
        </p>
        <p>
          <u>Primary:</u>
          <!-- <button type="button" class="btn" style="float: right;" onclick="primary()" ><span class="material-icons">add</span></button> -->
          <ol>
            <li>
              <input type="text" name="prim1" id="" class="form-control" value="<?php echo $prim1; ?>">
            </li><br>
            <li>
              <input type="text" name="prim2" id="" class="form-control" value="<?php echo $prim2; ?>">
            </li><br>
            <li>
              <input type="text" name="prim3" id="" class="form-control" value="<?php echo $prim3; ?>">
            </li><br>
            <li>
              <input type="text" name="prim4" id="" class="form-control" value="<?php echo $prim4; ?>">
            </li><br>
            <li>
              <input type="text" name="prim5" id="" class="form-control" value="<?php echo $prim5; ?>">  
            </li>
            <!-- <input type="text" text name="prim6" id="" class="form-control">
            <input type="text" text name="prim7" id="" class="form-control">
            <input type="text" text name="prim8" id="" class="form-control">
            <input type="text" text name="prim9" id="" class="form-control">
            <input type="text" text name="prim10" id="" class="form-control"> -->
            <span id="rep"></span>
          </ol>
        </p>
        <p>
          <u>Supplementary:</u>
          <!-- <button type="button" onclick="supp()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
          <ol>
            <li>
              <input type="text" name="supp1" id="" class="form-control" value="<?php echo $supp1; ?>">
            </li><br>
            <li>
              <input type="text" name="supp2" id="" class="form-control" value="<?php echo $supp2; ?>">
            </li><br>
            <li>
              <input type="text" name="supp3" id="" class="form-control" value="<?php echo $supp3; ?>">
            </li><br>
            <li>
              <input type="text"  name="supp4" id="" class="form-control" value="<?php echo $supp4; ?>">
            </li><br>
            <li>
              <input type="text"  name="supp5" id="" class="form-control" value="<?php echo $supp5; ?>">
            </li>
            <!-- <input type="text" text name="supp6" id="" class="form-control">
            <input type="text" text name="supp7" id="" class="form-control">
            <input type="text" text name="supp8" id="" class="form-control">
            <input type="text" text name="supp9" id="" class="form-control">
            <input type="text" text name="supp10" id="" class="form-control">
            <span id="supp"></span> -->
          </ol>
        </p>
        <p>
          <u>Websites:</u>
          <!-- <button type="button" onclick="web()" class="btn" style="float: right;"><span class="material-icons">add</span></button> -->
        </p>
        <ol>
          <li>
            <input type="text" name="web1" id="" class="form-control" value="<?php echo $web1; ?>">
          </li><br>
          <li>
            <input type="text" name="web2" id="" class="form-control" value="<?php echo $web2; ?>">
          </li><br>
          <li>
            <input type="text" name="web3" id="" class="form-control" value="<?php echo $web3; ?>">
          </li><br>
          <li>
            <input type="text"  name="web4" id="" class="form-control" value="<?php echo $web4; ?>">
          </li><br>
          <li>
            <input type="text"  name="web5" id="" class="form-control" value="<?php echo $web5; ?>">
          </li>
          <!-- <input type="text" text name="web6" id="" class="form-control">
          <input type="text" text name="web7" id="" class="form-control">
          <input type="text" text name="web8" id="" class="form-control">
          <input type="text" text name="web9" id="" class="form-control">
          <input type="text" name="web10" class="form-control">
          <span id="web"></span> -->
        </ol>
      </div>
      <br>
      <div class="txt-area">
        <p>
          <b>
            Course Policies:
          </b>
        </p>
        <p>
          <b>
            Academic Integrity Policy:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          For this course, the Honor Code is that there will be no plagiarizing on written work and no cheating on exams. Proper citation must be given to authors whose works were used in the process of developing instructional materials and learning in this course. If a student is caught cheating on an exam, he or she will be given zero mark for the exam. If a student is caught cheating twice, the student will be referred to the Office of Student Services and be given a failing grade in accordance with the guidelines as stated in the BU Students Handbook.
        </p>
        <p>
          <b>
          Policies on Absences and Tardiness:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          According to CHED policy, the total number of absences by the students should not be more than 20% of the total number of meetings or 7 Hours for a two-unit-course. Students incurring more than 7 hours of unexcused absences automatically gets a failing grade regardless of class standing. This policy is applicable only for residential (face-to-face) mode of instruction delivery.
        </p>
        <p>
          <b>
            Language of Instruction:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          The language of Instruction is English. Students are expected to use English in their outputs and reports.
        </p>
        <p>
          <b>
            Use of the Learning Management System:
          </b>
        </p>
        <p style="text-indent: 50px; text-align: justify;">
          The Bicol University Learning Management System (BU-LMS) will be used as the primary Course Site for this course. However, a parallel Google Classroom will also be used for those with difficulty accessing the BU-LMS. Here is the link for the courses:
        </p>
        <p>
          BU-LMS: <b>bulms.bicol-u.edu.ph</b>
          <b style="margin-left: 15%;">Google Classroom Code: </b> <input type="text" name="gclass" id="" style="border-top: none;border-left: none; border-right: none;border-bottom: 2px solid #000;" value="<?php echo $gcode; ?>">
        </p>
        <br><br>
        <p style="text-indent: 50px;">
          For students with zero internet connectivity, communications will be via phone and submissions will be through Mail or Drop Box.
        </p>
        <p>
          <b>
            Special/Make-up Quiz/Examinations/Work:
          </b>
        </p>
        <p style="text-indent: 50px;">
          Make-Up Major Exams will be given to students upon approval of their request for such from the Department Head. No Make-Up Classes for Quizzes.
        </p>
        <p>
          <b>
            Dress and Grooming Codes:
          </b>
        </p>
        <p style="text-indent: 50px;">
          Synchronous activity through online platforms (e.g., Google Meet, Zoom, etc.) a proper attire is expected among participants.
        </p>
        <p>
          <b>
            Advising and Support:
          </b>
          <textarea name="support" id="" cols="30" rows="10" class="form-control"><?php echo $support; ?></textarea>
        </p>
        
        <p>
          <b>
            Caveat:
          </b>
          Issues and matters not stated in this syllabus that are important for this course should be consulted with the course Instructor.
        </p>
      </div>
      <table class="table">
        <thead>
          <th>Prepared by:</th>
          <th>Reviewed by:</th>
          <th>Approved:</th>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: center;">
              <input type="text" name="author" id="" class="form-control" value="<?php echo $faculty; ?>">
              
            </td>
            <td style="text-align: center;">
              <input type="text" name="head" id="" class="form-control" value="<?php echo $head; ?>">
              
            </td>
            <td style="text-align: center;">
              <input type="text" name="dean_name" id="" class="form-control" value="<?php echo $dean; ?>">
              
            </td>
          </tr>
          <tr>
            <td align="center">
              Instructor
            </td>
            <td align="center">
              Department Head
            </td>
            <td align="center">
              Dean
            </td>
          </tr>
          <tr>
            <td colspan="3">
              Date: <input type="text" name="created" id="" style="border-top: none;border-left: none; border-right: none;border-bottom: 2px solid #000;" value="<?php echo $created_at; ?>">
              
            </td>
          </tr>
        </tbody>
      </table>
      
    <input type="submit" name="update_syll" value="Save Changes" class="btn btn-primary">
      
<?php
      }
    }
  }
?>

<!-- //modal -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>