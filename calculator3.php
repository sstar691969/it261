<html>
<head>
<title>Calculator3 form Assignment</title>
<style>

</style>
</head>
<body> 
<form>



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




</fieldset>

</form>


<?php
//we will start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we will elseif they are set

//-- start here to correct -->

if($_SERVER['REQUEST_METHOD'] == 'POST') {

 if(empty($_POST['distance1'])) {
    echo '<p class="error">Please enter your distance!</p>';
 }

 if(empty($_POST['speed2'])) {
    echo '<p class="error">Please enter your speed per hour!</p>';
 }

 
// if post distance and speed is NULL, please select your distance!

 if ($_POST['distance1'] == NULL) {echo '<p class="error">Please enter distance!</p>';

 }

 // if post speed is NULL, please select your speed!

 if ($_POST['speed2'] == NULL) {echo '<p class="error">Please enter speed!</p>';

 }

}

if(isset($_POST['distance1'],
$_POST['speed2'])) {
$distance1 = $_POST['distance1'];
$speed2 = $_POST['speed2'];
$distance1 = $_POST['distance1'];
$speed2= $_POST['speed2'];
$myTime = $distance1/$speed2; 

if(!empty($distance1 && $speed2)) {


    
    echo '
    <div class="box">
    <h2>Please enter distance! '. $distance1 .' '. $speed2 .' ,</h2>
    <p>Your traveling time is: <b> $'. $mytime .' </b></p>
    
    </div>
    ';

}
}






    

    
    
    
    
    
    
    

 // end server request  









?>




    
</body>
</html>