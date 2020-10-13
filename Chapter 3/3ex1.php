<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Iteration</title>
</head>
<body>
    <?php
        $array = array(1, 6, 4, 2, 1);

        #for each
        #note: html ignores newlines so replace \n with br
        foreach ($array as $key => $value) {
            echo "key: $key value: $value\n";
        }

        #for each2
        foreach ($array as $a) {
            echo "{$a}\n";
        }
    ?>
</body>
</html>