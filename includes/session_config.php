<?php session_start();
if($_SESSION["log"]!="true")
{
echo "<script>location.href='index.php?lf=yes'</script>";
}
?>