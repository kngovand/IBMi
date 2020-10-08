<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop1</title>
</head>
<body>
    <?php
        $count = 7;
        while ($count < 40) {
            echo $count;
            $count += $count / 2;
        }
    ?>
</body>
</html>