<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include 'sentence.php';
	$s = $_SESSION['sentence'];
	include 'nouns.php';
	$n = $_SESSION['nouns'];
	include 'verbs.php';
	$v = $_SESSION['verbs'];
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'fyp';
	$link = mysqli_connect("$dbhost", "$username", "$password");
	//echo "CONNECTED";
	mysqli_select_db($link, $db);
	$sql = "INSERT INTO corpus_php(sentence, predicates, arguments) VALUES ('$s', '$n', '$v')";
	if ($link->query($sql) === TRUE) {
	echo '<h1>Please continue with other sentences!</h1>';
    echo '<form method="get" action = "first.php"> <div style="text-align:center"> <input type="submit" value="GO BACK"/></div></form>';

} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
?>