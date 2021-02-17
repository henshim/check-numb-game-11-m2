<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<legend>enter number form 1 to 100</legend>
<form action="" method="post">
    <input type="number" name="in"><br>
    <button type="submit">Check</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $check = floor(rand() * 100);
    $count = 0;
    $in = $_POST['in'];
    $count++;
    if ($in == $check) {
        echo 'correct';
    } else {
        echo 'game over';
    }
}
