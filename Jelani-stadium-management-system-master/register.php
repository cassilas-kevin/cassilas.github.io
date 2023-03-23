<?php


require_once 'connect.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username= $_POST['username'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $password = password_hash($password,PASSWORD_DEFAULT);

  

  $stmt =$db->prepare("INSERT INTO user(username, email, password) VALUES(?,?,?)");
  $stmt->execute(array($username,$email,$password));

 header("location: index.php");
 
}
?>