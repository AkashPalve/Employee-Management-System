<?php
error_reporting(0);
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


  <body>

  <h2>Add New Employee</h1>
  <form action="#" method="post">
  <div class="w-50 p-3";>

  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter your name">
    </div>
 
 <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="text" class="form-control"  name="email" placeholder="Enter your email id">
   </div>

  <div class="mb-3">
    <label for="exampleInputdesignation" class="form-label">Designation</label>
    <input type="text" class="form-control"  name="designation" placeholder="Enter your designation">
   </div>

  <div class="mb-3">
    <label for="exampleInputcontact" class="form-label">Contact</label>
    <input type="text" class="form-control"  name="contact" placeholder="Enter your contact">
   </div>

  <div class="mb-3">
    <label for="exampleInputcity" class="form-label">City</label>
    <input type="text" class="form-control" name="city" placeholder="Enter your city">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">Username</label>
    <input type="text" class="form-control" name="user_login" placeholder="Enter your UserID">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">Password</label>
    <input type="password" class="form-control" name="user_pass" placeholder="Enter your password">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">User nicename</label>
    <input type="text" class="form-control" name="user_nicename" placeholder="Enter your nicename">
   </div>
  
   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">User Email</label>
    <input type="email" class="form-control" name="user_email" placeholder="Enter user email">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">User URL</label>
    <input type="url" class="form-control" name="user_url" placeholder="Enter user_url">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">User Registered</label>
    <input type="datetime" class="form-control" name="user_registered" placeholder="">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">User status</label>
    <input type="number" class="form-control" name="user_status" placeholder="Enter user_status">
   </div>

   <div class="mb-3">
    <label for="exampleInputcity" class="form-label">display name</label>
    <input type="text" class="form-control" name="display_name" placeholder="Ente your display name">
   </div>

  <button type="submit" class="btn btn-success" name="insert">Add Employee</button>
</form>
 </div>
  





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</head>
</html>

<?php
//echo "this is insert";

    if (isset($_POST['insert'])) {

        global $wpdb;
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $designation = $_POST["designation"];
        $contact = $_POST["contact"];
        $city = $_POST["city"];

        $user_login = $_POST["user_login"];
        $user_pass = $_POST["user_pass"];
       
        $user_pass = wp_hash_password("user_pass");
        
        $user_nicename=$_POST["user_nicename"];
        $user_email=$_POST["user_email"];
        $user_url=$_POST["user_url"];
        $user_registered=$_POST["user_registered"];
        $user_status=$_POST["user_status"];
        $display_name=$_POST["display_name"];


        
        //var_dump($_POST);
        $wpdb -> insert(wp_usermeta,
        array(
            'name' => $name,
            'email' => $email,
            'designation' => $designation,
            'contact' => $contact,
            'city' => $city,          
            )
        );



        $wpdb -> insert(wp_users,
        array(
            'user_login' => $user_login,
            'user_pass' => $user_pass,
            'user_nicename' => $user_nicename,
            'user_email' => $user_email,
            'user_url' => $user_url,
            'user_registered' => $user_registered,
            'user_status' => $user_status,
            'display_name' => $display_name,       
            )
        );

        

        echo '<h2><script>alert("employee inserted successfully")</script></h2>';

    }
?>

