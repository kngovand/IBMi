<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop2</title>
</head>
<body>
    <?php
        $count = 0;
        
        if($count > 0) {
            do {
                echo $count;
                $count +=1; 
            } while ($a < 10);
        }
    ?>
</body>
</html>