<?php
// Our server.php file - this is where our session will start
// our session is a way to store the information

session_start();
include('config.php');
// this is where eventually you will have the header include
// include('./includes/header.php');

// this server.php page will be communicating to our database!!!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));



// register the user, using in isset reg_user

$errors = array();

if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);



//we want to make sure that all the input fields have been filled out
// if empty, you are going to use a new function which is called array_push()


if(empty($first_name)) {
    array_push($errors, 'First name is require!!!');

}
if(empty($last_name)) {
    array_push($errors, 'Last name is require!!!');

} 
if(empty($email)) {
    array_push($errors, 'Email is require!!!');

}
if(empty($username)) {
    array_push($errors, 'Username is require!!!');

}
if(empty($password_1)) {
    array_push($errors, 'Password is require!!!');

}
// our logic is this - is password_1 != to password_2

if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match!');


}
/* below can deleted if not related to it261//
/*if (count($errors)>0) {
    echo "<div class= 'error alert'> $errors</div>";
}
}else{
    require_once "database.php";
    $sql = INSERT INTO users (first_name, last_name, username, email, password)";


}   delete all above not it261*/







// we are checking the username and passwrd,,,,,, and selecting if from the table


$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email
= '$email' LIMIT 1 ";

$result = mysqli_query($iConn,$user_check_query) or die(myError(__FILE__,__LINE__,
mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we are going to have an if statement, and we will reset 2 additional if statements inside our main if statement

// bottom line is, we cannot have duplicate statements or duplicate emails

if($rows) {



if ($rows['username'] == $username) {
    array_push($errors, 'Username already exsists!');
}
if ($rows['email'] == $email) {
    array_push($errors, 'Email already exsists!');
}




} // close big if statement

// do we have any errors??? idealistically, no errors!!!

if(count($errors) == 0 ) {
    

$password = md5($password_1);

// Now is time to insert the information into our table!!!

$query = "INSERT INTO users (first_name, last_name, email, username, password_1) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

mysqli_query($iConn, $query);



$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

// if we are successful, the we will be directed to our login page!!!!

header('Location:login.php');


} // close if count errors




} // end if isset_reg_user


//Now, we not communicate with the login page - we will ask the sanme question!!!


if(isset($_POST['login_user'])) {
$username = mysqli_real_escape_string($iConn, $_POST['username']);

$password = mysqli_real_escape_string($iConn, $_POST['password']);

if(empty($username)) {
    array_push($errors, 'Username is required!!! ');

}
if(empty($password)) {
    array_push($errors, 'Password is required!!! ');

}

//we will be counting our errors, and hope that we have zero errors!!

if(count($errors) == 0 ) {
    

$password = md5($password);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'  ";

//below you have a row varible that is ($results) NOT ($result) 

$results = mysqli_query($iConn. $query);

if(mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

//if the above is successful, the user will be directed to the home page, which will be index.php
    
header('Location:index.php');


} else {

array_push($errors, 'wrong username/password combination');
   


} //close else


} // close count


} // close isset login user


