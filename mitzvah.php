<!DOCTYPE html>

    <?php
        include("includes/html_head_inc.php");
    ?>

        <!-- Add your site or application content here -->
                    <div id="bodyContainer">
                        <?php
                            include("includes/header_mitzvah_inc.php");
                        ?>

                        <!-- END HEADER -->
                        <!-- ### -->
                        <div id="contentContainer">
                            <div id="contentContainerInner">
                                <div class="columnLeft">
                                    <div class="clearfix">
                                    </div>
                                    <h2>Your Perfect Day</h2>
                                    <h4>Your ceremony, your reception, your music.</h4>
                                    <hr />
                                    <div class="weddingImageBig"></div>
                                    <h3>Professional DJ's & MC's</h3>
                                    <p>Our experienced staff have backgrounds in television, radio, improv and stage with your team, you get 2 performers who specialize in getting your crowd excited from the moment you walk in!</p>

                                    <div class="columnLeftRow">
                                        <h3>Plan It All With Us</h3>
                                        <div class="rowImage"><img src="img/weddingDetailsRow.jpg" /></div>
                                        <p>
                                            Your MC focuses on your special moments. The Grand entrance, First Dance, Toasts, Cake cutting; just to start... Your DG specializes in playing the music you select, while mixing in an amazing blend of what keep your guests on the dance floor all night long.
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="columnLeftRow">
                                        <h3>Event Scheduling</h3>
                                        <div class="rowImage"><img src="/img/weddingSchedulingRow.jpg" /></div>
                                        <p>
                                            We do it all!!!  We work with you closely to create the perfect time-line.  Your schedule will keep include all of your formalities & tie together lots of dancing and fun so your party is moving every second. We even coordinate all of the scheduling with your other vendors!
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="columnLeftRow">
                                        <h3>Have It Your Way</h3>
                                        <div class="rowImage"><img src="img/weddingDetailsRow.jpg" /></div>
                                        <p>
                                            Every event we do is different and unique.  Our staff is the same.  With many performers to choose from, you will find the perfect team of MC & DJ to run your event with smooth precision.
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="columnLeftRow">
                                        <h3>The Add-Ons</h3>
                                        <div class="rowImage"><img src="/img/weddingAdOnsRow.jpg" /></div>
                                        <p>
                                            Aside from music we also provide some incredible ADD-ONs for your special day...Photobooths, Uplighting, or a personalized monogram on the dance floor...It’s only the beginning of what we can provide.
                                        </p>
                                    </div>
                                </div>
                                <div class="columnRight">
                                    <div class="sideBox">
                                        <h3>Event Services</h3>
                                        <hr>
                                        <p><a href="/mitzvah.php" class="subMenuActive">Bar & Batmitzvahs</a></p>
                                        <p><a href="/wedding.php">Weddings</a></p>
                                        <p><a href="#">Corporate</a></p>
                                        <p><a href="#">Birthdays</a></p>
                                        <p><a href="#">Schools</a></p>
                                    </div>
                                    <div class="sideBox requestQuote">
                                        <h3>Request a Quote</h3>
                                        <hr>
                                        <form id="requestQuoteForm">
                                            NAME*: <input type="text" class="nameBox"><input type="text" class="nameBox"><br />
                                            PHONE*: <input type="text" class="phoneBox"><input type="text" class="phoneBox"><input type="text" class="phoneBox"><br />
                                            EMAIL: <input type="text" class="emailBox"><br />
                                            PARTY DATE: <input type="text" class="partyDateBox"><br />
                                            TIME OF EVENT: <select>
                                                    <option value="Afternoon">Afternoon</option>
                                                    <option value="Evening">Evening</option>
                                                </select><br />
                                            TYPE OF EVENT: <select>
                                                    <option value="Bar-Mitzvah">Bar-Mitzvah</option>
                                                    <option value="Wedding">Wedding</option>
                                                </select><br />
                                            GUESTS OF HONOR:<br />
                                            <input type="text" class="guestBox"><br />
                                            <input type="submit" value="LETS DO IT!">
                                            <input type="reset" value="LETS NOT DO IT">
                                        </form>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div id="contentBottomEdge"></div>
                        </div>
                    </div>
<!-- footer -->
                    <?php
                        include("includes/footer_inc.php");
                    ?>

    </body>
</html>