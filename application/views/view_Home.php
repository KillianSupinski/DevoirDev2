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
    <form action="<?php echo base_url(); ?>index.php/ctrl_Home/load/">
    <h1>Votre nom</h1>
    <input type="text" name="txtNom">
    <input type="submit">
    <div id="divRegion"></div>
    
</form>
</body>
</html>