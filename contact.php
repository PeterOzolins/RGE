<!DOCTYPE html>

    <?php
        include("includes/html_head_inc.php");
    ?>

        <!-- Add your site or application content here -->
                    <div id="bodyContainer">
                        <?php
                            include("includes/header_inc.php");
                        ?>

                        <!-- END HEADER -->
                        <!-- ### -->
                        <div id="contentContainer">
                            <div id="contentContainerInner">
                                <div class="clearfix"></div>
                                <div class="columnLeft">
                                     <div class="clearfix"> 
                                    </div>
                                    <h1><span class="iCaps">C</span>ontact <span class="dark"><span class="iCaps">U</span>s...</span></h1>
                                    <hr class="enhancementsTitleLine"/>

                                    <?php include('includes/requestQuote_inc.php'); ?>    

                                </div>
                            <!--###########-->      
                                <!-- ##end left column / start right column -->

                                <div class="columnRight">
                                    <div class="sideBox ">
                                        <p>Some stuff like an address or something like that you know...</p>
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
