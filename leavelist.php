<html>
<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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
<table class="table" id="table2">
 <thead>
   <tr>

   
     <th>Name</th>
     <th>Leave Applied on</th>
     <th>Status</th>

   </tr>
   </thead>



 <?php

 foreach ($result as $row) {
     
 ?>

<tbody>
<tr>
   
   <td><?php  echo $row->name;?></td>
   <td><?php echo $row->leave_start; ?></td>
   <td><?php if($row->status==0) 
   echo "Rejected";
   else
   {
     echo "Accepted";
   }?></td>
 </tr>
 </tbody> 
  
<?php
 }

?>

 </table>
 



 <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>




<script>            

$(document).ready( function () {
    $('#table2').DataTable({
      "pagingType" : "full_numbers",
      "lengthMenu" : [
          [10,25,50,-1],
          [10,25,50,"All"]
      ],
      responsive : true,
      language : {
          search : "_INPUT_",
          searchPlaceholder : "Search Records",
      }

    });
} );
</script>
</body>

 </html>