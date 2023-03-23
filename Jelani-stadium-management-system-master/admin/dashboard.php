<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<div class="container">
    <div class="cards">
        <div class="card-1">
            <h3><i class="fa fa-user-circle-o"></i> users</h3>
        </div>

        <div class="card-1">
            <h3><i class="fa fa-calendar-check-o"></i> Active Bokings</h3>
        </div>

        <div class="card-1">
            <h3><i class="fa fa-calendar-times-o"></i> Blocked bookings</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="profile">
        <h3>Profile</h3>
        <p>You can update your profile here.</p>
        <button type="button" class="btn2">update profile</button>
    </div>
</div>
</body>

</html>