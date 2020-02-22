<html>
	<body>
		<div style="background-color: 05B3FB; height: 70px">
			<marquee width="100%" direction="left" height="500px" scrollamount="15">
				<h1>TEXTUAL ENTAILMENT WEBAPP</h1>
		</marquee>
		</div>
		<div>
			<?php
				$count = 0;
				$file = "C:/Users/vikio/OneDrive/Desktop/Final Year Project/bestformat1.txt";
				$document = file_get_contents($file);
				$lines = explode("\n", $document);
				foreach ($lines as $newline) {
					if($count==100)
					{
						break;
					}
					else
					{
						$predicate = "";
						$arguments = "";
						$sentence = $newline;
						if (strcmp($newline, "entailment")==0 or strcmp($newline, "contradiction")==0 or strcmp($newline, "neutral")==0 or strcmp($newline, "-")==0 or strcmp($newline, "")==0)
						{
							continue;
						}
						echo '<br><br>';
						echo '<marquee behavior="slide" direction="right" loop="1" width = "85%" scrollamount="30"';
						echo '<p style="font-size:30px">';
						echo $newline;
						echo '</p>';
						echo '</marquee>';
						echo '<br>';
						echo '<p style="font-size: 30px; padding-left: 150px; color: purple">';
						echo "Choose the nouns : ";
						echo "<br>";
						$string = trim(preg_replace('!\s+!', ' ', $newline));
						$array_of_words = explode(" ", $string);
						$val = sizeof($array_of_words);
						echo "<br>";

						echo '<form method = "get" action = "nouns.php" style="font-size:30px; padding-left: 50px">';
						for($i=0; $i<$val; $i = $i+1){
							echo "<input type = \"checkbox\" name = 'nouns[]' id = \"nouns\" value=\"$array_of_words[$i]\"/>";
							echo " ";
							echo $array_of_words[$i];
							echo "<br>";
						}
						echo '<div style="text-align:center"> <input type="submit" value="SUBMIT NOUNS"/></div>';
						echo '</form>';
						echo '</p>';
						echo '<p style="font-size: 30px; padding-left: 150px; color: purple">';
						echo "Choose the verbs : ";
						echo '<br>';
						echo '<form method = "get" action = "verbs.php" style="font-size:30px; padding-left:50px">';
						for($i=0; $i<$val; $i = $i+1){
							echo "<input type = \"checkbox\" name = 'verbs[]' value = \"$array_of_words[$i]\"/>";
							echo " ";
							echo $array_of_words[$i];
							
							echo "<br>";
						}
						echo '<div style="text-align:center"> <input type="submit" value="SUBMIT VERBS"/></div>';
						echo '</form>';
						echo '<form method = "get" action = "sentence.php">';
						for($i=0; $i<$val; $i = $i+1){
							echo "<input type=\"checkbox\" name = 'sentence[]' checked=\"true\" style=\"display:none;\" value = \"$array_of_words[$i]\"/>";
						}
						echo '<div style="text-align:center"> <input type="submit" value="SUBMIT"/></div>';
						echo "</form>";
						echo '</p>';
						echo '<form method="get" action = "insert.php"> <div style="text-align:center"> <input type="submit" value="SUBMIT ALL"/></div></form>';
						echo "</form>";
						$count = $count+1;
						//break;
					}
				}
			?>
	</body>
</html>