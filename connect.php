<?php
    $fullname=$_post['fullname'];
    $email=$_post['email'];
    $message=$_post['message'];

    $conn = new mysqli('localhost', 'root','','query');
    if($conn->connect_error){
        die('Connection failed : '.$conn->onnect_error);
    }else{
        $stmt= $conn->prepare("insert into contact(fullname,email,message) values(?,?,?)");
        $stmt->bind_param("sss",$fullname,$email,$message);
        $stmt->execute();
        echo"Query Submitted Successfully";
        $stmt->close();
        $conn->close();
    }
?>

