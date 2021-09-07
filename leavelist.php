<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<?php
//echo "Hello world";


    
 global $wpdb;
    
 $result = $wpdb->get_results("SELECT * FROM applyleave");
 ?>
<div class="container" style="padding-top: 5em;"> 
<table class="table table-condensed" id="table">
 <thead class="heading">
   <tr>
    
     <th>Employee ID</th>
     <th>Name</th>
     <th>Status</th>
   </tr>
   </thead>



   



   <?php

 foreach ($result as $row) {
     
 ?>


<tr>
   <td><?php  echo $row->emp_id;?></td>
   <td><?php  echo $row->name;?></td>
   <td><?php  echo $row->status;?></td>
 </tr>
 
  
<?php
 }

?>

 </table>
 <h5><b>Note<b></h5>
 <p> status 0: Reject</p>
 <p> status 1: Accept</p>
</div>
</body>

 </html>