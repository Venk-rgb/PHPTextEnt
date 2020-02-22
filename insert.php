<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 //    if(isset($_SESSION['views'])) 
 //    $_SESSION['views'] = $_SESSION['views']+1; 
	// else
 //    $_SESSION['views']=1; 
      
	// $view = $_SESSION['views'];
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
	// $i = -1;
	// do
	// {
	// 	$i = $i+$view+1;
	// }while(strcmp($lines[$i], "entailment")==0 or 
	// 	   strcmp($lines[$i], "contradiction")==0 or 
	// 	   strcmp($lines[$i], "neutral")==0 or 
	// 	   strcmp($lines[$i], "-")==0 or 
	// 	   strcmp($lines[$i], "")==0);
	// // $j = $i+$view+($view*2)-1;
	// // $i = $i+$view+($view*2);
	// $s = $lines[$i];
	// //$s2 = $lines[$i];
	// $i = $i+1;
	$sql = "INSERT INTO corpus_php(sentence, predicates, arguments) VALUES ('$s', '$n', '$v')";
	if ($link->query($sql) === TRUE) {
	echo '<h1>Please continue with other sentences!</h1>';
    echo '<form method="get" action = "first.php"> <div style="text-align:center"> <input type="submit" value="GO BACK"/></div></form>';

} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
// $views = $_SESSION['views'];  
   
// unset($_SESSION['views']);  
// session_destroy(); 
?>