
<?php
$userdata = array(
    'ID' => akash, // ID of existing user
    'user_login' =>  'akashpalve',
    'user_pass'  =>  md5(AkashPalve) // no plain password here!
); 
 
$user_id = wp_insert_user( $userdata ) 


$userdata = array(
    'user_email'            => $email,   
    'first_name'            => $fname,  
    'last_name'             => $lname,  
    'role'                  => 'subscriber',

    $userdata = array(
        'user_login' => 'test',
        'user_pass' => md5("123'456"),
        'user_email' => 'test@example.com',
    );
    wp_insert_user( $userdata );
    
    
    1
    wp_insert_user( wp_slash( $userdata ) );

    $userdata = array(
        'ID' => $user_id, // ID of existing user
        'user_login' =>  'login_name',
        'user_pass'  =>  md5($new_password) // no plain password here!
    ); 
     
    $user_id = wp_insert_user( $userdata ) ;
}


function update_my_custom_user_meta() {

    $servername = "localhost";
    $username = "databaseusername";
    $password = "databasepassword";
    $dbname = "databasename");
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $user = wp_get_current_user();
    
    $sql = "UPDATE wp_users SET user_hrid =".$_POST['user_hrid']." WHERE id=".$user;
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    
    }
    
    add_filter('wc_create_new_customer', 'update_my_custom_user_meta
?>