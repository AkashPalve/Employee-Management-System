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
       

        $wpdb -> insert(employees,
        array(
            'name' => $name,
            'email' => $email,
            'designation' => $designation,
            'contact' => $contact,
            'city' => $city,          
            )
        );

        echo "<h2>Employee Inserted Successfully!</h2>";

    }
?>

