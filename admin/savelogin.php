<?php
session_start();
$_SESSION['loginuser']=$_POST['loginuser'];
$_SESSION['loginpass']=$_POST['loginpass'];
?>
<script langquage='javascript'>
window.location.href = 'checkuser.php';
</script>