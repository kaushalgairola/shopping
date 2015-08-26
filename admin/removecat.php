<?php		
$idd = $_GET['id'];
?>
<script>
var flag=confirm("Are you sure to remove this category from your table");
//document.write(flag);
if(flag)
{
//document.write(flag);
	location.href="process.php?page=removecat&id=<?php echo $idd; ?>";

//Redirect("process.php?page=removecat&id=".$idd."");
 }
 else
 {
 	location.href="home.php?page=listcat";
 }
</script>

