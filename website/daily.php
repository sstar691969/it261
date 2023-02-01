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
$coffee = '<h2>FRIDAY - FISH-FRY FRIDAY  $19</h2>';
$pic = 'fishplatter.jpeg';
$alt = 'Pumpking Latte';
$content = '<p>
 <b>Fisherman Platter: </b>
Battered cod, calamari rings, scallops and shrimp fried golden delicious served with garlic fries, cocktail and tartar sauces!</p>';


 
$today = 'friday';








break;


case 'Saturday' :
$coffee = '<h2>SATURDAY - STEAK &LOBSTER SATURDAY  $58 !</h2>';
$pic = 'steaklobster.jpeg';
$alt = 'Green Tea';

$content = '<p> <b>STEAK &LOBSTER: </b> Broiled cold-water lobster tail and petit filet served with butter, broccolini and baked potato with your choice of red or white house wine. </p>';

$today = 'saturday';

break;

case 'Sunday' :
$coffee = '<h2>SUNDAY - DOUBLE DOG SUNDAY  $11 !</h2>';
$pic = 'hotdog.jpeg';
$alt = 'Regular Coffee';

$content = '<p><b>Two hotdogs: </b> with choice of fries or chips! </p>';
$today = 'sunday';
break;
case 'Monday' :
$coffee = '<h2>MONDAY - NACHO MONDAY  $9!</h2>';
$pic = 'nachos.jpeg';
$alt = 'Latte';

$content = '<p><b>NACHOS: </b>Fried corn tortilla chips, refried beans, cheese sauce, cheddar and jack cheeses, pico de gallo, jalapeños, sour cream, guacamole. ADD CHICKEN OR SHREDDED BEEF $3
Or Chili Cheese Nachos $9!</p>';

$today = 'monday';
break;

case 'Tuesday' :
$coffee = '<h2>TUESDAY - TACO TUESDAY  $15!</h2>';
$pic = 'tacos.jpeg';
$alt = 'Americano';
    
$content = '<p><b>Taco Platter: </b>
Three tacos (choice of shredded chicken or beef), rice, beans, and a 16oz. Modelo!</p>';

$today = 'tuesday';
break;
   

case 'Wednesday' :
$coffee = '<h2>WEDNESDAY - DIP IT WEDNESDAY $13!</h2>';
$pic = 'frenchdip.jpeg';
$alt = 'Latte';
        
$content = '<p><b>French dip sandwich: </b> with choice of fries, chips or slaw!</p>';
$today = 'wednesday';
break;

case 'Thursday' :
    $coffee = '<h2>THURSDAY - BONELESS THURSDAY $18!</h2>';
    $pic = 'bonelesswings.jpeg';
    $alt = 'Latte';
            
    $content = '<p><b>Boneless chicken wings: </b>, assorted dipping sauces, seasoned waffle fries & 16oz Select IPA!</p>';
    
    
$today = 'thursday';
    break;

}
include  'includes/header.php';
?>

<h1>My Daily page: DELICIOUS DEAL EVERY DAY OF THE WEEK AT BAILWICK!</h1>

<!--- change php echo to a casino Bailiwick image-->

<?php echo $coffee; 

?>

<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">

<?php echo $content; 

?>

<h2>Check out our Daily Specials</h2>
<p><i>Please select each daily option below!!!!</i></p>
<ul>

<li><a style="color:<?php
    if($today =='Sunday') {
        echo 'orange';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Sunday">Sunday</a></li>

<li><a style="color:<?php
    if($today =='Monday') {
        echo 'green';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Monday">Monday</a></li>

<li><a style="color:<?php
    if($today =='Tuesday') {
        echo 'green';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a style="color:<?php
    if($today =='Wednesday') {
        echo 'green';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>

<li><a style="color:<?php
    if($today =='Thursday') {
        echo 'green';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Thursday">Thursday</a></li>

<li><a style="color:<?php
    if($today =='Friday') {
        echo 'green';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Friday">Friday</a></li>




<li><a style="color:<?php
    if($today =='Saturday') {
        echo 'green';

    } else {
        echo 'blue';
    } ; ?>" href="daily.php?today=Saturday">Saturday</a></li>

<!-- <li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li> -->



</ul>

<?php
include  'includes/footer.php';

?>