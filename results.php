<?php include 'header.php';

$res = 'SELECT * FROM product'; 
$statement = $conn->prepare($res);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="login.php">Admin</a>
                <a class="navbar-brand" href="index.php">LaptopFinder2016</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="results-container">
            <form>
                <div id="results-header">
                    <label>Your Results!
                    <?php if(!isset($_COOKIE["q1"])) {
    echo "Cookie is not set!";
} else {
    echo "Value for q1 is: " . $_COOKIE["q1"];
    echo "Value for q2 is: " . $_COOKIE["q2"];
    echo "Value for q3 is: " . $_COOKIE["q3"];
}
?>
</label>
                </div>
                <div class="row-container">
                    <!--Zoom-result just means that it is in focus. More applicable to the design where
                        there is one in focus and two below it.-->
                    <div class="zoom-result-container">
                        <?php
                    
                    foreach ($rows as $row) {
                        if($count == 1){
                            $item1Name = $row["p_name"];
                        }else if($count == 2){
                            $item2Name = $row["p_name"];
                        }else if($count ==3){
                            $item3Name = $row["p_name"];
                        }
                    echo '
                    
                    <div class="zoom-result">
                        <div class="zoom-rank" >
                            <p id="rank-' . $count . '">#' . $count . '</p>
                        </div>
                        <div class="zoom-image" id="zoom-image-'.$count.'">
                            <img id="rank-' . $count . '-img" alt="' . $count . 'st laptop img" src="' . $row["picurl"] . '" width="110px">
<<<<<<< HEAD
                            <a id="WTBbtn-'.$count.'" href=#>Where to buy</a>
=======
                        <a href="wheretobuy'.$count.'.php">Where to buy</a>
>>>>>>> refs/remotes/origin/master
                        </div>
                        <div class="zoom-description" id="zoom-description-'.$count.'">
                            <p id="brand">' . $row["p_name"] . '</p>
                            <ul class="item-'.$count.'">
                                <li>' . $row["cpu"] . '</li>
                                <li>' . $row["battery"] . ' Hours Battery</li>
                                <li>' . $row["graphics"] . '</li>
                            </ul>
                        </div>
                    </div>';
                    $count++;
                    if($count > 3){
                        break;
                    }
                }
                    ?>

                    </div>
                    <!--
                    <div id="compare-header">
                        <label>Comparisons</label>
                    </div>
-->
                    <label id="compare-header">Comparisons</label>
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
    <link rel="stylesheet" href="css/lobibox.min.css">

    <script src="js/lobibox.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/hideMaxListItem.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#batt-life-content, #screen-size-content,#more-content').hide();
            /*$('#btn-A1').click(function() {
                $('#description-A1').slideToggle("fast");
            });*/
            $("#batt-life-btn").click(function(e) {
                e.preventDefault();
                $("#batt-life-content").slideToggle({
                    duration: 400
                });
            });
            $("#screen-size-btn").click(function(e) {
                e.preventDefault();
                $("#screen-size-content").slideToggle({
                    duration: 400
                });
            });
            $("#more-btn").click(function(e) {
                e.preventDefault();
                $("#more-content").slideToggle({
                    duration: 400
                });
            });

            $('#zoom-description-1 ul.item-1').hideMaxListItems({
                'max': 2,
                'speed': 2000,
                'moreText': 'MORE SPECS',
                'lessText': 'LESS SPECS',
                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            });
            $('#zoom-description-2 ul.item-2').hideMaxListItems({
                'max': 2,
                'speed': 2000,
                'moreText': 'MORE SPECS',
                'lessText': 'LESS SPECS',
                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            });
            $('#zoom-description-3 ul.item-3').hideMaxListItems({
                'max': 2,
                'speed': 2000,
                'moreText': 'MORE SPECS',
                'lessText': 'LESS SPECS',
                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            });
<<<<<<< HEAD

           
            $('#WTBbtn-1').click(function() {
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {
                        msg: "<ul><li><a href=#>Best Buy</a></li><br><li><a href=#>NCIX</a></li></ul>",
                        width:350,
                        title: 'Where to buy the <?php echo $item1Name ?>'
                    });
            });
            $('#WTBbtn-2').click(function() {
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {
                        msg: "<ul><li><a href=#>Best Buy</a></li><br><li><a href=#>NCIX</a></li></ul>",
                        width:350,
                        title: 'Where to buy the <?php echo $item2Name ?>'
                    });
            });
            $('#WTBbtn-3').click(function() {
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {
                        msg: "<ul><li><a href=#>Best Buy</a></li><br><li><a href=#>NCIX</a></li></ul>",
                        width:350,
                        title: 'Where to buy the <?php echo $item3Name ?>'
                    });
            });

            //            $('#zoom-image-1 ul.item-1').hideMaxListItems({
            //                'max': 0,
            //                'speed': 2000,
            //                'moreText': 'Where to buy',
            //                'lessText': 'LESS SPECS',
            //                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            //            });
            //            $('#zoom-image-2 ul.item-2').hideMaxListItems({
            //                'max': 0,
            //                'speed': 2000,
            //                'moreText': 'Where to buy',
            //                'lessText': 'LESS SPECS',
            //                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            //            });
            //            $('#zoom-image-3 ul.item-3').hideMaxListItems({
            //                'max': 0,
            //                'speed': 2000,
            //                'moreText': 'Where to buy',
            //                'lessText': 'LESS SPECS',
            //                'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
            //            });

=======
            
         
>>>>>>> refs/remotes/origin/master

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
