
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">
</head>
<body>
<?php
//echo "Hello world";


    
 global $wpdb;
    
 //$result = $wpdb->get_results("SELECT * FROM activity");

$result = $wpdb->get_results("SELECT `name`, checkindate, checkintime, checkoutdate, checkouttime, TIMESTAMPDIFF(HOUR, checkintime ,checkouttime) AS difference FROM activity");
 //SELECT id, departure, arrival, TIMESTAMPDIFF(SECOND, departure, arrival) AS difference FROM travel;
//$result= $wpdb->get_results("SELECT * FROM activity");

 ?>
    <br><br>  
<table class="table table-hover" id="table2">
    <div class="container">
 <thead class="heading">
   <tr>
    
     
     <th>Name</th>
     <th>Check In Date</th>
     <th>Check In Time</th>
     <th>Check Out Date</th>
     <th>Check Out Time</th>
     <th>Worked hours</th>

   
   </tr>
   </thead>

</div>

   



   <?php

 foreach ($result as $row) {
     
 ?>
<div class="container">

<tr>
   
   <td><?php  echo $row->name;?></td>
   <td><?php  echo $row->checkindate;?></td>
   <td><?php  echo $row->checkintime;?></td>
   <td><?php  echo $row->checkoutdate;?></td>
   <td><?php  echo $row->checkouttime;?></td>
   <td><?php  echo $row->difference;?></td>
   
 </tr>
 
 </div>
<?php
 }

?>

 </table>

 <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
 <script>            

$(document).ready( function () {
    $('#table2').DataTable({
      "pagingType" : "full_numbers",
      "lengthMenu" : [
          [5,10,25,50,-1],
          [5,10,25,50,"All"]
      ],
      responsive : true,
      language : {
          search : "_INPUT_",
          searchPlaceholder : "Search Records",
      }

    });
} );
</script>

<body>
</html>