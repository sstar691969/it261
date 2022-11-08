



<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body> 


<h1>Adder.php</h1> <form action="" method="POST"> 
<label>Enter the first number:</label>
<input type="text" name="num1"><br> 
<label>Enter the second number:</label>
<input type="text" name="num2"><br> 
<input type="submit" value="Add Em!!"> </form>


<?php     //adder-wrong.php */

if (isset($_POST['num1'],$_POST['num2'])){ 
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2']; 
    $myTotal = $num1 + $num2; 

    echo "<h2>You added " . $num1 .  ' and ' . $num2 .  "</h2>";
    echo ' <p> and the answer is <br><style="color:red;" > ' . $myTotal . '! </p>';
    echo'<p><a href="">Reset page</a></p>';
    
}
?> 

 


</body> 
</html>

<!--added $_POST['num2'] line 12--->
<!--negative sign removed line 7--->

<!-- no closing tag of form tag line 28--->
<!--no closing tag of label tag line 22--->
<!--added $_POST['num2'] line 12--->
<!--added </p>' and ;line 32--->
<!--added closing ?> line 35--->
<!--added closing to both </br> tags line29 & 31--->
<!--added a " qoute too string "Add Em!!" change to Submit string line 32--->
<!--added double quotes "<h2> , and no double " " around $num1, add single quotes 'and' plus "</h2>" line 30--->
<!-- <html> moved to the top of text header and no closing on <form action, also add method = "post"--->
<!--no ?> closing php tag after </html> and no single ';{ 37--->
<!--add ?> on line 35 to close if statement, you must indent block after if statement --->
<!--no ?> next to </html> line 37--->
<!--no ?> next to </html> line 37--->
<!--no ?> next to </html> line 37--->
