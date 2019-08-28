<?php
/*double quote allows 
1. keeping space, 
2. putting $ sign for variable name, no need for escape letter,
3. no need for putting . for concatenating

*/
$fistName = 'Anna';
$lastName = 'Yoo';

$fullName = "$fistName $lastName"; 

$title = 'ABC Book';
$newline = "\r\n"; 

$message = "Name: $fullName $newline";
$message .= "Title: $title";

// nl2br function - to make new line work
//echo nl2br($message);
if($_POST['formSubmit'] == "Submit")
{
   $varEmail = $_POST['email1'];
   //text1 = $varEmail;  
}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Form</title>

<body>
<form action="ch1_display_values.php" method="post" id="form1" autocomplete="on">

<label for="number">Enter a number</label>
<input type="email" id="number" name="email1">
<label for="text1">Here is the email you put</label>
<input type="text" name="text1">
<input type="submit" name="formSubmit">
	
</form>
<br/>
<?php echo nl2br($varEmail); ?>

</body>
</html>

