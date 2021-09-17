<?php
error_reporting(0);
?>

<html>

<head>
    <style>
        .heading {
            background-color: #04AA6D;
            color: white;

        }

       
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    global $wpdb;
    $result = $wpdb->get_results("SELECT * FROM leaveapply");
    ?>
    <div class="container" style="padding-top: 5em;">
        <table class="table table-condensed" id="table1">
            <thead class="heading">
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Leave Type</th>
                    <th>Leave From</th>
                    <th>Leave To</th>
                    <th>Status</th>
                </tr>
            </thead>

            <?php
            foreach ($result as $row) {
            ?>
                <tr>
                    <td><?php echo $row->emp_id; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->leave_type; ?></td>
                    <td><?php echo $row->leave_start; ?></td>
                    <td><?php echo $row->leave_end; ?></td>
                    <td>
                        <form method="post" action="#">
                            <input type="hidden" name="emp_id" value='<?php echo $row->emp_id; ?>'>
                            <?php
                            if ($row->status == 0) 
                            {
                                echo "<button type='submit' class='btn btn-danger' name='approve' value='1'>Reject</button>";
                            } else 
                            {
                                echo "<button type='submit' class='btn btn-primary' name='approve' value='0'>Approve</button>";
                            }
                            ?>
                        </form>
                        </td>
                </tr>
            <?php
            }
            ?>





            <?php

           
            if (isset($_POST['approve'])) 
            {
                global $wpdb;
             // $approve_status = $_POST['approve'];
                $approve_status = $_POST['approve'];
                $emp_id = $_POST['emp_id'];
                $table_name = "leaveapply";
                $wpdb->update($table_name, array('status' => strval($approve_status)), array('emp_id' => strval($emp_id)));
                echo '<script>window.location.reload()</script>';

            }

            ?>

<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>

<script>            

$(document).ready( function () {
    $('#table1').DataTable({
      "pagingType" : "full_numbers",
      "lengthMenu" : [
          [5,10,25,50,-1],
          [5,10,25,50,"All"]
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








