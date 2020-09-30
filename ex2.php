<html>
<header><title>Favorite Number</title>
</header>
<body>
    <h2>Enter number: </h2>
    <form action="ex2.php" method="POST">
    <?php 
    {
        if(isset($_POST['mynum'])) {
            $favoritenum = $_POST['mynum'];
            if($favoritenum == 17) {
                echo "17 is my favorite number too! \n";
            }
            else {
                echo "$favoritenum is not my favorite number. \n";
            }
        }
    } 
    ?>

    <input type="number" name="mynum" value ="enter num here... ">
    <input type="submit" name="Submit">
    </form>
</body>
</html>