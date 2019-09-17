<html>
<body>

<?php
$str = $_POST["spell2"];

if ($str == "LUMOS")
{
    header('Location:/levels/level2.html');
    exit;
}
else
{
	echo "<script type='text/javascript'>alert('Try Harder!')</script>";
    header('Location: /levels/level1.html');
    exit;
}
?>

</body>
</html>