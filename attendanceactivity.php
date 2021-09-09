<?php
error_reporting(0);
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
.name{
    padding-right: 5px;
}

.check{
    padding-right: 70px;
}

.check1{
    padding-right: 58px;
}
#name1{
    
    width:205px;
}
    </style>
</head>

<body>
    <div class="container">
    <h3> User Activity </h3>
</div>
<div class="container" style="padding-top: 2em;">


<form action="#" method="post">


<label class="name">Name of Employee</label>
<input type="name" name="name" id="name1"><br><br>

<label class="check">Check In  </label>
<input type="datetime-local" name="datetime1"><br><br>

<label class="check1">Check Out  </label>
<input type="datetime-local" name="datetime"><br><br>


<button type="submit" name="checkin" class="btn btn-success" id="btn1">Check In</button>
<button type="submit" name="checkout" class="btn btn-success" id="btn2">Check Out</button>
<button type="submit" name="activity" class="btn btn-info">Show Activity</button>

</form>

</div>


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

        echo '<h2><script>alert("Successfully checked in")</script></h2>';  

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


        echo '<h2><script>alert("Successfully checked out")</script></h2>';

}


?>






<?php
//echo "Hello world";

if (isset($_POST['activity']))
    
 global $wpdb;
    
 $result = $wpdb->get_results("SELECT * FROM activity");
 ?>
    <br><br>  
<table class="table table-condensed" id="table">
 <thead class="heading">
   <tr>
    
     
     <th>Name</th>
     <th>Check In Time</th>
     <th>Check Out Time</th>
   </tr>
   </thead>



   



   <?php

 foreach ($result as $row) {
     
 ?>


<tr>
   
   <td><?php  echo $row->name;?></td>
   <td><?php  echo $row->checkin;?></td>
   <td><?php  echo $row->checkout;?></td>
 </tr>
 
  
<?php
 }

?>

 </table>

 <?php
echo "hello";
 ?>
