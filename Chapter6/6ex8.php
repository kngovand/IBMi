<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt8</title>
</head>
<body>
    <?php
        function __autoload($className) {
            echo "Looking for {$className}";
            // Exiting because this is only an example
            die();
        }

        class User {
            protected $name = "Test";
        }

        echo "Creating user object \n";
        $user = new User();
        $test1 = "User1";
        $test2 = "User2";
        $test3 = "User3";

        #__autoload($test1);
        #__autoload($test2);
        __autoload($test3);
    ?>
    
</body>
</html>