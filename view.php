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
          
          <script
  <script> type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  
  </script>
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
<div>

    <center><h2>List of Users</h2> <center><br>

</div>



<?php
//echo "this is view";

 
  

       
    global $wpdb;
    
    $result = $wpdb->get_results("SELECT * FROM wp_users");
    ?>

<div class="container">          
  <table class="table table-condensed" id="table">
    <thead class="heading">
      <tr>
        <th>ID</th>
        <th>username</th>
        <th>Email</th>
        <th>Display Name</th>
        <th>User Registered</th>
        <th>Action</th>
        
      </tr>
      </thead>



      



      <?php

    foreach ($result as $row) {
        
    ?>


  <tr>
      <td><?php  echo $row->ID;?></td>
      <td><?php  echo $row->user_login;?></td>
      <td><?php  echo $row->user_email;?></td>
      <td><?php  echo $row->display_name;?></td>
      <td><?php  echo $row->user_registered;?></td>
      <td><button type="button" class="btn btn-success editbtn">Edit</button> <button type="button" class="btn btn-danger deletebtn">Delete</button></td>
      
    </tr>
    
     
<?php
    }

?>

    </table>
</div>




<!-- Button trigger modal -->


<!--Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




<form action="#" method="post">
  <input type="hidden" name="update_id" id="ID">
      
  <div class="mb-3">
    <label for="exampleInputuserlogin" class="form-label">User Login</label>
    <input type="text" class="form-control" id="user_login"  name="user_login" placeholder="">
   </div>

  <div class="mb-3">
    <label for="exampleInputuseremail" class="form-label">User Email</label>
    <input type="text" class="form-control" id="user_email"  name="user_email" placeholder="">
   </div>

   <div class="mb-3">
    <label for="exampleInputdisplayname" class="form-label">Display Name</label>
    <input type="text" class="form-control" id="display_name"  name="display_name" placeholder="">
   </div>

  <div class="mb-3">
    <label for="exampleInputuserregistered" class="form-label">User Registered</label>
    <input type="text" class="form-control" id="user_registered"  name="user_registered" placeholder="">
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

     

      



<!--Edit Modal-->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">




<form action="#" method="post">
<label>Enter ID of employee you want to delete</label> 
  <input type="number" name="id" id="ID">

  <h4>Do you really want to delete this data?</h4>

  <div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" name="delete" class="btn btn-primary">Yes</button>
      </div>
    </div>
  
</form>

     

      





<?php

if (isset($_POST['edit'])) {

$ID = $_POST["update_id"];
$user_login = $_POST["user_login"];
$user_email = $_POST["user_email"];
$display_name = $_POST["display_name"];
$user_registered = $_POST["user_registered"];

//var_dump($_POST);
global $wpdb;




$wpdb->query("UPDATE wp_users SET user_login='$user_login',user_email='$user_email',display_name='$display_name',user_registered='$user_registered' WHERE ID='$ID'");

//echo '<h2><script>alert("user updated successfully")</script></h2>';   

/*echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("SUCCESS!","updated successfully","success");';
echo '}, 1000);</script>';*/

echo '<script>window.location.reload()</script>';
echo '<h2><script>alert("user updated successfully")</script></h2>';  

}
?>



<?php

    if (isset($_POST['delete'])) 
    {

       $ID = $_POST['id'];

       //var_dump($_POST);

       
        global $wpdb;
      
        $wpdb->delete(wp_users, array('ID' => $ID));
        
       // echo '<h2><script>alert("user deleted successfully")</script></h2>';
       echo '<script type="text/javascript">';
       echo 'setTimeout(function () { swal("SUCCESS!","User deleted successfully","success");';
       echo '}, 1000);</script>';
       
       echo '<script>window.location.reload()</script>';

    }

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script> type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

    $('#ID').val(data[0]);
    $('#user_login').val(data[1])
    $('#user_email').val(data[2]);
    $('#display_name').val(data[3]);
    $('#user_registered').val(data[4]);
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

    $('#ID').val(data[0]);
   
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

<script>
$(document).ready(function(){
  $("#hello").onclick(function(){
    $(this).hide();
  });
});
</script>




</body>
</html>



  























































































