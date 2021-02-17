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
<form action="lijntekenen.php" method="post"><br>
    <label>
        <input type="text" name="color">
    </label>
    <label>
        <input type="text" name="length"><br>
    </label>
    <label>
        <input type="text" name="width"><br>
    </label>
    <input type="submit" name="teken de lijn"><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){var_dump($_POST);}

echo "teken lijn met kleur " .$_POST["color"]
?>
</body>
</html>]

