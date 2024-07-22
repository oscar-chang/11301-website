<?php
include_once "base.php";

$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);


if ($chk) {
    $_SESSION['login'] = 1;
    alert("登入成功");
    to("../backend/admin.php");
    exit();
}
?>
<script>
    alert("帳號或密碼錯誤");
    location.href = "../admin.php?do=login";
</script>