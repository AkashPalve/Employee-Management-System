<html>
    <head>
        <style>
          .heading{
            background-color: #04AA6D;
            color: white;
             
          }

          #table{
        
          }
            </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div>

    <h2>View Employee Data</h2><br>

    <form action="#" method="post">

        <input type="submit" name="view" class="btn btn-info"  value="Display all employees"><br>
    
    </form>

</div>









</body>
</html>

<?php
//echo "this is view";


if (isset($_POST['view'])){

       
    global $wpdb;
    
    $result = $wpdb->get_results("SELECT * FROM employees");
    ?>

<div class="container">          
  <table class="table table-condensed" id="table">
    <thead class="heading">
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Designation</th>
        <th>Contact</th>
        <th>City</th>
        <th>Actions</th>
      </tr>
      </thead>

      <?php

    foreach ($result as $row) {
        
    ?>


  <tr>
      <td><?php  echo $row->id;?></td>
      <td><?php  echo $row->name;?></td>
      <td><?php  echo $row->email;?></td>
      <td><?php  echo $row->designation;?></td>
      <td><?php  echo $row->contact;?></td>
      <td><?php  echo $row->city;?></td>
      <td><input type="button" class="btn btn-success" value="Edit">  <input type="button" class="btn btn-danger" value="Delete"></td>
    </tr>
    
     
<?php
    }
}
?>

    </table>
</div>













































































