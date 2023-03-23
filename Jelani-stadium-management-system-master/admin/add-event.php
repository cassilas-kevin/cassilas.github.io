<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<table class="event-table1" style="width:80%">
    <h3>Add event</h3>

    <thead>

        <tr>
            <th>event name</th>
            <th>Time</th>
            <th>Perfoming_artist</th>
            <th>Description</th>
            <th>Action</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>Alikiba live</td>
            <td>12:00</td>
            <td>Alikiba</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete-event.php?id='.$event['id'].'">Add</a></td>
            <td><a href="delete-event.php?id='.$event['id'].'">Delete</a></td>
        </tr>
        <tr>
            <td>Soutisoul live</td>
            <td>10:00</td>
            <td>Soutisoul</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete-event.php?id='.$event['id'].'">Add</a></td>
            <td><a href="delete-event.php?id='.$event['id'].'">Delete</a></td>
        </tr>

        <tr>
            <td>Nadia live</td>
            <td>12:00</td>
            <td>Nadia</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete-event.php?id='.$event['id'].'">Add</a></td>
            <td><a href="delete-event.php?id='.$event['id'].'">Delete</a></td>
        </tr>

        <tr>
            <td>Khalighraph live</td>
            <td>8:00</td>
            <td>khaligraph</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete_event.php?id='.$event['id'].'">Add</a></td>
            <td><a href="delete_event.php?id='.$event['id'].'">Delete</a></td>
        </tr>
    </thead>