<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gestion Supermerche</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         <script type="text/javascript">
             
                   $
           (
               function()
                {


                   $("#lstSecteurs").change(function(){ 

                       AfficherLesRayons($(this).val());
                    });
                   }
            );
     
         </script> 
             
             
             
             
             
            
 
    <body>
          <h2>Liste des secteurs</h2>
         <select id="lstSecteurs">
       <?php
               
        foreach ($lesSecteurs as $secteur)      
            {
            echo "<option id='opt1' value='".$secteur->numS."'>".$secteur->nomS."</option>";
            }
        ?> 
         </select>
             
          <h2>Listes des rayons  </h2>
        <div id="divRayons"></div>

        <div id="divEmployes"></div>

        <div id="divHeures"></div>

         
         
         
         
         
    </body>
</html>
