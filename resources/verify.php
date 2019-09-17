<html>
<body>

<?php
$str = $_POST["spell1"];

if ($str == "ALOHOMORA")
{
    header('Location:/public/levels/level1.html');
    exit;
}
else
{
	echo "<script type='text/javascript'>alert('Try Harder!')</script>";
    header('Location: /public/index.html');
    exit;
}
?>

</body>
</html>