<?php


if($_SERVER ['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['wines'])) {
$wines_err = 'what, no wines?';


} else {
    $wines = $_POST ['wines'];
}




} // end sever request method


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 in Week</title>
    <link href="css/styles.css"type="text/css" rel="stylesheet" >
</head>
<body>

    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    
<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>

<legend>Contact William</legend>

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ;?>">

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ;?>">



<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">



<!-- time for our ratio button that has an additional attribute of value-->

<label>Gender</label>
<ul>
 <!-- will come back to gender once we will be adding the sticky part of the form --> 

<li>
<input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST ['gender'] == 'female') echo 'checked = "checked" ' ;?>>female
</li>
<li>
<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST ['gender'] == 'male') echo 'checked = "checked" ' ;?>>male
</li> 
<li>
<input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST ['gender'] == 'neither') echo 'checked = "checked" ' ;?>>neither
</li>

</ul>




<label>Phone</label>
<input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])  ;?>">

<label>Favorite Wines</label>

<ul>
    <!--- we will return to the wine portion to add additional wines when we are adding the sticky part of our form -->
   
<li>
<input type="checkbox" name="wines[]" value="cab"><?php if(isset($_POST['wines']) && in_array('cab', $wines))  ;?>>Cabernet 
</li>

<li>
<input type="checkbox" name="wines[]" value="merlot" ><?php if(isset($_POST['wines']) && in_array('merlot', $wines))  ;?> >Merlot </li>


<li>
<input type="checkbox" name="wines[]" value="syrah" ><?php if(isset($_POST['wines']) && in_array('syrah', $wines))  ;?>>Syrah </li>

<li>
<input type="checkbox" name="wines[]" value="red" ><?php if(isset($_POST['wines']) && in_array('red', $wines))  ;?>>Red Blend </li>


<li>
<input type="checkbox" name="wines[]" value="malbec" ><?php if(isset($_POST['wines']) && in_array('malbec', $wines))  ;?>>Malbec </li>



</ul>

<label>Regions</label>


<select name="regions">
    <!--we will return to options to add additional option when we make our form sticky! -->


<option value="" NULL><?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected" ' ;?> Select One!</option>
<option value="nw"<?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected" ' ;?> Northwest!</option>
<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "selected" ' ;?> Southwest!</option>
<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected" ' ;?> Midwest!</option>
<option value="ec"<?php if(isset($_POST['regions']) && $_POST['regions'] == 'ec') echo 'selected = "selected" ' ;?> Eastcoast!</option>
<option value="ne"<?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "selected" ' ;?> Northeast!</option>




</select>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars ($_POST['comments'])    ;?></textarea>


<label>Privacy</label>
<ul>
    <!--we will return to gender once we will be adding the sticky part of the form-->

<li>

<input type="radio" name="privacy" value="yes"  <?php if(isset($_POST['privacy']) && $_POST ['privacy'] == 'yes') echo 'checked = "checked" ' ;?>> Privacy
</li>
</ul>


<input type="submit" value="Send it!">

<p><a href="">Reset it!</a></p>




</fieldset>

</form>


<?php
//we will start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we will elseif they are set

//-- start here to correct -->

if($_SERVER['REQUEST_METHOD'] == 'POST') {

 if(empty($_POST['first name'])) {
    echo '<p class="error">Please fill out your first name!</p>';
 }

 if(empty($_POST['last name'])) {
    echo '<p class="error">Please fill out your email!</p>';
 }

 if(empty($_POST['email'])) {
    echo '<p class="error">Please fill out your amount!</p>';
 }

 if(empty($_POST['gender'])) {
    echo '<p class="error">Please check your gender!</p>';
 }
// if post bank is NULL, please select your bank!

 if ($_POST['bank'] == NULL) {echo '<p class="error">Please choose your banking institution!</p>';

 }

    
    
    
if(isset($_POST['first name'],
$_POST['last name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'sstar691969@gmail.com';
$subject = 'Test Email on' .date('m/d/y, h i A');
$study = '';
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email_name.' '.PHP_EOL.'
Gender : '.$gender_name.' '.PHP_EOL.'
Phone : '.$phone_name.' '.PHP_EOL.'
Region : '.$region_name.' '.PHP_EOL.'
Comments : '.$comments_name.' '.PHP_EOL.'
';

mail($to, $subject, $study);
header('Location:thx.php');




)) {
$first_name = $_POST['first name'];
$last_name = $_POST['last name'];
$email = $_POST['email'];
// correct below or delete watching video 

$amount = floatval($_POST['amount']);
$currency= floatval($_POST['currency']);
$bank = $_POST['bank'];
$dollars = $amount * $currency;

if(!empty($name && $email && $amount && $bank)) {


    
    echo '
    <div class="box">
    <h2>Hello '.$name.' ,</h2>
    <p>You now have <b> $'.number_format($dollars, 2).' American dollars</b> and we will be emailing you at <b> '.$email.'</b> with your information, as well as despositing your funds at <b> '.$bank.'! </b></p>
    
    </div>
    ';

}// end server request  









?>




    
</body>
</html>