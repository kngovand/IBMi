<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt4</title>
</head>
<body>
    <?php
        class User {
            private $firstName = "John";
            private $lastName = "Smith";
        }

        $user = new User();
        #cannot access firstName due to private attribute
        echo $user -> firstName;
    ?>
    
</body>
</html>