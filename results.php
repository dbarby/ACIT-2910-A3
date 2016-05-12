<?php include 'header.php';

$res = 'SELECT * FROM product'; 
$statement = $conn->prepare($res);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
?>

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
                    <?php 
                    foreach ($rows as $row) {
                    echo '<div class="zoom-result">
                        <div class="zoom-rank">
                            <p id="rank-' . $count . '">#' . $count . '</p>
                        </div>
                        <div class="zoom-image">
                            <img id="rank-' . $count . '-img" alt="' . $count . 'st laptop img" src="' . $row["picurl"] . '" width="110px">
                        </div>
                        <div class="zoom-description">
                            <p id="brand">' . $row["p_name"] . '</p>
                            <ul>
                                <li>' . $row["cpu"] . '</li>
                                <li>' . $row["battery"] . ' Hours Battery</li>
                                <li>' . $row["graphics"] . '</li>
                            </ul>
                        </div>
                    </div>';
                    $count++;
                }
                    ?>

                    
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
                                <?php $bat = 1;
                                foreach ($rows as $row) {
                                    echo "<tr>
                                    <td><b>" . $bat . "</b></td>
                                    <td>" . $row['p_name'] . "</td>
                                    <td>" . $row['battery'] . " hours</td>
                                </tr>";
                                $bat++;
                                }?>
                                <!-- <tr>
                                    <td><b>2</b></td>
                                    <td>Lenovo</td>
                                    <td>7 hours</td>
                                </tr>
                                <tr>
                                    <td><b>3</b></td>
                                    <td>HP</td>
                                    <td>6 hours</td>
                                </tr> -->
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
                                <?php $scn = 1;
                                foreach ($rows as $row) {
                                    echo "<tr>
                                    <td><b>" . $scn . "</b></td>
                                    <td>" . $row['p_name'] . "</td>
                                    <td>" . $row['screen_size'] . "''</td>
                                    <td>" . $row['res_width'] . "x" . $row['res_height'] . "</td>
                                </tr>";
                                $scn++;
                                }?>
                                <!-- <tr>
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
                                </tr> -->
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
            <a href="index5.php">
                <button type="submit" class="btn-footer">
                    <</button>
            </a>
        </div>
    </div>
</footer>


</html>