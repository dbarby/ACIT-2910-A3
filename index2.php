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
<?php include 'footer.php';?>