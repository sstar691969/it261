<?php

include('server.php');

?>

<h1>Login Page!</h1>

<form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method ="post">
<fieldset>

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

<label>Password</label>
<input type="password" name="password_1" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']) ;?>">



<!--------USE the reg_user name below!!!!!---->
<button type="submit"  class="btn" name="Login_user">Login</button>



<button type="button" onclick ="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'   ">Reset</button>






</fieldset>



</form>





