<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>
<div class="acc-form">
    <form action="connect.php" method="post">
        <h1>MPESA PAYMENT</h1>
        <h2>PAYBILL-247274</h2>
        <h2>ACC-NO YOUR NAME</h2>
        <label for="name">MPESA NAME</label><br />
        <input class="box1" type="text" name="mpesa.name" id="name" placeholder="Enter Name" required /><br />
        <label for="MPESA number">MPESA Number</label><br />
        <input class="box1" type="PHONE number" name="PHONE number" id="PHONE number" placeholder="07xxxxxxxx"
            required /><br />
        <div class="div1">
            <label for="DATE">DATE OF PAYMENT</label><br />
            <input class="box2" type="date" name="date" id="date" placeholder="DD/MM/YY" required /><br />
        </div>
        &nbsp; &nbsp;
        <div class="div1">
            <label for="CONFIRMATION CODE">CONFERMATION CODE</label><br />
            <input class="box2" type="text" name="CONFIRMATION CODE" id="CONFIRMATION CODE" placeholder="PQ1002WWWDBUK"
                required /><br />
        </div>
        <div>
            <button type="Make Payment" class="btn-9"><a href="home.php">Make Payment</a></button><br>
            <button type="button" class="btn-9"><a href="home.php">close</a></button><br>
        </div>
    </form>
</div>

<?php

include_once "./layouts/footer.php";
?>

</html>