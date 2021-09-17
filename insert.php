<?php
error_reporting(0);
?>

<html>
<head>
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

#btn{
     height: 40px;
     width: 400px;
}


  
  </style>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
  
<body>


 
 <div class=form-center>
 

 <form action="#" method="post">
 <h3>Add User</h3>
  <div class="p-3 my-3 border">

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Username</label>
    <input type="text" class="form1"  name="uname" placeholder="Enter your username" required>
    </div>
 
 <div class="mb-3">
    <label for="exampleInputpassword" class="form-label2">Password</label>
    <input type="password" class="form-control" id="pswd1" name="password" placeholder="Enter your password" required>
   </div>

   <div class="mb-3">
    <label for="exampleInputconfirmpassword" class="form-label4">Confirm Password</label>
    <input type="password" class="form-control"  id="pswd2" onchange="matchPassword()" name="confirmpassword" placeholder="Confirm your password" required >
  </div>

  <div class="mb-3">
    <label for="exampleInputemail" class="form-label3">Email</label>
    <input type="email" class="form-control"  name="email" placeholder="Enter your email" required>
   </div>

  
<button type="submit" class="btn btn-primary"  id="btn" name="insert">Add User</button>
  
</form>
 </div>



 <?php


if (isset($_POST['insert']))
{

  $userlogin = $_POST['uname'];
  $password = $_POST['password'];
  $password1 = $_POST['confirmpassword'];
  $email = $_POST['email'];

  if ($userlogin=="")
{
  echo '<script> alert("Username cannot be empty") </script>';
}

elseif ($password=="")
{
  echo '<script> alert("password cannot be empty") </script>';
}

elseif ($password1=="")
{
  echo '<script> alert("confirm password cannot be empty") </script>';
}


elseif($email=="")
{
  echo '<script> alert("email cannot be empty") </script>';
}


elseif ($user_id = ( $_POST['uname'] ))
if ( username_exists( $user_id ) ) {
  
echo '<script type="text/javascript"> alert("Username already exists! Try another one");</script>';
    
}

elseif ( strlen( $_POST['password'] ) <= 8 )
{
  echo '<script> alert("Your password is weak! Try Another one.") </script>';
   
}

elseif($email = $_POST ["email"] ) 
{
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) )
{
  echo '<script> alert("Enter valid Email ID") </script>';
}

else if(isset($_POST['insert']))
 {
 $user_id = wp_insert_user( array(
   'user_login' => $_POST['uname'],
   'user_pass' => $_POST['password'],
   'user_email' => $_POST['email'],
 
   ));

  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("SUCCESS!","User Inserted Successfully","success");';
  echo '}, 100);</script>';


}

}



}//mainif


 /* global $wpdb;
  $result = $wpdb->get_results("SELECT * FROM wp_users WHERE user_login = '$userlogin' , user_pass = '$password' ,user_email = $email");
  if($userlogin=="")
  {
    echo '<script> alert("Username cannot be empty"); <script>';
  }

  elseif($password==""){
    echo '<script> alert("Username cannot be empty"); <script>';
  }

  elseif($email==""){
    echo '<script> alert("email cannot be empty"); <script>';
  }*/






?>


      

<script>  
function matchPassword() {  
  var pw1 = document.getElementById("pswd1").value;
  var pw2 = document.getElementById("pswd2").value;  
  if(pw1 == pw2)  
  {   
   
  } 
  else 
  {  
    alert("password did not match! Enter correct password");
  }  
}  
</script>  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html>
