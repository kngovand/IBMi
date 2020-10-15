<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt5</title>
</head>
<body>
    <?php
        class User {
            private $firstName = "John";
            private $lastName = "Smith";
        }

        class AdminUser extends User {}

        $user = new AdminUser();
        #cannot access firstName - cannot reference firstName from AdminUser
        echo $user -> firstName;
    ?>
    
</body>
</html>