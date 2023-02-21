<?php

// This will be our boxer-view page, which of course starts with our include, pointing to our config, But not our header include!

include('config.php');

// is our get set - is it isset?


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');


}

// we will now select from the table when people id = id


$sql = 'SELECT * FROM project1 WHERE project1_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,
mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
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

$feedback ='There is a problem!!!';

}  // end else


include('./includes/header.php');
?>

<div id="wrapper">
<main>
<h1> Welcome to our Boxers View Page!</h1>
<h2> Introducing you to <?php echo $first_name  ;?>'s Page</h2>

<?php 

echo '
<ul>
<li><b>First Name: </b>'.$first_name.' </li>
<li><b>Last Name: </b>'.$last_name.' </li>
<li><b>Email: </b>'.$email.' </li>
<li><b>Birthdate: </b>'.$birthdate.' </li>
<li><b>Occupation: </b>'.$occupation.' </li>

<li><p>'.$details.'</p>
</li>
</ul>
';

?>



<p><a href="project.php">Return to the boxer page!</a></p>


</main>


<aside>
<h3>This is my Aside</h3>
<figure>
<img src="images/boxer<?php echo $id; ?>.jpg" alt="<?php echo $first_name ;?>">
<figcaption>


<?php


echo '
'.$first_name.' '.$last_name.', '.$occupation.'
';
?>
</figcaption>
</figure>
<p><i><?php
echo $blurb;


?></i></p>
</aside>

<?php

// we are going to release the server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);


?>


</div>

<!-- end wrapper -->
<?php 
include('./includes/footer.php');

