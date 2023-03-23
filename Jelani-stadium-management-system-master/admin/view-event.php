<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>


<main>
    <div class="container">
        <?php include_once '../feedback.php';?>
        <div class="event-table">
            <table>
                <h3> <?php echo $_GET['name']; ?>'S event</h3>
                <thead>

                    <tr>
                        <td>'.$event['id'].'</td>
                        <td>'.$event['first_name'].'</td>
                        <td>'.$event['middle_name'].'</td>
                        <td>'.$event['last_name'].'</td>
                        <td>'.$event['email'].'</td>
                        <td>'.$event['address'].'</td>
                        <td>'.$event['phone_no'].'</td>
                        <td>'.$event['reservation'].'</td>
                        <td>'.$event['perfoming_artist'].'</td>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                          $sql = 'SELECT * FROM event WHERE booked_by = ?';

                $sql = 'SELECT * FROM event';
                $cmd = $db->prepare($sql);
                $cmd->execute();

                $tickets = $cmd->fetchAll();
                foreach($event as $event) {
                  echo '
                          <tr>
                          <td>'.$event['id'].'</td>
                          <td>'.$event['first_name'].'</td>
                          <td>'.$event['middle_name'].'</td>
                          <td>'.$event['last_name'].'</td>
                          <td>'.$event['email'].'</td>
                          <td>'.$event['address'].'</td>
                          <td>'.$event['phone_no'].'</td>
                          <td>'.$event['reservation'].'</td>
                          <td>'.$event['perfoming_artist'].'</td>
                          <td><a href="delete-event.php?id='.$ticket['id'].'">Delete</a></td>
                          </tr>

                  ';
                }
            }

              ?>

                </tbody>
        </div>
        </table>
    </div>
</main>
</body>

</html>