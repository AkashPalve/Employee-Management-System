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

#btn3{
    position:absolute;
     top:0; 
     right:0;
     margin-top:30px;
     margin-right:30px;
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
    <label for="exampleInputname" class="form-label">Check In</label>
    <input type="datetime-local" class="form1" id="ci" name="datetime1" placeholder="">
    </div>

    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Check Out</label>
    <input type="datetime-local" class="form1" id="co"  name="datetime" placeholder="">
    </div>

   <button type="submit" class="btn btn-success" id="btn1" name="checkin">Check In</button>
   <button type="submit" class="btn btn-success" id="btn2" name="checkout">Check Out</button>
   
   </div>
  </form>
  
  </div>


  <form action="#" method="post">
  <button type="submit" class="btn btn-primary" id="btn3" name="activity">Check Activity</button>
  </form>
</body>
<?php 

if (isset($_POST['checkin']))
{
   
    $name = $_POST['name'];
    $checkin = $_POST['datetime1'];
    global $wpdb;
    //var_dump($_POST);
    $table_name = "activity";

    $wpdb -> insert($table_name,
        array(
            'name'   => $name,
            'checkin' => $checkin,
            
            )
        );

        //echo '<h2><script>alert("Successfully checked in")</script></h2>'; 
        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("SUCCESS!","Successfully checked in","success");';
        echo '}, 1000);</script>';
      


}


?>



<?php 

if (isset($_POST['checkout']))
{
   
    $name = $_POST['name'];
    $checkout = $_POST['datetime'];
    //var_dump($_POST);
    global $wpdb;
  
    $table_name = "activity";



    $wpdb->query("UPDATE $table_name SET checkout='$checkout'  WHERE name='$name'");


        //echo '<h2><script>alert("Successfully checked out")</script></h2>';
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("SUCCESS!","Successfully checked out","success");';
        echo '}, 1000);</script>';

}


?>






<?php
//echo "Hello world";

if (isset($_POST['activity']))
    
 global $wpdb;
    
 //$result = $wpdb->get_results("SELECT * FROM activity");

$result = $wpdb->get_results("SELECT `name`, checkin, checkout, TIMESTAMPDIFF(HOUR,checkin, checkout) AS difference FROM activity");
 //SELECT id, departure, arrival, TIMESTAMPDIFF(SECOND, departure, arrival) AS difference FROM travel;
 ?>
    <br><br>  
<table class="table table-hover" id="table">
    <div class="container">
 <thead class="heading">
   <tr>
    
     
     <th>Name</th>
     <th>Check In Time</th>
     <th>Check Out Time</th>
     <th>Worked Hours</th>
   </tr>
   </thead>

</div>

   



   <?php

 foreach ($result as $row) {
     
 ?>
<div class="container">

<tr>
   
   <td><?php  echo $row->name;?></td>
   <td><?php  echo $row->checkin;?></td>
   <td><?php  echo $row->checkout;?></td>
   <td><?php  echo $row->difference;?></td>
 </tr>
 
 </div>
<?php
 }

?>

 </table>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


