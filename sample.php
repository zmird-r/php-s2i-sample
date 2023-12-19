<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Sample</title>
</head>
<body>
    <?php
        ini_set('date.timezone', 'Asia/Tokyo');
        echo nl2br("Current time：".date('h:i:s') ."\n");
        sleep(180);
        echo "Time at 180 seconds later:".date('h:i:s');
    ?>
</body>
</html>
