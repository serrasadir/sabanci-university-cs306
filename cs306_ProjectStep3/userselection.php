<?php 

include "config.php"; 

if (!empty($_POST['user_name'])){ 



    $user_name = $_POST['user_name']; 

    $sql_statement = "SELECT * FROM users WHERE user_name LIKE '$user_name%'"; 
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_array($result)) {
        echo $row['user_name']; // Print a single column data
        echo nl2br("\n");
       
    }


    $result = mysqli_query($db, $sql_statement);
} 
else 
{
    echo "User Name cannot be null!";
}

?>