<?php require_once './connect.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <title>Ticket system</title>
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="header">
                <h1>
                    <div class="container">
                        <div class="logo">
                            <img src="./images/jlogo2.png" alt="jlogo">
                        </div>
                    </div>
                    <strong>J</strong>ELAN<strong>I</strong>
                    <br />ST<strong>ADI</strong>UM
                </h1>

                <a href="" id="admin"><i class="fa fa-user-circle"></i></a>
                <img src="" alt="" />
                <div class="head"></div>
            </div>
        </div>

        <div class="container">
            <div class="section">
                <h3>BOOK YOUR TICKET</h3>

                <div class="container">
                    <div class="form">
                        <div class="button-box">
                            <div id="btn"></div>
                            <button type="button" class="toggle-btn" onclick="login()">
                                Log in
                            </button>
                            <button type="button" class="toggle-btn" onclick="register()">
                                Register
                            </button>
                        </div>

                        <div class="socials">
                            <a href=""><span class="fa fa-facebook"></span></a>
                            <a href=""><span class="fa fa-twitter"></span></a>
                            <a href=""><span class="fa fa-instagram"></span></a>
                        </div>


                        <form id="login" action="./controllers/login.php" class="input-group" method="POST">
                            <p>Welcome Back,</p>
                            <i class="fa fa-user-circle-o"></i>
                            <input type="text" placeholder="email" class="input-field" name="email" required />
                            <i class="fa fa-lock"></i>
                            <input type="password" placeholder="password" class="input-field" name="password"
                                required />
                            <input type="checkbox" checked="checked" name="remember" />
                            Remember password
                            <button type="submit" class="submit-btn">Log in</button>
                        </form>
                        <form id="register" class="input-group" action="register.php" method="post">
                            <p>New here?</p>
                            <p>Sign up with us to get great experience</p>
                            <i class="fa fa-user-circle-o"></i>
                            <input type="text" placeholder="username" class="input-field" name="username" required />
                            <i class="fa fa-envelope"></i>
                            <input type="email" placeholder="email" class="input-field" name="email" required />
                            <i class="fa fa-lock"></i>
                            <input type="password" placeholder="password" class="input-field" name="password"
                                required />

                            <input type="checkbox" name="terms"">I agree to the terms &
                conditions
                <button type=" submit" class="submit-btn">Register</button>
                        </form>
                    </div>
                </div>
                <p>Book your Tickets with us at an affordable price .</p>
                <p>
                    We at Jelani offer quality services to our customers at a low
                    rate.<br />Security is also guaranteed.
                </p>
            </div>
        </div>
    </div>

    <!---------------Footer-------------->

    <div class="container">
        <div class="footer">
            <div class="main-content">
                <div class="left-box">
                    <h2>About us</h2>
                    <div class="content">
                        <p>
                            Jelani website is a website design to aid sports lovers to book
                            tickets electronically.
                        </p>
                        <p>
                            The website has easen up the ticket booking process hence reduce
                            long queues on the stadium entrance.
                        </p>
                        <div class="socials-1">
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-youtube"></span></a>
                        </div>
                    </div>
                </div>

                <div class="center-box">
                    <h2>Address</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fa fa-map-marker"></span>
                            <span class="text">Nairobi,Kenya</span>
                        </div>

                        <div class="phone">
                            <span class="fa fa-phone"></span>
                            <span class="text">+254 111325487</span>
                        </div>

                        <div class="email">
                            <span class="fa fa-envelope"></span>
                            <span class="text">jelanistad@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="right-box">
                    <h2>Contact us</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email*</div>
                                <input type="email" placeholder="email" required />
                            </div>

                            <div class="msg">
                                <div class="text">Message*</div>
                                <textarea placeholder="Enter message" id="" cols="25" rows="2" required></textarea>
                            </div>
                            <div class="btn">
                                <button class="btn-1" type="submit">send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <hr class="hr-1" />
            <div class="copyright">
                <p>
                    Created by <strong>TheFourCreeds</strong> | &copy; 2021 All Rights
                    Reserved.
                </p>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>