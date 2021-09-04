<?php
error_reporting(0);
?>

<html>

<head>
        <style>
          .heading{
            background-color: #04AA6D;
            color: white;
             
          }
          
        
  </script>

          
            </style>
            <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js"></script>
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
<body>
<div>

    <br>
    <br>
    <br>

</div>


</body>
</body>
<html>

<?php
   
   global $wpdb;
    
   $result = $wpdb->get_results("SELECT * FROM applyleave");
   ?>

<div class="container">          
 <table class="table table-condensed" id="table">
   <thead class="heading">
     <tr>
       <th>Employee ID</th>
       <th>Name</th>
       <th>Leave Type</th>
       <th>Leave Start Date</th>
       <th>Leave End Date</th>
       <th>Status</th>
     </tr>
     </thead>

     <?php

foreach ($result as $row) {
    
?>


<tr>
  <td><?php  echo $row->emp_id;?></td>
  <td><?php  echo $row->name;?></td>
  <td><?php  echo $row->leave_type;?></td>
  <td><?php  echo $row->leave_start;?></td>
  <td><?php  echo $row->leave_end;?></td>
  <td><button type="submit" class="btn btn-success" name="approve">Approve</button> <button type="submit" class="btn btn-danger " name="reject">Reject</button></td>
  
</tr>

 
<?php
}

?>







