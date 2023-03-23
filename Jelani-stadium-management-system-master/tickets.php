<?php


require_once 'connect.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $game= $_POST['game'];
  $ticket_number= $_POST['ticket_number'];
  $class= $_POST['class'];
  $number_of_ticket= $_POST['number_of_ticket'];
  $booked_by= $_SESSION['user']['id'];
  $date_booked= $_POST['date_booked'];



  $stmt =$db->prepare("INSERT INTO ticket(game,ticket_number, class,number_of_ticket,booked_by,date_booked) VALUES(?,?,?,?,?,?)");
  $stmt->execute(array($game,$ticket_number,$class,$number_of_ticket,$booked_by,$date_booked));

 header("location: sports.php");
 
}
?>