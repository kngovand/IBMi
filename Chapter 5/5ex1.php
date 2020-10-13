<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I/O Demo</title>
</head>
<body>
    <?php
        //include dirname("in.txt").'/files';
        $in = fopen("files/in.txt", "r") or die("unable to open file in");
        $out = fopen("files/out.txt", "w") or die("unable to open file out");

        $s1 = fread($in, filesize("files/in.txt"));

        echo "{$s1} \n <br>";
        echo "Now putting into out file...";

        fwrite($out, $s1);

        #closing files
        fclose($in);
        fclose($out);
    ?>
</body>
</html>