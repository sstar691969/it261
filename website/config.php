<?php


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php' :
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php' :
    $title = 'Gallery page of our Website Project';
    $body = 'gallery inner';
    break;
    }
    // our navigational array!

    $nav = array(
        'index.php' => 'Home',
         'about.php' => 'About',
          'daily.php' => 'Daily',
           'project.php' => 'Project',
             'contact.php' => 'Contact',
               'gallery.php' => 'Gallery',
        
        
        );
        

// remove this once done below: is the beginning of the $witch for homework 3!!!!
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

break;
case 'Saturday' :
$coffee = '<h2>SATURDAY - STEAK &LOBSTER SATURDAY  $58 !</h2>';
$pic = 'steaklobster.jpeg';
$alt = 'Green Tea';

$content = '<p> <b>STEAK &LOBSTER: </b> Broiled cold-water lobster tail and petit filet served with butter, broccolini and baked potato with your choice of red or white house wine. </p>';
break;

case 'Sunday' :
$coffee = '<h2>SUNDAY - DOUBLE DOG SUNDAY  $11 !</h2>';
$pic = 'hotdog.jpeg';
$alt = 'Regular Coffee';

$content = '<p><b>Two hotdogs: </b> with choice of fries or chips! </p>';
break;
case 'Monday' :
$coffee = '<h2>MONDAY - NACHO MONDAY  $9!</h2>';
$pic = 'nachos.jpeg';
$alt = 'Latte';

$content = '<p><b>NACHOS: </b>Fried corn tortilla chips, refried beans, cheese sauce, cheddar and jack cheeses, pico de gallo, jalapeños, sour cream, guacamole. ADD CHICKEN OR SHREDDED BEEF $3
Or Chili Cheese Nachos $9!</p>';
break;

case 'Tuesday' :
$coffee = '<h2>TUESDAY - TACO TUESDAY  $15!</h2>';
$pic = 'tacos.jpeg';
$alt = 'Americano';
    
$content = '<p><b>Taco Platter: </b>
Three tacos (choice of shredded chicken or beef), rice, beans, and a 16oz. Modelo!</p>';
break;
   

case 'Wednesday' :
$coffee = '<h2>WEDNESDAY - DIP IT WEDNESDAY $13!</h2>';
$pic = 'frenchdip.jpeg';
$alt = 'Latte';
        
$content = '<p><b>French dip sandwich: </b> with choice of fries, chips or slaw!</p>';
break;

case 'Thursday' :
    $coffee = '<h2>THURSDAY - BONELESS THURSDAY $18!</h2>';
    $pic = 'bonelesswings.jpeg';
    $alt = 'Latte';
            
    $content = '<p><b>Boneless chicken wings: </b>, assorted dipping sauces, seasoned waffle fries & 16oz Select IPA!</p>';
    break;

}