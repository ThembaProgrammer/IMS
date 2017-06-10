
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no D]$9mVs;9ABK password) */

  

     
$link = mysqli_connect("localhost","root","f3375599_sbu","FinLand#1","f3375599_data.db",);
    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Attempt insert query execution

    $sql = INSERT INTO MESSAGE (image, name, describe, message, from) VALUES ('$_POST[image]', '$_POST[name]', '$_POST[describe]', '$_POST[message]', '$_POST[from]')";

    if(mysqli_query($link, $sql)){

        echo "DONE.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // Close connection

    mysqli_close($link);

    ?>