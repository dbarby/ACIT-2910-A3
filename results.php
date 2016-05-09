<?php include 'header.php';?>

    <!-- Page Content -->
    <div class="container">

        <div class="results-container">
            <form>
                <div id="results-header">
                    <label>Your Results!</label>
                </div>
                <div class="row-container">
                    <!--Zoom-result just means that it is in focus. More applicable to the design where
                        there is one in focus and two below it.-->
                    <div class="zoom-result">
                        <div class="zoom-rank">
                            <p id="rank-1">#1</p>
                        </div>
                        <div class="zoom-image">
                            <img id="rank-1-img" alt="1st laptop img" src="img/asus-laptop-thumbnail.jpg">
                        </div>
                        <div class="zoom-description">
                            <p id="brand">Asus ZenBook UX303UB</p>
                            <ul>
                                <li>Intel Core i7</li>
                                <li>8Gb RAM</li>
                                <li>2.2lbs</li>
                            </ul>
                        </div>
                    </div>

                    <div class="zoom-result">
                        <div class="zoom-rank">
                            <p id="rank-2">#2</p>
                        </div>
                        <div class="zoom-image">
                            <img id="rank-2-img" alt="2nd laptop img" src="img/asus-laptop-thumbnail.jpg">
                        </div>
                        <div class="zoom-description">
                            <p id="brand">Asus ZenBook UX303UB</p>
                            <ul>
                                <li>Intel Core i7</li>
                                <li>8Gb RAM</li>
                                <li>2.2lbs</li>
                            </ul>
                        </div>
                    </div>

                    <div class="zoom-result">
                        <div class="zoom-rank">
                            <p id="rank-3">#3</p>
                        </div>
                        <div class="zoom-image">

                            <img id="rank-3-img" alt="3rd laptop img" src="img/asus-laptop-thumbnail.jpg">
                        </div>
                        <div class="zoom-description">
                            <p id="brand">Asus ZenBook UX303UB</p>
                            <ul>
                                <li>Intel Core i7</li>
                                <li>8Gb RAM</li>
                                <li>2.2lbs</li>
                            </ul>
                        </div>
                    </div>
                    <div id="compare-header">
                        <label>Comparisons</label>
                    </div>

                    <div class="compare-category-header">
                        <button id="batt-life-btn">Battery Life</button>
                        <div class="compare-content" id="batt-life-content">
                            <table>
                                <tr>
                                    <td><b>Rank</b></td>
                                    <td><b>Laptop</b></td>
                                    <td><b>Rated hours</b></td>

                                </tr>
                                <tr>
                                    <td><b>1</b></td>
                                    <td>Asus</td>
                                    <td>9 hours</td>
                                </tr>
                                <tr>
                                    <td><b>2</b></td>
                                    <td>Lenovo</td>
                                    <td>7 hours</td>
                                </tr>
                                <tr>
                                    <td><b>3</b></td>
                                    <td>HP</td>
                                    <td>6 hours</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="compare-category-header">
                        <button id="screen-size-btn">Screen Size</button>
                        <div class="compare-content" id="screen-size-content">
                            <table>
                                <tr>
                                    <td><b>Rank</b></td>
                                    <td><b>Laptop</b></td>
                                    <td><b>Size</b></td>
                                    <td><b>Resolution</b></td>

                                </tr>
                                <tr>
                                    <td><b>1</b></td>
                                    <td>Asus</td>
                                    <td>15.6"</td>
                                    <td>1920x1080</td>
                                </tr>
                                <tr>
                                    <td><b>2</b></td>
                                    <td>Lenovo</td>
                                    <td>14.1"</td>
                                    <td>1920x1080</td>
                                </tr>
                                <tr>
                                    <td><b>3</b></td>
                                    <td>HP</td>
                                    <td>17"</td>
                                    <td>1600x900</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="compare-category-header">
                        <button id="more-btn">More</button>
                        <div class="compare-content" id="more-content">
                            <p>Comparison</p>
                        </div>
                    </div>
                    <!--
                        **In place for testing. Attempt the make two smaller results below first**
                        <div class="nozoom-result-left">
                            <div class="nozoom-rank">
                                <p>#2</p>
                            </div>
                        </div>
                        <div class="nozoom-result-right">
                            <div class="nozoom-rank">
                                <p>#3</p>
                            </div>
                        </div>
-->



                </div>
            </form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <!--    <script src="js/jquery.js"></script>-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#batt-life-content, #screen-size-content,#more-content').hide();
            /*$('#btn-A1').click(function() {
                $('#description-A1').slideToggle("fast");
            });*/
            $("#batt-life-btn").click(function(e) {
                e.preventDefault();
                $("#batt-life-content").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#screen-size-btn").click(function(e) {
                e.preventDefault();
                $("#screen-size-content").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#more-btn").click(function(e) {
                e.preventDefault();
                $("#more-content").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            
        });
    </script>

</body>
<footer>
    <div class="footerholder">
        <div class="footer">
            <a href="index2.html">
                <button type="submit" class="btn-footer">
                    <</button>
            </a>
            <a href="price.html">
                <button class="btn-footer">></button>
            </a>
        </div>
    </div>
</footer>


</html>