<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Uppercase w/ Null</title>
</head>
<body>
    <?php
        $value = "Hello World";

        echo toUpper($value);
        #echo toUpper();

        function toUpper($s1 = null) {

            if($s1 == NULL) {
                return "<br>";
            }
            else {
                return strtoupper($s1);
            }
                    
        }
    ?>
</body>
</html>