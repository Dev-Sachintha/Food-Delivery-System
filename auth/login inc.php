<?php

include 'auth.html';

if(isset($_POST['signup'])){
    $id=$_POST['id'];
    $user_id=$_post['user_id'];
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkemail);
    if($result->num_rows>0){
        echo "Email Address Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO users(id,user_id,user_name,email,password)
        VALUES('$id','$user_id','$user_name','$email','$password')"
    if($conn->query($insertQuery)==TRUE){
        header("location:auth.html ");
    }
    else{
        echo "Error:" .$conn->error;
    }
    
    }

    if(isset($_POST['login'])){
        $email=$_POST['user_name'];
        $password=$_POST['password'];
        $password=md5($password);
        
        $sql="SELECT*FROM users WHERE email='$email' and password='$password'"
        $result=$conn->query($sql);
        if($result->num_rows>0){
            session_start();
            $row=$result->fetch_assoc();
            $_session['email']=$row['email'];
            header("location: sigin inc.php");
            exit();

        }
        else{
            echo "Not found,Incorrect Email or Password";
        }

    }



}
?>