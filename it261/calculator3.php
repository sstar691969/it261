<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $distance1 = $speed2 = '';

if (empty($_POST['distance1'])) {
    $distance1Error = 'Distance should be filled';
} else {
    $distance1 = trim(htmlspecialchars($_POST['distance1']));
}

if (empty($_POST['speed2'])) {
    $speed2Error = 'Please add your speed';
} else {
    $speed2 = trim(htmlspecialchars($_POST['speed2']));
}

}
?>
<html>
<head>
<title>Calculator3.php form Assignment</title>

    <style type="text/css">
		.error {
			color:red;
		}
	</style>

</head>
<body> 


<h1>Calculator3.php</h1>

<form action="" method="POST"> 
<label>Enter your distance:</label>
 DISTANCE:<input type="text" name="distance1" value="<?php if (isset($distance1)) echo $distance1; ?>">
	<span class="error"><?php if (isset($distance1Error)) echo $distance1Error ?></span>
 
<label>Enter your speed per hour:</label>
SPEED:<input type="text" name="speed2" value="<?php if (isset($speed)) echo $speed; ?>">
	<span class="error"><?php if (isset($speed2Error)) echo $speed2Error ?></span>

<input type="submit" value="Add Em!!"> </form>


<!-- SAMPLE!!!  STARTS HERE--->



<!-- SAMPLE!!!  ENDS HERE--->

<?php     //adder-wrong.php */

if (isset($_POST['distance1'],$_POST['speed2'])){ 
    $distance1 = floatval($_POST['distance1']); 
    $speed2 = floatval($_POST['speed2']); 


    // NOTE: ADDED IF STATEMENT AND ELSE STATEMENT ( ELSE STATEMENT IS NOT COMPLETE BELOW THIS LINE)

  if ($speed2 > 0){  
    
    $myTime = $distance1/$speed2; 


  }

else {
    $myTime = $speed2Error;

}


    //$myTime = round($distance1/$speed2, 2); //


    echo "<h2>You well drive this distance at this speed: " . $distance1 . ' miles and ' . $speed2 . ' per hour ' . "</h2>";
    echo ' <p> and the traveling time is: <br><style="color:red;" > ' . $myTime . ' hours </p>';
    echo'<p><a href="">Reset page</a></p>';
     
}
?> 



    
</body>
</html>