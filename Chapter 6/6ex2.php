<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what's wrong? pt2</title>
</head>
<body>
    <?php
        #cannot instantiate abstract class
        abstract class User {
            public function getName() {
                return 'John';
            }
        }

        $user = new User();
        echo $user->getName();
    ?>
    
</body>
</html>