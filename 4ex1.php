<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Func1</title>
</head>
<body>
    <?php
        $value = "hello world";

        function toUpper($s1) {
            return strtoupper($s1);
        }

        echo toUpper($value);
    ?>
</body>
</html>