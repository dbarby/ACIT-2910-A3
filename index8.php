<?php 

if (!empty($_POST))
{
    setcookie("q5", $_POST["mcq"], time() + (86400 * 30), "/");
}
include 'header.php';

$sql = 'SELECT question FROM question WHERE q_id = 6';
$q = $conn->query($sql);
$row = $q->fetchObject();

$ans = 'SELECT * FROM answer'; 
$statement = $conn->prepare($ans);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">LaptopFinder2016</a>
            </div>
             <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="48"
  aria-valuemin="0" aria-valuemax="100" style="width:48%">
    <span class="sr-only">48% Complete</span>
  </div>
</div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">

        <div class="survey-container">
                <div class="label1">
                    <label><?php echo $row->question;?>&nbsp; &nbsp; &nbsp;<img src='img/mac-window-with-arrows.png'/></label>
                </div>
                <div class="row-container">
                    <?php 
                    
                    echo "<form id='mcForm' name='mcForm' method='POST' action='index9.php'>";

                    foreach ($rows as $row1 => $row11) {
                        if ($row1 < 19) continue;
                        echo 
                        "<div id='question'>
                            <button class='btn-description3' id='btn-A" . $count . "'>
                                <img src='img/info.png' />
                            </button>
                            <input type='radio' onclick='javascript: submit()' name='mcq' id='radio-choice-" . $count . "' value='".$count."' />
                            <label for='radio-choice-" . $count . "'>
                                " . $row11['answer'] . "
                            </label>
                        </div>
                        <div class='answer-description' id='description-A" . $count . "'>
                            <p>" . $row11['description'] . "</p>
                        </div>";
                        $count++;
                    
                        if ($count == 4) {
                            break;
                        }
                     }
                    echo "</form>";
                    ?>
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
            $('#description-A1,#description-A2,#description-A3,#description-A4 ').hide();
            
            /*$('#btn-A1').click(function() {
                $('#description-A1').slideToggle("fast");
            });*/
            $("#btn-A1").click(function(e) {
                e.preventDefault();
                $("#description-A1").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#btn-A2").click(function(e) {
                e.preventDefault();
                $("#description-A2").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#btn-A3").click(function(e) {
                e.preventDefault();
                $("#description-A3").toggle({
                    duration: 400,
                    easing: "linear"
                });
            });
            $("#btn-A4").click(function(e) {
                e.preventDefault();
                $("#description-A4").toggle({
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
            <a href="index7.php">
                <button type="submit" class="btn-footer">
                    <img src="img/back.png" /></button>
            </a>
        </div>
    </div>
</footer>


</html>