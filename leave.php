<?php
error_reporting(0);
?>

<html>
<head>
<style>
 input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<h2> Request a leave </h2>
<div class="container">
 
  <form action="#" method="post">
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your full name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="empid">Employee ID</label>
      </div>
      <div class="col-75">
        <input type="number" id="" name="empid" placeholder="Your Employee ID">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="leavetype">Leave Type</label>
      </div>
      <div class="col-75">
        <select id="country" name="leavetype">
        <option value="select">Select</option>
          <option value="paid leave">Paid leave</option>
          <option value="sick leave">Sick leave</option>
          <option value="casual leave">Casual leave</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="leavestart">Leave Start</label>
      </div>
      <div class="col-75">
        <input type="date" id="" name="leavestart" placeholder="">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="leavestart">Leave End</label>
      </div>
      <div class="col-75">
        <input type="date" id="" name="leaveend" placeholder="">
      </div>
    </div>
   
    <div class="row">
      <input type="submit" name='request' value="Submit">
    </div>
  </form>
</div>

</body>
</html>


<?php
//echo "Welocome to Employee Leave Page";
if (isset($_POST['request']))
{
    $name = $_POST['name'];
    $emp_id=$_POST['empid'];
    $leavetype=$_POST['leavetype'];
    $leavestart=$_POST['leavestart'];
    $leaveend=$_POST['leaveend'];
   

    

    global $wpdb;

    $wpdb -> insert(applyleave,
        array(
            'name' => $name,
            'emp_id'=>$emp_id,
            'leave type' => $leavetype,
            'leave start' => $leavestart,
            'leave end' => $leaveend,
                     
            )
        );
}

?>