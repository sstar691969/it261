<?php
$first_name = "";
$last_name = "";
$email = "";
$gender = "";
$phone = "";
$shuttles = "";
$departure = "";
$comments = "";
$privacy = "";


$first_name_err = "";
$last_name_err = "";
$email_err = "";
$gender_err = "";
$phone_err = "";
$shuttles_err = "";
$departure_err = "";
$comments_err = "";
$privacy_err = "";


ob_start();











if($_SERVER ['REQUEST_METHOD'] == 'POST') {


if(empty($_POST['first_name'])) {
$first_name_err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
$last_name_err = 'Please fill out your last name';
    
} else {
$last_name = $_POST ['last_name'];
}

if(empty($_POST['email'])) {
$email_err = 'Please fill out your email';
} else {
    $email = $_POST ['email'];
}
  
if(empty($_POST['gender'])) {
$gender_err = 'Please choose your gender';
    } else {
    $gender = $_POST ['gender'];
}
if(empty($_POST['phone'])) {
$phone_err = 'Please fill out your number';
} else {
    $phone = $_POST ['phone'];
}  

if(empty($_POST['shuttles'])) {$shuttles_err = "Please select your option!";
} else {
    $shuttles = $_POST ['shuttles'];
} 

if($_POST['departure'] == NULL) {
$departure_err = 'Please select your departure location';
} else {
    $departure = $_POST ['departure'];
}
    
if(empty($_POST['comments'])) {
$comments_err = 'Please share your thoughts with us';
} else {
    $comments = $_POST ['comments'];
    }  

if(empty($_POST['privacy'])) {
$privacy_err = 'Please agree to privacy policy';
} else {
    $privacy = $_POST ['privacy'];
    } 



    // wines function
    
function my_wines($shuttles)   {
$my_return = '';


if(!empty($_POST['shuttles'])) {
$my_return = implode(',', $_POST['shuttles']);



}else {

    $shuttles_err = 'Please fill out for shuttle service!';
}
return $my_return;



} // end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['shuttles'],
$_POST['departure'],
$_POST['comments'],
$_POST['privacy'])) {
    
$to = 'sstar691969@yahoo.com ';
$subject = 'Test Email on' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'
Phone : '.$phone.' '.PHP_EOL.'
Departure : '.$departure.' '.PHP_EOL.'
Shuttles : '.my_wines($shuttles).' '.PHP_EOL.'
Comments : '.$comments.' '.PHP_EOL.'
';

$headers = array(
'From' => 'sstar691969@yahoo.com '

);

if(!empty($first_name &&
 $last_name &&
  $email && 
  $gender && 
  $phone &&  
  $departure &&
  $shuttles &&  
  $comments)) {
 
 mail($to, $subject, $body, $headers);
header('Location:thx.php');

}
    
            
}   // end sever request method

}

include('./includes/header.php');
?>
<main>

<h1>Welcome to our gallery of images!!</h1>
















</main>






    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    


<?php
include('./includes/footer.php');
?>
