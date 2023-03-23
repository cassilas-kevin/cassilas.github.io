<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>

<div class="container">
    <div class="highlights">
        <h4>TOP MATCHES</h4>
        <hr class="solid">

        <div class="highlight">
            <div class="high-1">
                <h4>Book your ticket now .</h4>
                <i class="fa fa-futbol-o"></i>
                <h5>MATHARE vs GORMAHIA</h5>
                <img src="./images/mathare-united-gor-mahia.png" alt="" height="250px" width="50%"><br>
                <button type="button" class="btn-1">Book </button>
            </div>

            <div class="high-1">
                <h4>Book your ticket now.</h4>
                <i class="fa fa-futbol-o"></i>
                <h5>KARIOBANGI SHARKS vs EVERTON</h5>
                <img src="./images/Sharks-v-Everton.jpg" alt="" height="250px" width="50%"><br>
                <button type="button" class="btn-1">Book</button>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="sports" id="sport">
        <h3>ALL MATCHES</h3>

        <h2>Come as <strong>ONE</strong> <i class="fa fa-user"></i> leave as a <strong>FAMILY</strong> <i
                class="fa fa-users"></i></h2>
        <p>Upcoming matches</p>
        <hr class="solid">
        <br>

        <div class="row">
            <div class="sp-column">
                <div class="card">
                    <img src="./images/posta-rangers-gor-mahia.png" alt="post rangers" style="width:90%" height="300vh">
                    <div class="wrapper">
                        <h2>POSTA RANGERS vs GORMAHIA</h2>
                        <p class="title">Time 12:00 </p>
                        <p>Book your ticket and never miss a moment</p>
                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                        <p><button class="btn-1" type="button"
                                onclick="document.getElementById('id01').style.display='block'"><a href="book.php">Book
                                    Ticket</a> </button></p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="sp-column">
                    <div class="card">
                        <img src="./images/Sharks-v-Everton.jpg" alt="post rangers" style="width:90%" height="300vh">
                        <div class="wrapper">
                            <h2>SHARKS vs EVERTON</h2>
                            <p class="title">Time 12:00 </p>
                            <p>Book your ticket and never miss a moment</p>
                            <p>incase of ticket queries, email us :info@jelanistad.com</p>
                            <p><button class="btn-1" type="button"
                                    onclick="document.getElementById('id01').style.display='block'"><a
                                        href="book.php">Book Ticket</a> </button></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="sp-column">
                        <div class="card">
                            <img src="./images/sony-sugar-muhoroni-youth.png" alt="sony" style="width:90%"
                                height="300vh">
                            <div class="wrapper">
                                <h2>SONY SUGAR vs Muhoroni</h2>
                                <p class="title">Time 12:00 </p>
                                <p>Book your ticket and never miss a moment</p>
                                <p>incase of ticket queries, email us :info@jelanistad.com</p>
                                <p><button class="btn-1" type="button"
                                        onclick="document.getElementById('id01').style.display='block'"><a
                                            href="book.php">Book Ticket</a> </button></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="sp-column">
                            <div class="card">
                                <img src="./images/kenya-rev-authority-bandari-fc.png" alt="post rangers"
                                    style="width:90%" height="300vh">
                                <div class="wrapper">
                                    <h2>BANDARI vs KRA</h2>
                                    <p class="title">Time 12:00 </p>
                                    <p>Book your ticket and never miss a moment</p>
                                    <p>incase of ticket queries, email us :info@jelanistad.com</p>
                                    <p><button class="btn-1" type="button"
                                            onclick="document.getElementById('id01').style.display='block'"><a
                                                href="book.php">Book Ticket</a> </button></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="sp-column">
                                <div class="card">
                                    <img src="./images/nzoia-united-chemelil-sugar.png" alt="post rangers"
                                        style="width:90%" height="300vh">
                                    <div class="wrapper">
                                        <h2>Nzoia vs CHEMELIL</h2>
                                        <p class="title">Time 12:00 </p>
                                        <p>Book your ticket and never miss a moment</p>
                                        <p>incase of ticket queries, email us :info@jelanistad.com</p>
                                        <p><button class="btn-1" type="button"
                                                onclick="document.getElementById('id01').style.display='block'"><a
                                                    href="book.php">Book Ticket</a> </button></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="sp-column">
                                    <div class="card">
                                        <img src="./images/sofapaka-gor-mahia.png" alt="post rangers" style="width:90%"
                                            height="300vh">
                                        <div class="wrapper">
                                            <h2>GORMAHIA vs SOFAPAKA</h2>
                                            <p class="title">Time 12:00 </p>
                                            <p>Book your ticket and never miss a moment</p>
                                            <p>incase of ticket queries, email us :info@jelanistad.com</p>
                                            <p><button class="btn-1" type="button"
                                                    onclick="document.getElementById('id01').style.display='block'"><a
                                                        href="book.php">Book Ticket</a> </button></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="sp-column">
                                        <div class="card">
                                            <img src="./images/ulinzi-stars-thika-united.png" alt="post rangers"
                                                style="width:90%" height="300vh">
                                            <div class="wrapper">
                                                <h2>ULINZI vs THIKA UNITED</h2>
                                                <p class="title">Time 12:00 </p>
                                                <p>Book your ticket and never miss a moment</p>
                                                <p>incase of ticket queries, email us :info@jelanistad.com</p>
                                                <p><button class="btn-1" type="button"
                                                        onclick="document.getElementById('id01').style.display='block'"><a
                                                            href="book.php">Book Ticket</a> </button></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="sp-column">
                                            <div class="card">
                                                <img src="./images/western-stima-fc-nairobi-city-stars-fc.png"
                                                    alt="post rangers" style="width:90%" height="300vh">
                                                <div class="wrapper">
                                                    <h2>CITY STARS vs WESTERN STIMA</h2>
                                                    <p class="title">Time 12:00 </p>
                                                    <p>Book your ticket and never miss a moment</p>
                                                    <p>incase of ticket queries, email us :info@jelanistad.com
                                                    </p>
                                                    <p><button class="btn-1" type="button"
                                                            onclick="document.getElementById('id01').style.display='block'"><a
                                                                href="book.php">Book Ticket</a> </button></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="sp-column">
                                                <div class="card">
                                                    <img src="./images/kakamega-homeboyz-kcb-game.jpg"
                                                        alt="post rangers" style="width:90%" height="300vh">
                                                    <div class="wrapper">
                                                        <h2>KAKAMEGA vs HOMEBOYZ</h2>
                                                        <p class="title">Time 12:00 </p>
                                                        <p>Book your ticket and never miss a moment</p>
                                                        <p>incase of ticket queries, email us
                                                            :info@jelanistad.com</p>
                                                        <p><button class="btn-1" type="button"
                                                                onclick="document.getElementById('id01').style.display='block'"><a
                                                                    href="book.php">Book Ticket</a> </button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="next">
                                        <a href=""><i class="fa fa-angle-double-left"></i> previous</a>
                                        <a href="">1</a>
                                        <a href="">2</a>
                                        <a href="">3</a>
                                        <a href="">next <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="newsletter">
                                        <h5>Subscribe to our newsletter</h5>
                                        <span><input type="email" name="" id="" placeholder="Email"> <button
                                                type="submit" class="btn-2">submit</button></span><br>
                                        <span><input type="checkbox" checked="checked"> Events &nbsp; <input
                                                type="checkbox" checked="checked"> matches</span>
                                        <p>Be the first to know the latest matches and events.we'll send you the
                                            latest trends in one mail</p>
                                        <span><a href=""><i class="fa fa-whatsapp"></i> Whatsapp</a> &nbsp; <a
                                                href=""><i class="fa fa-telegram"></i> Telegram</a></span>
                                    </div>
                                </div>


                                <?php
                                include_once "./layouts/footer.php";
                                ?>


                                <script>
                                // Get the modal
                                var register = document.getElementById("id01");

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == register) {
                                        register.style.display = "none";
                                    }
                                };
                                </script>






                                <script src="./js/script.js"></script>
                                </body>

                                </html>