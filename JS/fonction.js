function AfficherRegion(nomUser)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/ctrl_Home/load/",
            data:"nomUser="+nomUser,
            success:function(data)
            {
            
                $("#divRegion").empty();
                $("#divRegion").append(data);
            },
            error:function()
            {
                alert("Ereur d'affichage sur les Films");
            }
            
        }
        
    );
    var i = 4;
}
function AfficherLesVilles(idRegion)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/ctrl_Home/AfficherVille/",
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
function SetLesNotes(idRegion)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/ctrl_Home/SetAllNote/",
            data:"idRegion="+idRegion,
            success:function(data)
            {
                alert("Modification Reussite");
            },
            error:function()
            {
                alert("Erreur de modification");
            }
            
        }
        
    );
    var i = 4;
}