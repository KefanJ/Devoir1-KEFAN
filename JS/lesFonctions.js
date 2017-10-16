/* global numSecteur */

function  AfficherLesRayons($numSecteur){
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Accueil/AfficherLesRayons",
           data:"numSecteur="+numSecteur,
             success:function(data)
            {
                $('#divRayons').empty();
                $('#divRayons').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}
function  AfficherLesEmployes(){
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Accueil/getLesEmployes",

             success:function(data)
            {
                $('#divEmployes').empty();
                $('#divEmployes').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}
function AfficherHeuresTravail(){
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Accueil/AfficherHeuresTravail",

             success:function(data)
            {
                $('#divHeures').empty();
                $('#divHeures').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}