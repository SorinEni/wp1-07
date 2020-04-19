  <?php
$entryfee;
$age = "13";
$height = "158";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (($height <= 140) && ($age <= 10) || ($age >= 65)) {
    $entryfee = 60;
}
    elseif (($height >= 140) && ($age <= 10)) {
    $entryfee = 60;
}
    elseif (($age >= 15) && ($age <= 26)) {
    $entryfee = 80;
}
    else {
    $entryfee = 120;
}
?>

<p> Protože ti je <?= $age ?> musíš zaplatit <?= $entryfee ?> kč. </p>

</body>
</html>