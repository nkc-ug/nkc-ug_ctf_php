<?php

require './conf/db_connect.php';
session_start();

$id = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE id = id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id,PDO::PARAM_INT);
$stmt->execute();
$member = $stmt->fetch();

/*
print("
    <script>
    alert(\"${member['id']}\");
    alert(\"${member['password']}\");
    alert(\"${_POST['id']}\");
    alert(\"${_POST['password']}\");
    </script>");
*/

//if (password_verify($_POST['password'], $member['password'])) {
if (($_POST['password'] == $member['password'])) {    
    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    $msg = 'ログインしました。';
} else {
    $msg = 'idもしくはパスワードが間違っています。';
}

print("
<script>
alert(\"${"msg"}\");

window.location.href = \"index.php\";
</script>
");

?>
