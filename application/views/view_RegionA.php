<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="JS/fonction.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <?php
    foreach ($lesRegions as $unRegion) {
        ?>
        <input type="radio" onclick="AfficherLesVilles(<?php echo $unRegion->idRegion; ?>)">
        <?php echo $unRegion->nomRegion; ?> <br>
        <?php
    }
    ?>
    <div id="divVille"></div>
</body>
</html>