<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<div class="container">
    <div class="profile">
        <div class="box1">
            <h1>Account</h1>
            <p>No need to worry ,Jelani has your back</p>
            <p>Deposit through Mpesa or card at your own comfort.</p>
            <label for="mpesa">pay with </label>
            <span><button type="button" class="btn-8"><a href="./mpesa.php">mpesa</a></button> &nbsp; <button
                    type="button" class="btn-8"><a href="./card_payment.php">card</a></button></span>
            <br>

        </div>

    </div>
</div>


<?php

include_once "./layouts/footer.php";
?>

</html>