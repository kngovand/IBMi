<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt6</title>
</head>
<body>
    <?php
        class User {
            protected $firstName = "John";
            protected $lastName = "Smith";
        }

        class AdminUser extends User {

            public function getFirstName() {
                return $this -> firstName;
            }
        }

        $user = new AdminUser();
        #Works!
        echo $user -> getFirstName();
    ?>
    
</body>
</html>