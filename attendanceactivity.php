<?php
error_reporting(0);
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


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

#co{
    height:35px;
}

#ci{
    height:35px;
}








</style>
</head>

<body>

   
<div class=form-center>
 

 <form action="#" method="post">
 <h3>Attendance Log</h3>
  <div class="p-3 my-3 border">

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form1"  name="name" placeholder="Enter your name" required>
    </div>

    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Check In Date</label>
    <input type="date" class="form1" id="ci" name="date" placeholder="">
    </div>

    
    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Check In Time</label>
    <input type="time" class="form1" id="ci" name="time" placeholder="">
    </div>


    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Check Out Date</label>
    <input type="date" class="form1" id="co"  name="date1" placeholder="">
    </div>

    
    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Check Out Time</label>
    <input type="time" class="form1" id="ci" name="time1" placeholder="">
    </div>

   <button type="submit" class="btn btn-success" id="btn1" name="checkin">Check In</button>
   <button type="submit" class="btn btn-success" id="btn2" name="checkout">Check Out</button>
   
   </div>
  </form>
  
  </div>



<?php 

if (isset($_POST['checkin']))
{
   
    $name = $_POST['name'];
    $checkindate = $_POST['date'];
    $checkintime = $_POST['time'];

    global $wpdb;
    //var_dump($_POST);
    $table_name = "activity";

   
  
   // $wpdb->query("UPDATE $table_name SET checkindate='$checkindate', checkintime='$checkintime'  WHERE name='$name'"); 
   
   
   
    $wpdb -> insert($table_name,
        array(
            'name'   => $name,
            'checkindate' => $checkindate,
            'checkintime' => $checkintime,
            
            )
        );

        
        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("SUCCESS!","Successfully checked in","success");';
        echo '}, 100);</script>';
      
}


?>



<?php 

if (isset($_POST['checkout']))
{
   
    $name = $_POST['name'];
    $checkoutdate = $_POST['date1'];
    $checkouttime = $_POST['time1'];
    //var_dump($_POST);
    global $wpdb;
  
    $table_name = "activity";



    $wpdb->query("UPDATE $table_name SET checkoutdate='$checkoutdate', checkouttime='$checkouttime'  WHERE name='$name'");


        //echo '<h2><script>alert("Successfully checked out")</script></h2>';
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("SUCCESS!","Successfully checked out","success");';
        echo '}, 100);</script>';

}


?>







<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>


