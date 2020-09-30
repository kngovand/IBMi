<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibbonaci</title>
</head>
<body>
<?php
    #RPG to PHP Fibbonaci Sequence
    $fibNum = 1;
    $prevNum = 1;
    $currentNum = 1;

    echo "$fibNum";

    while($fibNum <= 60) {
        $fibNum = $prevNum + $currentNum;
        echo ", $fibNum";
        $prevNum = $currentNum;
        $currentNum = $fibNum;
    }
?>
    
</body>
</html>