<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<table class="match-table" style="width:80%">

    <thead>
        <tr>
            <th>Home</th>
            <th>Away</th>
            <th>time</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>SONY SUGAR</td>
            <td>Muhoroni</td>
            <td>12:00</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete-ticket.php?id='.$ticket['id'].'">View</a> &nbsp;&nbsp;<a
                    href="delete-ticket.php?id='.$ticket['id'].'">Delete</a></td>
        </tr>

        <tr>
            <td>SHARKS</td>
            <td>EVERTON</td>
            <td>11:00</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete-tick.php?id='.$ticket['id'].'">view</a> &nbsp;&nbsp;<a
                    href="delete-ticket.php?id='.$ticket['id'].'">delete</a> </td>

        </tr>

        <tr>
            <td>POSTA RANGERS</td>
            <td>GORMAHIA</td>
            <td>11:00</td>
            <td>Book your ticket and never miss a moment</td>
            <td><a href="delete-ticket.php?id='.$user['id'].'">View</a> &nbsp;&nbsp;<a
                    href="delete-ticket.php?id='.$user['id'].'">Delete</a></td>
        </tr>

    </thead>


</table>