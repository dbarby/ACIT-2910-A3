<?php include 'header.php';

$sql = 'SELECT question FROM question';
$q = $conn->query($sql);
$row = $q->fetchObject();

$ans = 'SELECT answer FROM answer'; 
$a = $conn->query($ans);
$b = $conn->fetchAll(PDO::FETCH_ASSOC);
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <form>
            <div class="label1"><label><?php echo $row->question; ?></label></div>
            <p><?php echo $b[1] ?></p>
            <button class="btn-question1">A1</button>
            <button class="btn-question1">A2</button>
            <button class="btn-question1">A3</button>
            <button class="btn-question1">A4</button>
            <button class="btn-question1">A5</button>
            <button class="btn-question1">A6</button>
            </form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include 'footer.php';?>