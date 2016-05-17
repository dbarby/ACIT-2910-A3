<?php
setcookie("q3", $_POST["mcq"], time() + (86400 * 30), "/");
?>
<script>setTimeout(function(){window.location.href='results.php'},500);</script>