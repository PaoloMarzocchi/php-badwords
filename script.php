<?php 
$badWord = $_GET['badword'];
$message = $_GET['message'];
//var_dump($message);
$censoredMsg = str_replace($badWord,'***',$message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No bad words</title>
</head>
<body>
<h4><?php echo $message.strlen($message); ?></h4>
<h6><?php echo $censoredMsg . strlen($censoredMsg); ?></h6>
</body>
</html>