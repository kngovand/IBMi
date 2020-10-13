<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Uppercase</title>
</head>
<body>
    <?php
        $value = "Hello World";
        echo toUpper($value);

        function toUpper($s1) {
            return strtoupper($s1);
        }
    ?>
</body>
</html>