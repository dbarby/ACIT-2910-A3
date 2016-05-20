<?php include 'header.php';
include 'resultCalculator.php';

$res = 'SELECT * FROM product'; 
$statement = $conn->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$count = 1;

 foreach ($rows as $row) {
                        if($count == 1){
                            $item1Name = $row["p_name"];
                            $item1Brand = $row["brand"];
                            $item1RAM = $row["ram"];
                            $item1StorageSize = $row["storage_size"];
                            $item1StorageType = $row["storage_type"];
                            $item1CPU = $row["cpu"];
                            $item1ProcSpeed = $row["proc_speed"];
                            $item1ProcCores = $row["proc_cores"];
                            $item1GraphicsCard = $row["graphics"];
                            $item1DisplaySize = $row["display"];
                            $item1ScreenSize = $row["screen_size"];
                            $item1ResHeight = $row["res_height"];
                            $item1ResWidth = $row["res_width"];
                            $item1Price = $row["price"];
                            $item1Weight = $row["weight"];
                            $item1OS = $row["os"];
                            $item1BatteryLife = $row["battery"];
                            $item1ReleaseYear = $row["release_year"];
                            if($row["touch"] == 1){
                                $item1TouchScreen = "YES";
                            }elseif ($row["touch"] == 0){
                                $item1TouchScreen = "NO";  
                                }
                            $item1Height = $row["height"];
                            $item1Width = $row["width"];
                            $item1Depth = $row["depth"];
                            $item1Pic = $row["pic"];
                            $item1PicURL = $row["picurl"];
                        }else if($count == 2){
                            $item2Name = $row["p_name"];
                            $item2Brand = $row["brand"];
                            $item2RAM = $row["ram"];
                            $item2StorageSize = $row["storage_size"];
                            $item2StorageType = $row["storage_type"];
                            $item2CPU = $row["cpu"];
                            $item2ProcSpeed = $row["proc_speed"];
                            $item2ProcCores = $row["proc_cores"];
                            $item2GraphicsCard = $row["graphics"];
                            $item2DisplaySize = $row["display"];
                            $item2ScreenSize = $row["screen_size"];
                            $item2ResHeight = $row["res_height"];
                            $item2ResWidth = $row["res_width"];
                            $item2Price = $row["price"];
                            $item2Weight = $row["weight"];
                            $item2OS = $row["os"];
                            $item2BatteryLife = $row["battery"];
                            $item2ReleaseYear = $row["release_year"];
                            if($row["touch"] == 1){
                                $item2TouchScreen = "YES";
                            }elseif ($row["touch"] == 0){
                                $item2TouchScreen = "NO";  
                                }
                            $item2Height = $row["height"];
                            $item2Width = $row["width"];
                            $item2Depth = $row["depth"];
                            $item2Pic = $row["pic"];
                            $item2PicURL = $row["picurl"];
                        }else if($count ==3){
                            $item3Name = $row["p_name"];
                            $item3Brand = $row["brand"];
                            $item3RAM = $row["ram"];
                            $item3StorageSize = $row["storage_size"];
                            $item3StorageType = $row["storage_type"];
                            $item3CPU = $row["cpu"];
                            $item3ProcSpeed = $row["proc_speed"];
                            $item3ProcCores = $row["proc_cores"];
                            $item3GraphicsCard = $row["graphics"];
                            $item3DisplaySize = $row["display"];
                            $item3ScreenSize = $row["screen_size"];
                            $item3ResHeight = $row["res_height"];
                            $item3ResWidth = $row["res_width"];
                            $item3Price = $row["price"];
                            $item3Weight = $row["weight"];
                            $item3OS = $row["os"];
                            $item3BatteryLife = $row["battery"];
                            $item3ReleaseYear = $row["release_year"];
                           if($row["touch"] == 1){
                                $item3TouchScreen = "YES";
                            }elseif ($row["touch"] == 0){
                                $item3TouchScreen = "NO";  
                                }
                            $item3Height = $row["height"];
                            $item3Width = $row["width"];
                            $item3Depth = $row["depth"];
                            $item3Pic = $row["pic"];
                            $item3PicURL = $row["picurl"];
                        }
     $count++;
     if($count > 3){
        break;
     }
 }
 
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">LaptopFinder2016</a>
            </div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="100"
  aria-valuemin="0" aria-valuemax="100" style="width:100%">
    <span class="sr-only">100% Complete</span>
  </div>
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
                    <label>Your Best Fit Laptops</label>
                </div>
                <div class="row-container">
                    <!--Zoom-result just means that it is in focus. More applicable to the design where
                        there is one in focus and two below it.-->
                    <div class="zoom-result-container">
                        <?php
                    $count = 1;
                   foreach ($rows as $row){
                    echo '
                    
                    <div class="zoom-result">
                        <div class="zoom-rank" >
                            <p id="rank-' . $count . '">' . $count . '</p>
                        </div>
                        <div class="zoom-image" id="zoom-image-'.$count.'">
                            <img id="rank-' . $count . '-img" alt="' . $count . 'st laptop img" src="' . $row["picurl"] . '" width="110px">
                            
                        </div>
                        <div class="whereToBuy">
                        <a class="WTBbtn" id="WTBbtn-'.$count.'" href=#>Where to buy</a>
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
                                if($bat>3){
                                    break;
                                }
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
                                if($scn>3){
                                    break;
                                }
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
                            <table>
                                <tr>
                                    <td><b></b></td>
                                    <td><b><?php echo $item1Name ?></b></td>
                                    <td><b><?php echo $item2Name ?></b></td>
                                    <td><b><?php echo $item3Name ?></b></td>
                                </tr>
                                <tr>
                                    <td><b>RAM</b></td>
                                    <td>
                                        <?php echo $item1RAM ?>GB
                                    </td>
                                    <td>
                                        <?php echo $item2RAM ?>GB
                                    </td>
                                    <td>
                                        <?php echo $item3RAM ?>GB
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Storage Size</b></td>
                                    <td>
                                        <?php echo $item1StorageSize."GB"  ?>
                                    </td>
                                    <td>
                                        <?php echo $item2StorageSize."GB" ?>
                                    </td>
                                    <td>
                                        <?php echo $item3StorageSize."GB" ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Storage Type</b></td>
                                    <td>
                                        <?php echo $item1StorageType  ?>
                                    </td>
                                    <td>
                                        <?php echo $item2StorageType ?>
                                    </td>
                                    <td>
                                        <?php echo $item3StorageType ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Touch Screen</b></td>
                                    <td>
                                        <?php echo $item1TouchScreen ?>
                                    </td>
                                    <td>
                                        <?php echo $item2TouchScreen ?>
                                    </td>
                                    <td>
                                        <?php echo $item3TouchScreen ?>
                                    </td>
                                </tr>
                            </table>
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


            $('#WTBbtn-1').click(function() {
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {
                        msg: "<ul><li><a href=#>Best Buy</a></li><br><li><a href=#>NCIX</a></li></ul>",
                        width: 350,
                        title: 'Where to buy the <?php echo $item1Name ?>'
                    });
            });
            $('#WTBbtn-2').click(function() {
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {
                        msg: "<ul><li><a href=#>Best Buy</a></li><br><li><a href=#>NCIX</a></li></ul>",
                        width: 350,
                        title: 'Where to buy the <?php echo $item2Name ?>'
                    });
            });
            $('#WTBbtn-3').click(function() {
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {
                        msg: "<ul><li><a href=#>Best Buy</a></li><br><li><a href=#>NCIX</a></li></ul>",
                        width: 350,
                        title: 'Where to buy the <?php echo $item3Name ?>'
                    });
            });


        });

    </script>

    </body>
    <footer>
        <div class="footerholder">
            <div class="footer">
                <a href="index14.php">
                    <button type="submit" class="btn-footer">
                        <img src="img/back.png" /></button>
                </a>
            </div>
        </div>
    </footer>


    </html>
