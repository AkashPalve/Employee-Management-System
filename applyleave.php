<?php
error_reporting(0);
?>

<html>
<head>
<style>
  .form-center {
	display:flex;
	justify-content: center;
  margin-top:50px;
}

h3{
  display:flex;
	justify-content: center;
  padding-bottom:15px;
}

.form1{
  width:100%;
}

#btn{
     height: 38px;
     width: 400px;
}
  #sel{
    width:400px;
    height:34px;
  }

  #ls{
    height:34px;
  }

  #le{
    height:34px;
  }
  </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>



 

<body>



<div class=form-center>
 

 <form action="#" method="post">
 <h3>Apply For Leave</h3>
  <div class="p-3 my-3 border">

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form1"  name="name" placeholder="Enter your name">
    </div>
 
 <div class="mb-3">
    <label for="exampleInputpassword" class="form-label2">Employee ID</label>
    <input type="number" class="form-control"  name="empid" placeholder="Enter your employee id">
   </div>

  <div class="mb-3">
    <label for="exampleInputemail" class="form-label3">Leave Type</label><br>
    <select id="sel" name="leavetype">
        <option value="select" id="">Select</option>
          <option value="paid leave">Paid leave</option>
          <option value="sick leave">Sick leave</option>
          <option value="casual leave">Casual leave</option>
        </select>
   </div>

  <div class="mb-3">
    <label for="exampleInputLeaveStart"  class="form-label4">Leave Start</label>
    <input type="date" class="form-control" id="ls" name="leavestart" placeholder="">
   </div>

   <div class="mb-3">
    <label for="exampleInputLeaveEnd"  class="form-label4">Leave End</label>
    <input type="date" class="form-control" id="le"  name="leaveend" placeholder="">
   </div>


   <button type="submit" class="btn btn-success" id="btn" name="request">Submit</button>
   </div>
</form>
 </div>


</body>
</html>


<?php
//echo "Welocome to Employee Leave Page";
if (isset($_POST['request']))
{
    $name = $_POST['name'];
    $emp_id=$_POST['empid'];
    $leavetype=$_POST['leavetype'];
    $leavestart=$_POST['leavestart'];
    $leaveend=$_POST['leaveend'];


   

    

    global $wpdb;

    $wpdb -> insert(leaveapply,
        array(
            'name' => $name,
            'emp_id'=>$emp_id,
            'leave_type' => $leavetype,
            'leave_start' => $leavestart,
            'leave_end' => $leaveend,
                     
            )
        );

        //echo '<h2><script>alert("Successfully applied for leave")</script></h2>';  
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("SUCCESS!","Successfully applied for leave","success");';
        echo '}, 1000);</script>';


}



?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<?php
if (isset($_POST['login']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  
}
?>
