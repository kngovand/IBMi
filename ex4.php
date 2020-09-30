<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less than 20?</title>
</head>
<body>
    <?php
        $value1 = 16;
        $value2 = 25;

        if($value1 < 20 || $value2 < 20) {
            echo "one of these values is less than 20...";
        }
        else if($value1 < 20 && $value2 < 20) {
            echo "both values are less than 20.";
        }
        else {
            echo "neither values are less than 20.";
        }
    ?>
</body>
</html>