<?php
if (!empty($_POST))
{
setcookie("q12", $_POST["mcq"], time() + (86400 * 30), "/");
}
?>
<script>setTimeout(function(){window.location.href='results.php'},500);</script>