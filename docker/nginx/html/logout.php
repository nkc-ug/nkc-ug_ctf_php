<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<script>
    alert("ログアウトしました。");
    window.location.href = "index.php";
</script>
