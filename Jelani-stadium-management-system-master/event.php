<?php


require_once 'connect.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $first_name= $_POST['first_name'];
  $middle_name= $_POST['middle_name'];
  $last_name= $_POST['last_name'];
  $id_no= $_POST['id_no'];
  $phone_no= $_POST['phone_no'];
  $email= $_POST['email'];
  $address= $_POST['address'];
  $date_booked= $_POST['date_booked'];
  $time_booked= $_POST['time_booked'];
  $perfoming_artist= $_POST['perfoming_artist'];



  $stmt =$db->prepare("INSERT INTO event(first_name,middle_name,last_name,id_no,phone_no,email,address,date_booked,time_booked,perfoming_artist) VALUES(?,?,?,?,?,?,?,?,?,?)");
  $stmt->execute(array($first_name,$middle_name,$last_name,$id_no,$phone_no,$email,$address,$date_booked,$time_booked,$perfoming_artist));

 header("location: events.php");
 
}
?>