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


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable Form week 6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" >
</head>
<body>

    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    
<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>

<legend>Contact William</legend>

<label>First Name</label>
<input class="bigger" type="text" name="first_name" value=" <?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">

<span class="error"> <?php echo $first_name_err   ;?></span>


<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">

<span class="error"> <?php echo $last_name_err   ;?></span>


<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">

<span class="error"> <?php echo $email_err   ;?></span>


<!-- time for our ratio button that has an additional attribute of value-->

<label>Gender</label>
<ul>
 <!-- will come back to gender once we will be adding the sticky part of the form --> 

<li>
<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST ['gender'] == 'female') echo 'checked = "checked" ' ;?>>Female
</li>
<li>
<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST ['gender'] == 'male') echo 'checked = "checked" ' ;?>>Male
</li> 
<li>
<input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST ['gender'] == 'neither') echo 'checked = "checked" ' ;?>>Neither


</li>

</ul>

<span class="error"> <?php echo $gender_err   ;?></span>




<label>Phone</label>
<input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])  ;?>">

<span class="error"> <?php echo $phone_err   ;?></span>

<label>Airport Shuttles</label>

<ul>
    <!--- we will return to the wine portion to add additional wines when we are adding the sticky part of our form -->
   
<li>
<input type="checkbox" name="shuttles[]" value="Bus"><?php if(isset($_POST['shuttles']) && in_array('bus', $shuttles))  ;?>Bus 
</li>

<li>
<input type="checkbox" name="shuttles[]" value="Shuttle" ><?php if(isset($_POST['shuttles']) && in_array('shuttle', $shuttles))  ;?> Shuttle </li>


<li>
<input type="checkbox" name="shuttles[]" value="Van" ><?php if(isset($_POST['shuttles']) && in_array('van', $shuttles))  ;?>Van </li>

<li>
<input type="checkbox" name="shuttles[]" value="Limo" ><?php if(isset($_POST['shuttles']) && in_array('limo', $shuttles))  ;?>Limo </li>


<li>
<input type="checkbox" name="shuttles[]" value="Suv" ><?php if(isset($_POST['shuttles']) && in_array('suv', $shuttles))  ;?>Suv </li>



</ul>
<span class="error"> <?php echo $shuttles_err   ;?></span>


<label>Regions</label>


<select name="departure">
    <!--we will return to options to add additional option when we make our form sticky! -->


<option value="NULL"<?php if(isset($_POST['departure']) && $_POST['departure'] == 'NULL') echo 'selected = "selected"' ;?>> Select One!</option>

<option value="nw"<?php if(isset($_POST['departure']) && $_POST['departure'] == 'nw') echo 'selected = "selected"' ;?> >Airport!</option>

<option value="sw" <?php if(isset($_POST['departure']) && $_POST['departure'] == 'sw') echo 'selected = "selected"' ;?> >Pier 96!</option>

<option value="mw" <?php if(isset($_POST['departure']) && $_POST['departure'] == 'mw') echo 'selected = "selected"' ;?>> Pier 66!</option>

<option value="ec"<?php if(isset($_POST['departure']) && $_POST['departure'] == 'ec') echo 'selected = "selected"' ;?>> Amtrak!</option>

<option value="ne"<?php if(isset($_POST['departure']) && $_POST['departure'] == 'ne') echo 'selected = "selected"' ;?>> Boeing-Sea!</option>




</select>

<span class="error"> <?php echo $departure_err   ;?></span>



<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars ($_POST['comments'])    ;?></textarea>

<span class="error"> <?php echo $comments_err   ;?></span>

<label>Privacy</label>
<ul>
    <!--we will return to gender once we will be adding the sticky part of the form-->

<li>

<input type="radio" name="privacy" value="yes"  <?php if(isset($_POST['privacy']) && $_POST ['privacy'] == 'yes') echo 'checked = "checked" ' ;?>> Privacy
</li>
</ul>

<span class="error"> <?php echo $privacy_err   ;?></span>


<input type="submit" value="Send it!">
<input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];   ?>'" value="Reset">




</fieldset>

</form>



    
</body>
</html>