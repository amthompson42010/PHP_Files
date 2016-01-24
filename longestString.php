<html>
<head>
<title>Longest String</title>

</head>
<body>
<form method="GET" action="strignLength.php">
	<input type="text" value="Enter a String: " name="testname" />
	<input type="submit" value="submit" />
</form>
<?php
    $string1 = $_GET['testname'];
    $words = explode(" ", $string1);
    $lengths = array_map('strlen', $words);
    echo "The longest string is " . max($lengths);
?>
</body>
</html>
