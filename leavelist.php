<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
body{
  margin:0;
  font-family:sans-serif;
}

*{
  box-sizing:border-box;
}

.table{
  width:90%;
  border-collapse:collapse;
  padding:auto;
  margin:auto;
}
.table td, .table th{
  padding:12px 15px;
  border:1px solid #ddd;
  text-align:center;
  font-size:16px;
}

.table th{
  background-color:darkblue;
  color:#ffffff;
}

.table tbody tr:nth-child(even){
  background-color: #f5f5f5;
}
  </style>

</head>
<body>
<?php

global $wpdb;
    
 $result = $wpdb->get_results("SELECT * FROM leaveapply");
 ?>
    <br><br>  
<table class="table" id="table">
 <thead>
   <tr>

    <th>Employee ID</th>
     <th>Name</th>
     <th>Status</th>

   </tr>
   </thead>



 <?php

 foreach ($result as $row) {
     
 ?>

<tbody>
<tr>
   <td><?php  echo $row->emp_id;?></td>
   <td><?php  echo $row->name;?></td>
   <td><?php  echo $row->status;?></td>
 </tr>
 </tbody> 
  
<?php
 }

?>

 </table>
 <h5><b>Note<b></h5>
 <p> Status 0: Rejected</p>
 <p> Status 1: Accepted</p>
 
</body>

 </html>