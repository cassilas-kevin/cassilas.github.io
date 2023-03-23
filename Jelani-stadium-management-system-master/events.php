<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<div class="container">
    <div class="sports" id="sport">
        <h3>UPCOMING EVENTS</h3>
    </div>

    <div class="highlight-1">
        <div class="high-1">
            <h4>Book your ticket now .</h4>
            <i class="fa fa-meetup" aria-hidden="true"></i>
            <h5>SAUTISOL LIVE</h5>
            <img src="./images/sol.jpg" alt="" height="300px" width="60%"><br>
            <button type="button" class="btn-1">Book </button>
        </div>

        <div class="high-1">
            <h4>Book your ticket now.</h4>
            <i class="fa fa-meetup" aria-hidden="true"></i>
            <h5>OTILE BROWN LIVE</h5>
            <img src="./images/otile.jpg" alt="" height="300px" width="60%"><br>
            <button type="button" class="btn-1">Book</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="sports" id="sport">
        <h3>ALL EVENTS</h3>

        <p>Upcoming Events</p>
        <hr class="solid">
        <br>

        <div class="row">
            <div class="sp-column">
                <div class="card">
                    <img src="./images/alikiba.jpg" alt="Alikiba" style="width:90%" height="320vh">
                    <div class="wrapper">
                        <h2>ALIKIBA LIVE</h2>
                        <p class="title">Time 19:00 EAT</p>
                        <p>Book your ticket and never miss a moment</p>
                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                        <p><button class="btn-1" type="button"
                                onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book
                                    Ticket</a> </button></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="sp-column">
                <div class="card">
                    <img src="./images/nadia.jpg" alt="Nadia" style="width:90%" height="320vh">
                    <div class="wrapper">
                        <h2>NADIA LIVE</h2>
                        <p class="title">Time 16:00 EAT</p>
                        <p>Book your ticket and never miss a moment</p>
                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                        <p><button class="btn-1" type="button"
                                onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book
                                    Ticket</a> </button></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="sp-column">
                <div class="card">
                    <img src="./images/willy.jpg" alt="willy paul" style="width:90%" height="320vh">
                    <div class="wrapper">
                        <h2>WILLY PAUL LIVE</h2>
                        <p class="title">Time 15:00 EAT</p>
                        <p>Book your ticket and never miss a moment</p>
                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                        <p><button class="btn-1" type="button"
                                onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book
                                    Ticket</a> </button></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="sp-column">
                <div class="card">
                    <img src="./images/khali.jpg" alt="khaligraph" style="width:90%" height="320vh">
                    <div class="wrapper">
                        <h2>KHALIGRAPH LIVE</h2>
                        <p class="title">Time 20:00 EAT</p>
                        <p>Book your ticket and never miss a moment</p>
                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                        <p><button class="btn-1" type="button"
                                onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book
                                    Ticket</a> </button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once "./layouts/footer.php";
?>