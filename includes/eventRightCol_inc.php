<div class="columnRight">
    <div class="sideBox ">
        <h3>Event Services</h3>
        <hr>
        <p><a href="/mitzvah.php" class="subMitzvah">Bar &amp; Bat-Mitzvahs</a></p>
        <p><a href="/wedding.php" class="subWedding">Weddings</a></p>
        <p><a href="#">Corporate</a></p>
        <p><a href="#">Birthdays</a></p>
        <p><a href="#">Schools</a></p>
    </div>

    <div class="sideBox requestQuote">
        <h3>Request a Quote</h3>
        <hr>

        <?php
            if($_GET["fname"]){
                    $fname = $_GET["fname"];
                    $lname = $_GET["lname"];
                    $phone1 = $_GET["phone1"];
                    $phone2 = $_GET["phone2"];
                    $phone3 = $_GET["phone3"];
                    $fromEmail = $_GET["email"];
                    $partyDate = $_GET["partyDate"];
                    $eventTime = $_GET["eventTime"];
                    $eventType = $_GET["eventType"];
                    $guestOfHonor = $_GET["goh"];
                                                        
                    $to = "peter@colab.coop";
                    $subject = "RGE Quote Request";
                    $message = "Quote Requested: \n
                        name: $fname $lname 
                        phone: $phone1-$phone2-$phone3
                        from email: $fromEmail
                        party date: $partyDate
                        event time: $eventTime
                        event type: $eventType
                        guest of honor: $guestOfHonor
                        ==========================";
                    $headers = "From: $fromEmail";
                    
                    $sent = mail($to, $subject, $message, $headers) ; 
                    
                    if($sent) 
                        {print "<h4>SUCCESS…. CONTACT MADE.</h4>"; }
                    else 
                        {print "<h4>We encountered an error sending your mail</h4>"; }
                    

            }
            else {
                echo('
                    <form action="wedding.php" method"get" id="requestQuoteForm">
                        NAME*: 
                            <input type="text" name="fname" class="nameBox">
                            <input type="text" name="lname" class="nameBox">
                            <br />
                        PHONE*: <input type="text" name="phone1" class="phoneBox"><input type="text" name="phone2" class="phoneBox"><input type="text" name="phone3" class="phoneBox"><br />
                        EMAIL: <input type="text" name="email" class="emailBox"><br />
                        PARTY DATE: <input type="text" name="partyDate" class="partyDateBox"><br />
                        TIME OF EVENT: <select name="eventTime">
                                <option value="Afternoon">Afternoon</option>
                                <option value="Evening">Evening</option>
                            </select><br />
                        TYPE OF EVENT: <select name="eventType">
                                <option value="Bat-Mitzvah">Bat-Mitzvah</option>
                                <option value="Bar-Mitzvah">Bar-Mitzvah</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Corporate">Corporate</option>
                                <option value="Other">Other</option>
                            </select><br />
                        GUEST OF HONOR:<br />
                        <input type="text" name="goh" class="guestBox"><br />
                        <div class="formBtnRow">
                            <input type="submit" value="LETS DO IT!">
                            <!--send to Randy@RealGeniusDJs.com -->
                        </div>
                    </form>
                ');
            }
        ?>

    </div>

</div>
