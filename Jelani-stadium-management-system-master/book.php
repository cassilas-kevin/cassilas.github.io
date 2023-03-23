<?php
require_once "./connect.php";
include_once "./layouts/header.php";
?>


<div class="container">
    <div class="book-cont">
        <div class="modal-book">
            <div id="id01">
                <form action="tickets.php" method="POST">
                    <h4>BOOK</h4>


                    <p>Game

                        <select name="game" id="">
                            <option value="Mathare vs Gormahia">Mathare vs Gormahia</option>
                            <option value="Posta rangers vs Gormahia">Posta rangers vs Gormahia</option>
                            <option value="Sharks vs Everton">Sharks vs Everton</option>
                            <option value="Sony sugar vs muhoroni">Sony sugar vs muhoroni</option>
                            <option value="Bandari vs KRA">Bandari vs KRA</option>
                            <option value="Nzoia vs chemelil">Nzoia vs chemelil</option>
                            <option value="Gormahia vs sofapaka">Gormahia vs sofapaka</option>
                            <option value="Ulinzi vs Thika UTD">Ulinzi vs Thika UTD</option>
                            <option value="City Stars vs Western stima">City Stars vs Western stima</option>
                            <option value="Kakamega vs Homeboyz">Kakamega vs Homeboyz</option>
                        </select>
                    </p>

                    <p>Ticket number <input type="number" name="ticket_number"></p>
                    <p>class <select name="class" id="">
                            <option value="regular">REGULAR</option>
                            <option value="vip">VIP</option>
                            <option value="vvip">VVIP</option>
                        </select>
                    </p>
                    <p>Number of Tickets <select name="number_of_ticket" id="">
                            <option value="1">1 Ticket</option>
                            <option value="2">2 Tickets</option>
                            <option value="3">3 Tickets</option>
                            <option value="4">4 Tickets</option>
                            <option value="5">5 Tickets</option>
                            <option value="6">6 Tickets</option>
                            <option value="7">7 Tickets</option>
                            <option value="8">8 Tickets</option>
                            <option value="9">9 Tickets</option>
                            <option value="10">10 Tickets</option>
                        </select></p>
                    <p>Date booked <input type="datetime-local" name="date_booked"></p>

                    <button type="button" class="cancel-btn"
                        onclick="document.getElementById('id01').style.display='none'">
                        Cancel
                    </button>
                    <button type="submit" class="submit_btn">submit</button>
                    <button type="reset" class="update-btn">update</button>
                </form>
            </div>
        </div>
    </div>

</div>

<form id="regForm" action="event.php" method="POST">
    <h1>Book Event:</h1>
    <div class="tab"> Personal Details:
        <p><input type="text" name="first_name" placeholder="First_Name..."></p>
        <p><input type="text" name="middle_name" placeholder="Middle_Name..."></p>
        <p><input type="text" name="last_name" placeholder="Last_Name..."></p>
        <p><input type="number" name="id_no" placeholder="ID_No..."></p>
    </div>
    <div class="tab"> Contact:
        <p>
            <input type="tel" name="phone_no" placeholder="Phone_No...">
            <span>Format 254-xxx-xxx-xxx</span>
        </p>
        <p>
            <input type="text" name="email" placeholder="E-mail...">
            <span>Please enter a valid email (user@domain.com)</span>
        </p>
        <p><input name="address" placeholder="Address..."></p>
    </div>
    <div class="tab"> Reservation:
        <p><input type="date" name="date_booked" placeholder="Date..."></p>
        <p><input type="time" name="time_booked" placeholder="Time..."></p>
    </div>
    <div class="tab"> perfoming Artist:
        <p>
            <select name="perfoming_artist" id="">
                <option value="1">OTILE</option>
                <option value="2">NADIA</option>
                <option value="3">KHALIGRAPH</option>
                <option value="4">WILLY PAUL</option>
                <option value="5">ALIKIBA</option>
                <option value="6">SAUTI SOL</option>
            </select>
        </p>
    </div>
    <button type="submit" class="submit-btnevents">Submit</button>
</form>


<?php
include_once "./layouts/footer.php";
?>





</body>

</html>