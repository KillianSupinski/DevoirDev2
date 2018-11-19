<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>JS/fonction.js"></script>
</head>
<body>
<?php
    foreach ($laRegion as $unRegion) {
        ?>
        <input type="radio" name="rdRegionI" onclick="AfficherLesVilles('<?php echo $unRegion->idRegion; ?>')">
        <?php echo $unRegion->nomRegion; ?>
        <?php echo $unRegion->scoreRegion; ?> <br>
        <?php
    }
    ?>
    <div id="divVille"></div>
</body>
</html>