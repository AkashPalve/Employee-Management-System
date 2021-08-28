<html>
    <head>
        <style>
          .heading{
            background-color: #04AA6D;
            color: white;
             
          }
          <script
  <script> type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  $(function(){
    $("#table").dataTable();
  })
  </script>
  </script>

          #table{
        
          }
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
      <td><button type="button" class="btn btn-success editbtn">Edit</button> <button type="button" class="btn btn-danger deletebtn">Delete</button></td>
      
    </tr>
    
     
<?php
    }
}
?>

    </table>
</div>




<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




<form action="#" method="post">
  <input type="hidden" name="update_id" id="id">
      
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
 
 <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="text" class="form-control" id="email"  name="email" placeholder="Enter your email id">
   </div>

  <div class="mb-3">
    <label for="exampleInputdesignation" class="form-label">Designation</label>
    <input type="text" class="form-control" id="designation"  name="designation" placeholder="Enter your designation">
   </div>

  <div class="mb-3">
    <label for="exampleInputcontact" class="form-label">Contact</label>
    <input type="text" class="form-control" id="contact"  name="contact" placeholder="Enter your contact">
   </div>

  <div class="mb-3">
    <label for="exampleInputcity" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city">
   </div>

   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</form>

     

      





<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




<form action="#" method="post">
  <label>Enter ID of employee you want to delete</label>
  <input type="number" name="id" id="id">
      
  <h4>Do you really want to delete this data?</h4>

  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" name="delete" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

</form>

     

      





<?php

if (isset($_POST['edit'])) {

$id = $_POST["update_id"];
$name = $_POST["name"];
$email = $_POST["email"];
$designation = $_POST["designation"];
$contact = $_POST["contact"];
$city = $_POST["city"];


global $wpdb;

//var_dump($_POST);


$wpdb->query("UPDATE employees SET contact='$contact',name='$name',email='$email',city='$city',designation='$designation' WHERE id='$id'");

echo "<h1>Updated Successfully!</h1>";        

}
?>



<?php

    if (isset($_POST['delete'])) {
        $id = $_POST["id"];
        
       
        global $wpdb;
        //var_dump($_POST);
        
       

        $wpdb->delete(employees, array('id' => $id));

        

        echo "<h1>Deleted Successfully!</h1>";

    }

?>


<script> type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>



<script>
$(document).ready(function()
{
  $('.editbtn').on('click',function()
  {
    $('#editmodal').modal('show');
    $tr=$(this).closest('tr');
    var data=$tr.children("td").map(function()
    {
      return $(this).text();
    }).get();
    console.log(data);

    $('#id').val(data[0]);
    $('#name').val(data[1]);
    $('#email').val(data[2]);
    $('#designation').val(data[3]);
    $('#contact').val(data[4]);
    $('#city').val(data[5]);
  });
});
</script>



<script>
$(document).ready(function()
{
  $('.deletebtn').on('click',function()
  {
    $('#deletemodal').modal('show');
   $tr=$(this).closest('tr');
    var data=$tr.children("td").map(function()
    {
      return $(this).text();
    }).get();
    console.log(data);

    $('#id').val(data[0]);
   
  });
});
</script>


<script>
  $(function(){
    $("#table").dataTable();
  })

  var table = $('#table').dataTable({
   "aLengthMenu": [ [2, 4, 8, -1], [2, 4, 8, "All"] ],
   "iDisplayLength": 5,        
});
  </script>

  























































































