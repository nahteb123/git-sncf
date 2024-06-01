<?php
session_start() ;
echo $_SESSION['login'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage départ</title>
    <link href="style_depart.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js_cli.js"></script>
</head>
<body>
    <main>
        <h1 class="departs_atm"> Départs </h1>
        <section class="atm_cli">
 

<table border 1 width =100% id="resourcesTab3"> 
            <tr>
				<th>id_atm</th>
				<th>destination</th>
				<th>quai</th>
				<th>heure départ</th>
                <th>nom train</th>
                <th> Réserver</th>
               
			</tr>

        </table>
         <!-- -->
        </section>  
        
    </main>
    <script>
        document.getElementById("resourcesTab3").addEventListener("load", test());
        setInterval(function() {test()}, 10000);
    </script>
</body>
</html>
