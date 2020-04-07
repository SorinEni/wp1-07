<?php
$age = 158;



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
    if (($age <= 15) || ($age >= 65)) {
        $entryFee = 50;
    }   else {
        $entryFee = 100;
    }



    ?>
    <p> Jelikož ti je <?= $age ?>, zaplatíš <?= $entryFee?> </p>


</body>
</html>