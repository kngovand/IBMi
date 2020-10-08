<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop3</title>
</head>
<body>
    <?php
        $counter = 0;

        for ($i=0; $i<4; $i++) { 
            for ($j=0; $j<4; $j++) { 
                $counter += 1;

                if ($counter == 10) {
                    echo "I'm done\n";
                    break;
                }
                
                echo "i: {$i}\n";
                echo "j: {$j}\n";
            }
        }

    ?>
</body>
</html>