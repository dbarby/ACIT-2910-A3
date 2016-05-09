<?php include 'header.php';?>

    <!-- Page Content -->
    <div class="container">

        <div class="survey-container">
            <form>
                <div class="label1">
                    <label>Question 3</label>
                </div>
                <div class="row-container">
                    <button class="btn-question3">A1</button>
                    <button class="btn-description3" id="btn-A1">Desc</button>
                    <div class="answer-description" id="description-A1">
                        <p>Description 1</p>
                    </div>
                    <button class="btn-question3">A2</button>
                    <button class="btn-description3" id="btn-A2">Desc</button>
                    <div class="answer-description" id="description-A2">
                        <p>Description 2</p>
                    </div>
                    <button class="btn-question3">A3</button>
                    <button class="btn-description3" id="btn-A3">Desc</button>
                    <div class="answer-description" id="description-A3">
                        <p>Description 3</p>
                    </div>
                    <button class="btn-question3">A4</button>
                    <button class="btn-description3" id="btn-A4">Desc</button>
                    <div class="answer-description" id="description-A4">
                        <p>Description 4</p>
                    </div>
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
            <a href="index2.php">
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