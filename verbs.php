<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_GET['verbs']))
    {
		$arg = $_GET['verbs'];
	}
	$arguments = "";
	if (isset($_GET['verbs'])) {
	echo "<h1>You have chosen the following verbs : ";
	
	foreach ($arg as $v){
		echo '<marquee style:"font-size: 30px;font-weight: 800;color: #8ebf42;font-family: sans-serif;">';
        echo $v;
        echo "<br>";
        echo "</marquee>";
    }
    
    foreach ($arg as $v){
        $arguments .= $v.",";
    }

    echo '<form method="get" action = "first.php"> <div style="text-align:center"> <input type="submit" value="GO BACK"/></div></form>';
    $_SESSION['verbs'] = $arguments;
} 
?>