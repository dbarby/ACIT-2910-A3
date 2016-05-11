
<?php include 'header.php';

$sql = 'SELECT question FROM question WHERE q_id = 3';
$q = $conn->query($sql);
$row = $q->fetchObject();

$ans = 'SELECT * FROM answer'; 
$statement = $conn->prepare($ans);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
?>
    <!-- Page Content -->
    <div class="container">

        <div class="survey-container">
            <form>
                <div class="label1">
                    <label><?php echo $row->question; ?></label>
                </div>
                <div class="row-container">
                    <?php 
                    foreach ($rows as $row1 => $row11) {
                        if ($row1 < 8) continue;
                    echo "<button class='btn-question3'>" . $row11['answer'] . "</button>
                    <button class='btn-description3' id='btn-A" . $count . "'>Desc</button>
                    <div class='answer-description' id='description-A" . $count . "'>
                        <p>" . $row11['description'] . "</p>
                    </div>";
                    $count++;
                    if ($count == 5) {
                        break;
                    }
                    } ?>

                    <!-- <button class="btn-question3">A3</button>
                    <button class="btn-description3" id="btn-A3">Desc</button>
                    <div class="answer-description" id="description-A3">
                        <p>Description 3</p>
                    </div>
                    <button class="btn-question3">A4</button>
                    <button class="btn-description3" id="btn-A4">Desc</button>
                    <div class="answer-description" id="description-A4">
                        <p>Description 4</p>
                    </div> -->
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
            <a href="index4.php">
                <button type="submit" class="btn-footer">
                    <</button>
            </a>
            <a href="results.php.">
                <button class="btn-footer">></button>
            </a>
        </div>
    </div>
</footer>


</html>