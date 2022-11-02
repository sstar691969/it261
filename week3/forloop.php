<?php

// this file will demostrate for loops and in addition to placing your php inside your HTML!!!!
// The for loop - Loops through a block of code a specified number of times
// for(init counter; test counter; increment counter) { code to be executed for each interation; }

// celcius and fahrnheit

// $far = ($celcius * 9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

table {
    width:500px;
    margin:20px auto;
    border-collapse:collapse;
    border:1px solid lightblue;
}
td {
    border:1px solid lightblue;
    border-collapse:collapse;
    padding:5x;
}

h1, h2 {
    text-align:center;
    margin: 10px 0;
    color:green;


}

</style>

</head>
<body>
    <h1>My Celcius / Fahrnheit Table!</h1>

<table>
    <tr>
<th>Celcius</th>
<th>Fahrnheit</th>
 </tr>
<?php
for ($cel = 0; $cel <= 100; $cel +=5) {
$far = ($cel * 9/5) + 32;
echo '<tr>';
echo '<td>'.$cel.' degrees </td>';
echo '<td>'.$far.' degrees </td>';
echo '</tr>';
}
?>


</table>

<h2>You will now complete a kilometer/mileage table on your own!</h2>
<!-- below new table displaying kilometer/mileage table -->
<h1>My Kilometer / Mileage Table!</h1>

<table>
    <tr>
<th>Kilometer</th>
<th>Mileage</th>
 </tr>
<?php
for ($cel = 0; $cel <= 100; $cel +=5) {
// $far = ($cel * 9/5) + 32; 
echo '<tr>';
echo '<td>'.$miles.' miles </td>';
echo '<td>'.$kil.' kilometers </td>';
echo '</tr>';
}

<!-- below new table displaying kilometer/mileage table -->





?>


</table>



</body>
</html>