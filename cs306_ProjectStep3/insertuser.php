<?php 

include "config.php"; 

if (!empty($_POST['user_name'])){ 
    $user_name = $_POST['user_name']; 
    $user_email = $_POST['user_email']; 
    $login_name = $_POST['login_name'];
    $login_password = $_POST['login_password'];
    $sql_statement = "INSERT INTO users(user_name, user_email) VALUES ('$user_name','$user_email')"; 
    $result = mysqli_query($db, $sql_statement);
   

   
    echo "User Added: " . $user_name; 
} 
else 
{
    echo "You did not enter your name.";
}

?>
