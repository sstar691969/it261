<html>
<head>
<title>Calculator form Assignment</title>
<style>

</style>
</head>
<body> 


<h1>Calculator.php</h1> <form action="" method="POST"> 
<label>Enter your distance:</label>
<input type="text" name="distance1"><br> 
<label>Enter your speed per hour:</label>
<input type="text" name="speed2"><br> 
<input type="submit" value="Add Em!!"> </form>


<?php     //adder-wrong.php */

if (isset($_POST['distance1'],$_POST['speed2'])){ 
    $distance1 = floatval($_POST['distance1']); 
    $speed2 = floatval($_POST['speed2']); 
    $myTime = $distance1/$speed2; 
    
    echo "<h2>You well drive this distance by this time: " . $distance1 . 'miles and' . $speed2 . 'hour(s)' . "</h2>";
    echo ' <p> and the time is: <br><style="color:red;" > ' . $myTime . '! </p>';
    echo'<p><a href="">Reset page</a></p>';
    
}
?> 

 

