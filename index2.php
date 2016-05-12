<?php include 'header.php';

$sql = 'SELECT question FROM question';
$q = $conn->query($sql);
$row = $q->fetchObject();

$ans = 'SELECT answer FROM answer'; 
$statement = $conn->prepare($ans);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <form>
            <div class="label1"><label><?php echo $row->question; ?></label></div>
            <?php foreach ($rows as $row1) {
                echo "<button class='btn-question1'>" . $row1['answer'] . "</button>";
            }
            ?>
            </form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
<footer>
    <div class="footerholder">
        <div class="footer">
            <a href="index.php"><button type="submit" class="btn-footer"><</button></a>
            <a href="index3.php"><button class="btn-footer">></button></a>
        </div>
    </div>
</footer>


</html>