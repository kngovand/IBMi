<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt3</title>
</head>
<body>
    <?php
        abstract class User {
            public function getName() {
                return 'John';
            }
        }

        class AdminUser extends User{}

        $user = new AdminUser();

        if($user instanceof User) {
            #AdminUser extends User
            echo $user -> getName();
        }
        else {
            echo 'Not a user...';
        }
    ?>
</body>
</html>