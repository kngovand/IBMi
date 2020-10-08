<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitals & Province</title>
</head>
<body>
    <?php
        $capitals = array("Winnipeg", "Victoria", "Toronto");
        $province = array("MB", "BC", "ON");
        $assocArray = array(
            'MB' => 'Winnipeg',
            'BC' => 'Victoria',
            'ON' => 'Toronto',
        );

        #initial size check for numeric array
        if(sizeof($capitals) == sizeof($province)) {
            #better way of writing this without foreach?
            for ($i=0; $i < sizeof($capitals) ; $i++) { 
                echo "{$capitals[$i]}, {$province[$i]} \n ";
            }
        }

        else {
            echo "numeric array size not matching.";
        }

        #associative array
        foreach ($assocArray as $key => $value) {
            echo "{$key}, {$value}";
        }

    ?>
</body>
</html>