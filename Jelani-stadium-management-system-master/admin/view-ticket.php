<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>


<main>
    <div class="container">
        <?php include_once '../feedback.php';?>
        <div class="ticket-table">
            <table>
                <h3> <?php echo $_GET['name']; ?>'S tickets</h3>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>game</th>
                        <th>ticket_number</th>
                        <th>class</th>
                        <th>number_of_ticket</th>
                        <th>date_booked</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                          $sql = 'SELECT * FROM ticket WHERE booked_by = ?';

                $sql = 'SELECT * FROM ticket';
                $cmd = $db->prepare($sql);
                $cmd->execute();

                $tickets = $cmd->fetchAll();
                foreach($tickets as $ticket) {
                  echo '
                          <tr>
                            <td>'.$ticket['id'].'</td>
                            <td>'.$ticket['game'].'</td>
                            <td>'.$ticket['ticket_number'].'</td>
                            <td>'.$ticket['class'].'</td>
                            <td>'.$ticket['number_of_ticket'].'</td>
                            <td>'.$ticket['date_booked'].'</td>
                            <td><a href="delete-ticket.php?id='.$ticket['id'].'">Delete</a></td>
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