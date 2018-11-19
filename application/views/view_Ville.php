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
    <script src="main.js"></script>
</head>
<body>
    <form method="GET" action="<?php echo base_url(); ?>index.php/SetAllNote/">
    <?php
    foreach ($lesVilles as $uneVille) {
        ?>
        <input name="rdVille" type="radio" value="<?php echo $uneVille->idVille; ?>">
        <?php echo $uneVille->nomVille; ?>
        <?php echo $uneVille->scoreVille; ?> <br>
        <?php
    }
    ?>
    <input type="submit" value="+ 5 points ">
    </form>
</body>
</html>