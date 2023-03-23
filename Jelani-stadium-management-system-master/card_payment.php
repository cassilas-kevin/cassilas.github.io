<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>


<div class="acc-form">
    <form action="action">
        <h1>CARD PAYMENT</h1>
        <div class="col-50">
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="name">Card Name</label><br>
            <Input class="box1" type="text" name="name" id="name" placeholder="Enter Name" required><br>
            <label for="PEmail">Email</label><br>
            <input class="box1" type="email" name="email" id="email" placeholder="Enter Email" required><br>
            <label for="card number">Card Number</label><br>
            <input class="box1" type="number" name="number" id="number" placeholder="1234-1234-1234-1234" required><br>
            <div class="div1">
                <label for="cardex">Exp</label><br>
                <input class="box2" type="month" name="month" id="month" placeholder="MM/YY" required><br>
            </div>
            <div class="div1">
                <label for="CardCVC"> CVC</label><br>
                <input class="box2" type="cvc" name="CVC" id="cvc" min="1" max="6" placeholder="352" required><br>
            </div>
            <span> <button type="Make Payment" class="btn-9"><a href="home.php">Make
                        Payment</a></button>&nbsp;&nbsp;<button type="button" class="btn-9"><a
                        href="home.php">close</a></button></span>
        </div>
    </form>

    <?php

include_once "./layouts/footer.php";
?>

    </html>