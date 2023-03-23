<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<main>
    <div class="container">
        <?php include_once '../feedback.php';?>
        <div class="ticket-table">
            <table>
                <h3>Customer table</h3>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>username</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                  $sql = 'SELECT * FROM user';
                  $cmd = $db->prepare($sql);
                  $cmd->execute();

                  $users = $cmd->fetchAll();
                  foreach($users as $user) {
                    echo '
                            <tr>
                              <td>'.$user['id'].'</td>
                              <td>'.$user['username'].'</td>
                              <td>'.$user['email'].'</td>
                              <td><a href="delete-customer.php?id='.$user['id'].'">Delete user</a> &nbsp;&nbsp;<a href="view-ticket.php?id='.$user['id'].'&name='.$user['username'].'">View tickets</a></td>
                              
                            </tr>

                    ';
                  }

                  ?>
                </tbody>
        </div>
        </table>
    </div>
</main>
</body>

</html>