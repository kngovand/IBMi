<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Conditions</title>
</head>
<body>
    <?php
       $a = 2;
       $b = 2;
       
       if($a == 1 or $b == 1) {
            echo "Condition one true";
       }
       elseif($a == 1 or $b == 2) {
            echo "Condition two true";
       }
    ?>
    
</body>
</html>