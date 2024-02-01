<?php

include "config.php";

if(!empty($_POST['user_name']))
{
    $user_name = $_POST['user_name'];
    $sql_statement = "DELETE FROM users WHERE user_name = '$user_name'";
    $result = mysqli_query($db, $sql_statement);
    echo "User Deleted: " . $user_name;
    
}

?>