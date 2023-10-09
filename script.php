<?php 
$pragraph = 'Sei proprio un ';
$bad_word = $_GET['bad_word'];
$censured = '***';
$str = $pragraph . $bad_word;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script</title>
</head>
<body>


<?php echo $str .' ' .strlen($str)?> <br>

<?php echo $str = preg_replace('/Sei/', $censured, $str)?>

</body>
</html>