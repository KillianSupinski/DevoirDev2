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
    <script>
        $
        (
            function()
            {
                $("#btn").click
                (
                    
                    function()
                    {  
                        
                        var nomUser = ($("#txtName").val());
                        
                    }
                )
            }
        );
        
    </script>
</head>
<body>
    
    <h1>Votre nom</h1>
    <input id="nomUser" type="text" name="txtNom">
    <button id="btn"  onclick="AfficherRegion(($('#nomUser').val()))">Valider</button>
    <div id="divRegion"></div>
    <br><br>
    <div id="divVille"></div>

</body>
</html>