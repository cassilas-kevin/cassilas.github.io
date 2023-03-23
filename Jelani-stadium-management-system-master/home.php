<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>


<div class="container">
    <div class="section-1">
        <div class="col-1">
            <?php
            include_once './feedback.php';
            ?>
            <i class="fa fa-search"></i>
            <h4>The world's best Booking search engine</h4>
            <p>
                You can search for any game of your choice and book your ticket.All games <span id="dots">
                    ...</span> <span id="more">are listed in our search engine so that you can never miss a
                    game.</span>
            </p>
            <button class="btn-1" onclick="myFunction()" id="myBtn1">Learn More</button>
        </div>

        <div class="col-2">
            <i class="fa fa-phone"></i>
            <h4>24/7 open suppport Lines</h4>
            <p>
                we are open 24 hours ready to provide support to our esteemed
                customers. You <span id="cont"> ...</span> <span id="open">can reach us through calls at any
                    time incase you need any assistance.</span>
            </p>
            <button class="btn-1" onclick="myFunction()" id="myBtn2">Learn More</button>
        </div>

        <div class="col-3">
            <i class="fa fa-money"></i>
            <h4>Convinient payment Method</h4>
            <p>
                We offer a convinient way of paying for your tickets, or booking
                your reservations.Customers <span id="dots"> ...</span> <span id="more">can be able to deposit
                    money in their account through ways like Mpesa or cards.</span>
            </p>
            <button class="btn-1" onclick="myFunction()" id="myBtn3">Learn More</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="search">
        <h5>Don't be left out</h5>
        <p>Come watch Sports with us Live .Book your Tickets too to events.</p>

        <input type="text" name="" id="" placeholder="search by team , artist or event">
        <button type="submit" class="btn-3"><i class="fa fa-search-plus"></i></button>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
</div>

<div class="container">
    <div class="highlights">
        <h4>HIGHLIGHTS</h4>
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
                <h5>POSTA RANGERS vs KAKAMEGA HOMEBOYZ</h5>
                <img src="./images/posta-rangers-kakamega-homeboyz.png" alt="" height="250px" width="50%"><br>
                <button type="button" class="btn-1">Book</button>
            </div>
        </div>

    </div>
</div>

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
    <div class="newsletter">
        <h5>Subscribe to our newsletter</h5>
        <span><input type="email" name="" id="" placeholder="Email"> <button type="submit"
                class="btn-2">submit</button></span><br>
        <span><input type="checkbox" checked="checked"> Events &nbsp; <input type="checkbox" checked="checked">
            matches</span>
        <p>Be the first to know the latest matches and events.we'll send you the latest trends in one mail</p>
        <span><a href=""><i class="fa fa-whatsapp"></i> Whatsapp</a> &nbsp; <a href=""><i class="fa fa-telegram"></i>
                Telegram</a></span>
    </div>
</div>


<div class="container">
    <div class="contact-page">
        <div class="contact-us">
            <div class="wrap-contact">
                <div class="contact1">
                    <span class="contact100-form-title-1">
                        Contact Us
                    </span>
                    <br>

                    <span class="contact100-form-title-2">
                        Feel free to drop us a line below!
                    </span>
                </div>
                <br>

                <form class="contact100-form">
                    <div class="wrap-input100 ">
                        <p class="label-input100">Full Name: <input class="input100" type="text" name="name"
                                placeholder="Enter full name"></p>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <p class="label-input100">Email: <input class="input100" type="email" name="email"
                                placeholder="Enter email addess"></p>


                    </div>

                    <div class="wrap-input100 validate-input" ">
                                <p class=" label-input100">Phone: <input type="text" name="phone"
                            placeholder="Enter phone number" required></p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <p class="label-input100">Message:</p>
                        <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>

                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="btn-1">
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<?php
include_once "./layouts/footer.php";
?>











<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var mybtn1Text = document.getElementById("myBtn1");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        mybtn1Text.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        mybtn1Text.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function myFunction() {
    var cont = document.getElementById("cont");
    var moreText = document.getElementById("open");
    var mybtn2Text = document.getElementById("myBtn2");

    if (cont.style.display === "none") {
        cont.style.display = "inline";
        mybtn2Text.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        cont.style.display = "none";
        mybtn2Text.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
</script>
</body>

</html>