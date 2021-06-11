<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$nenrei = $_POST["nenrei"];
$youbou = $_POST["youbou"];

// echo $name."<br>";
// echo $mail."<br>";
// echo $nenrei."<br>";
// echo $youbou."<br>";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><?= $name ?></p>
<p><?= $mail ?></p>
<p><?= $nenrei ?></p>
<p><?= $youbou ?></p>


</body>
</html>
