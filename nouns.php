<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if(isset($_GET['nouns']))
    {
		$pred = $_GET['nouns'];
	}
	$predicates = "";
    if (isset($_GET['nouns'])) {
	echo "<h1>You have chosen the following nouns : ";
	foreach ($pred as $n){
		echo '<marquee style:"font-size: 30px;font-weight: 800;color: #8ebf42;font-family: sans-serif;">';
        echo $n;
        echo "<br>";
        echo "</marquee>";
    }
    foreach ($pred as $n){
        $predicates .= $n.",";
    }
    echo '<form method="get" action = "first.php"> <div style="text-align:center"> <input type="submit" value="GO BACK"/></div></form>';

    $_SESSION['nouns'] = $predicates;
} 
?>