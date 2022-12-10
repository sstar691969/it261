<?php

// This will be our people-view page, which of course starts with our include, pointing to our config, But not our header include!

include('config.php');

// is our get set - is it isset?


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');


}

// we will now select from the table when people id = id


$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,
mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysql_fetch_assoc($result)) {
$first_name = stripcslashes($row['first_name']);
$last_name = stripcslashes($row['last_name']);
$email = stripcslashes($row['email']);
$birthdate = stripcslashes($row['birthdate']);
$occupation = stripcslashes($row['occupation']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
$feedback = '';


}// close while


} else {  // end if statement

feedback = 'There is a problem!!!';

}  // end else

include('./include/header.php');
?>

<div id="wrapper">
<main>
<h1> Welcome to our People View Page!</h1>
<h2> Introducing you to <?php echo $first_name  ;?>'s Page</h2>'




</main>



<aside>
<h3>This is my Aside</h3>


</aside>




</div>

<!-- end wrapper -->