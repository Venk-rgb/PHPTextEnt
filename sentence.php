<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(isset($_GET['sentence']))
    {
		$sentence = $_GET['sentence'];
	}
	$sente = "";
	if (isset($_GET['sentence'])) {
    foreach ($sentence as $n){
        $sente .= $n." ";
    }

    echo '<h1>You have chosen the following sentence : </h1>';
    echo '<h1>';
    echo $sente;
    echo '</h1>';
    echo '<h1>Press "Go Back" and press "Submit All"</h1>';
    echo '<form method="get" action = "first.php"> <div style="text-align:center"> <input type="submit" value="GO BACK"/></div></form>';

    $_SESSION['sentence'] = $sente;
}
?>