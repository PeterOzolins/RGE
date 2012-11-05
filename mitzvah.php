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
                                    <h2>The Ultimate Party Experience!</h2>
                                    <h4>With Real Genius</h4>
                                    <hr />
                                    <div class="weddingImageBig"></div>
                                    <h3>Professional DJ's &amp; MC's</h3>
                                    <p>With over 25 professional entertainers on staff, our goal is to help you, from start to finish, create the party of a lifetime!  We specialize in creating an “EVERYBODY PARTY TM” ,entertaining kids, adults, and people of all ages with a variety of music, games, and interactive follow-alongs.</p>

                                    <div class="columnLeftRow">
                                        <h3>The Party!</h3>
                                        <div class="rowImage"><img src="img/mitzPagePhotos/mitzvah-body1.jpg" /></div>
                                        <p>
                                            MC’s, Pro-DJs, Interactive Dancers, Light Shows, Uplighting, Montages, Video Projection, Giveaways, Games, and Free Event Planning
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="columnLeftRow">
                                        <h3>Pre-Party! </h3>
                                        <div class="rowImage"><img src="/img/mitzPagePhotos/mitzvah-body2.jpg" /></div>
                                        <p>
                                            GreenScreen Photos, Airbrush Artists (T-Shirts, Hats, Tattoos), Game Stations, Photobooths, Glitter Tattoos, Virtual Graffiti Wall...and more
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="columnLeftRow">
                                        <h3>Event Planning</h3>
                                        <div class="rowImage"><img src="img/mitzPagePhotos/mitzvah-body1.jpg" /></div>
                                        <p>
                                            Included in your entertainment package is your PARTY EXPERT, someone assigned to your event to plan, coordinate, and excecute all of the elements of your party.  With all of the vendors, entertainers, and experts under one roof, we make it easy.  Personal service is our #1 priority..
                                        </p>
                                        <div class="clearfix"></div>
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
