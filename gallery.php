
<?php
include('./includes/header.php');
?>
<main>

<h1>Welcome to our gallery of images!!</h1>

<?php

$people['Muhammad_Ali'] = 'aliii_Heavyweight boxer from Ky.';
$people['Sugar_Ray'] = 'sugar_Lightweight boxer from Md.';
$people['Floyd_Mayweather Jr.'] = 'floyd_Middleweight boxer from MI.';
$people['Roberto_Duran'] = 'duran_Middleweight boxer from Panama.';
$people['George_foreman'] = 'forem_Heavyweight boxer from Tx.';
$people['Larry_Holmes'] = 'holme_Heavyweight boxer from Pa.';
$people['Sugar_Robinson'] = 'rayyy_Welterweight boxer from Ga.';
$people['Mike_Tyson'] = 'tyson_Heavy weight boxer from Ny.';
$people['Joe_Louis'] = 'louis_Heavyweight boxer from Al.';
$people['Rocky_Marciano'] = 'rocky_Heavyweight boxer from Ny.';
$people['Joe_Frazier'] = 'frazi_Heavyweight boxer from SC.';

// variable ''''key ''''''''''''value
//       or related to $people, Joe frazier and description " heavyweight"
// $name '''''''''''''''' $image


?>



<table>
<?php foreach($people as $name => $image)            :?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5,);?>.jpg" alt="<?php echo str_replace('_', ' ', $name)   ;?>"></td>
<td><?php echo str_replace('_', ' ', $name)    ;?></td>

<td><?php echo substr($people[$name], 6, -1)   ;?></td>
</tr>


<?php endforeach; ?>



</table>

</main>  








    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->

<?php
include('./includes/footer.php');
?>
