<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X UA-Compatible" content="ie-edge"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Image Gallery</title>
</head>
<body>
    <?php
        include "connect.php";
    ?>
    <div class="container">
        <?php
            $result = $db->query("select * from paintings");
            while($row = $result -> fetch_row()) {
                #print_r($row);
        ?>
        <div class="image">
            <h1><?=$row[1]?></h1>
            <img src="<?=$row[5]?>">
        </div>
        <?php
            }
            $db -> close();
        ?>
    </div>
</body>
</html>