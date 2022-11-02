<?php
// class coffee exercise
// if today is friday, it will be pumpkin latte day
// INTRODUCING the isset{} function
// then we will introduce our first GLOBAL variable
// our switch




// starting the switch
// if $GET['today'] is set, $today , then all is well, but it is not set therefore the else is  the day!
//  else, today is TODAY

// GOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set?

// $variable = 'This is our variable';
// if(isset($variable)) {
//    echo 'Variable has been set';
// } else
//echo 'Variable has not been set';

//echo '<br>';

//if(isset($_GET['today'])) {
 //   echo 'Today has been set';
//}else { 
//    echo 'NOT!!!!!';

//}

if(isset($_GET['today'])) {
 $today = $_GET['today'];
} else { 
    $today = date('l');

}

switch($today) {
case 'Friday' :
$coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
$pic = 'pumpkin-olga.jpeg';
$alt = 'Pumpking Latte';
$content = '<p>
The best homemade <b>pumpkin spice latte</b> made with real pumpkin puree and cozy pumpkin pie spice. You will love this naturally sweetened, dairy free pumpkin spice latte recipe for your morning coffee or a delicious afternoon pick-me-up!</p>';

break;
case 'Saturday' :
$coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
$pic = 'green-tea-olga.jpeg';
$alt = 'Green Tea';

$content = '<p> <b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place. </p>';
break;

case 'Sunday' :
$coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
$pic = 'coffee-olga.png';
$alt = 'Regular Coffee';

$content = '<p><b>A regular coffee</b> is a coffee with cream (or milk) and two sugars. It just is, okay? The Post asked, "Why has a regular coffee come to mean with milk and sugar? and got this answer:
“I think it\'s a part of New York jargon,” said Joseph DeRupo, a spokesman for the National Coffee Association. </p>';
break;
case 'Monday' :
$coffee = '<h2>Monday is our Latte Day!</h2>';
$pic = 'latte-olga.jpeg';
$alt = 'Latte';

$content = '<p><b></b>Coffee latte is a coffee drink with espresso, steamed milk and a layer of foam on top. What\'s the difference between a latte vs a cappuccino?</p>';
break;

case 'Tuesday' :
$coffee = '<h2>Tuesday is our Americano Day!</h2>';
$pic = 'americano-olga.jpeg';
$alt = 'Americano';
    
$content = '<p><b>Coffee latte</b> is a coffee drink with espresso, steamed milk and a layer of foam on top. What\'s the difference between a latte vs a cappuccino?</p>';
break;
   

case 'Wednesday' :
$coffee = '<h2>Wednesday is our Latte Day!</h2>';
$pic = 'latte-olga.jpeg';
$alt = 'Latte';
        
$content = '<p><b>Coffee latte</b> is a coffee drink with espresso, steamed milk and a layer of foam on top. What\'s the difference between a latte vs a cappuccino?</p>';
break;

case 'Thursday' :
    $coffee = '<h2>Thursday is our Latte Day!</h2>';
    $pic = 'latte-olga.jpeg';
    $alt = 'Latte';
            
    $content = '<p><b>Coffee latte</b> is a coffee drink with espresso, steamed milk and a layer of foam on top. What\'s the difference between a latte vs a cappuccino?</p>';
    break;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
    * {
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

#wrapper {
    width:940px;
    margin:20px auto;
}

h1, h2, img {
    margin-bottom:10px;
}
p {
    margin-bottom:20px;

}

    </style>
</head>
<body>

<div id="wrapper">
<h1>My Wonderful Switch Class work (Not the daily Homework)</h1>

<?php echo $coffee; 

?>

<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">

<?php echo $content; 

?>

<h2>Check out our Daily Specials</h2>
<p><i>Please complete All of the days of the week!!!!</i></p>
<ul>

<li><a href="switch.php?today=Sunday">Sunday</a><li>
<li><a href="switch.php?today=Monday">Monday</a><li>
<li><a href="switch.php?today=Tuesday">Tuesday</a><li>
<li><a href="switch.php?today=Wednesday">Wednesday</a><li>
<li><a href="switch.php?today=Thursday">Thursday</a><li>
<li><a href="switch.php?today=Friday">Friday</a><li>
<li><a href="switch.php?today=Saturday">Saturday</a><li>



</ul>

</div>

    <!-- end wrapper-->
    
</body>
</html>


