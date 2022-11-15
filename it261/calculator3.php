<html>
<head>
<title>Calculator3 form Assignment</title>
<style>

</style>
</head>
<body> 


<h1>Calculator3.php</h1> <form action="" method="POST"> 
<label>Enter your distance:</label>
<input type="text" name="distance1"value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">
<label>Enter your speed per hour:</label>
<input type="text" name="speed2" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>"> 
<input type="submit" value="Add Em!!"> </form>


<?php     //adder-wrong.php */

if (isset($_POST['distance1'],$_POST['speed2'])){ 
    $distance1 = floatval($_POST['distance1']); 
    $speed2 = floatval($_POST['speed2']); 
    $myTime = $distance1/$speed2; 
    
    echo "<h2>You well drive this distance by this time: " . $distance1 . 'miles and' . $speed2 . 'hour(s)' . "</h2>";
    echo ' <p> and the time is: <br><style="color:red;" > ' . $myTime . 'hour(s)! </p>';
    echo'<p><a href="">Reset page</a></p>';
    
}
?> 