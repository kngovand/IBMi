<html>
<header><title>Hello $name</title>
</header>
<body>
    <form action="ex1.php" method="POST">
    <?php 
    {
        if(isset($_POST['myname'])) {
            $displayName = $_POST['myname'];
            echo "hello $displayName";
        }
    } 
    ?>
    <input type="text" name="myname" value ="enter name here... ">
    <input type="submit" name="Submit">
    </form>
</body>
</html>