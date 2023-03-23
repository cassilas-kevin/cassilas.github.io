<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>


<main>
    <div class="container">
        <?php include_once '../feedback.php';?>
        <div class="event-table">
            <table>
                <h3>Event table</h3>
                <thead>

                    <tr>
                        <th>id</th>
                        <th>first_name</td>
                        <th>middle_name</th>
                        <th>last_name</th>
                        <th>id_no</th>
                        <th>phone_no</th>
                        <th>email</th>
                        <th>address</th>
                        <th>date_booked</th>
                        <th>time_booked</th>
                        <th>perfoming_artist</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php

$sql = 'SELECT * FROM event';
$cmd = $db->prepare($sql);
$cmd->execute();

$events = $cmd->fetchAll();
foreach($events as $event) {
  echo '
  
          <tr>
          <td>'.$event['id'].'</td>
          <td>'.$event['first_name'].'</td>
          <td>'.$event['middle_name'].'</td>
          <td>'.$event['last_name'].'</td>
          <td>'.$event['id_no'].'</td>
          <td>'.$event['phone_no'].'</td>
          <td>'.$event['email'].'</td>
          <td>'.$event['address'].'</td>
          <td>'.$event['date_booked'].'</td>
          <td>'.$event['time_booked'].'</td>
          <td>'.$event['perfoming_artist'].'</td>
          <td><a href="delete-event.php?id='.$event['id'].'">Delete</a></td> 
        

  ';
}

?>

</main>
</body>

</html>