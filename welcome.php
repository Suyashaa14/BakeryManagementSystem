<?php
session_start();
if (isset($_SESSION["user"]))
{
?>

<h1>
$_SESSION["user"];
<script>
window.location="index.php";
</script>
</h1>
<?php
}
else
{
	?>
	<script>
	alert("You must login to access this page");
	window.location="login.php";
	</script>
	<?php
	
}
?>