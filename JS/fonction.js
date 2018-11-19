
function AfficherLesVilles(idRegion)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/ctrl_Home/AfficherVille",
            data:"idRegion="+idRegion,
            success:function(data)
            {
            
                $("#divVille").empty();
                $("#divVille").append(data);
            },
            error:function()
            {
                alert("Ereur d'affichage sur les Films");
            }
            
        }
        
    );
    var i = 4;
}