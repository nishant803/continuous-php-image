<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Teams: abc
    </h1>
    <ul>
        <?php 
           $json = file_get_contents('http://players/');
           $players = json_decode($json) -> players;
           foreach ($players as $player) {
                echo "<li>$player</li>";
           }
        ?>
    </ul>
</body>
</html>