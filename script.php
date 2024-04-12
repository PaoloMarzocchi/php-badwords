<?php 
$badWord = trim($_GET['badword']);
$message = trim($_GET['message']);
//var_dump($message);

$censoredMsg = str_replace($badWord,'***',$message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No bad words</title>
    <style>
        body{
            text-align: center;
        }
        h3{
            padding:1rem;
            border: 1px solid black;
            background-color: rgb(53, 51, 51);
            color: white;
        }
        p{
            padding: 0.5rem 2rem;
            border: 1px solid black;
            width: fit-content;
            margin: 1rem auto;
        }
    </style>
</head>
<body>
<h3>Original message</h3>
<p>
    " <?php echo $message; ?> "
</p>
<span>The message contain <?php echo strlen($message); ?> characters</span>

<h3>Censored message</h3>
<p>
    " <?php echo $censoredMsg; ?> "
</p>
<span>The message contain <?php echo strlen($censoredMsg); ?> characters</span>
</body>
</html>