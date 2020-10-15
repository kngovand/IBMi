<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt7</title>
</head>
<body>
    <?php
        class User {
            protected $firstName = "John";
            protected $lastName = "Smith";

            public function __get($name) {
                if(isset($this->$name)) {
                    return $this->$name;
                }
                return null;
            }
        }

        $user = new User();
        #Works too! With built in PHP function
        echo $user->firstName;
    ?>
    
</body>
</html>