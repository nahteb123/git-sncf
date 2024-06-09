<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil SNCF</title>
    <link href="style.css" rel="stylesheet" />
    <script src="./monjs.js"></script>
    <script src="./js_cli.js"></script>
    
</head>
<body>
    <header>
        <img class="img_sncf" src="sncf.jpg" />
       <!-- <a class="lien_retour" href="ath_admin.php"> Voir tout les trajets</a> -->
        <a class="lien_retour" href="rapport_incidents.php"> Liste des derniers incidents</a> 
    </header>
    <main class="main_index">
        <h1 class="titre_index"> Bienvenue sur le site de la SNCF </h1>
        <div class="img-slider">
            <div class="slide active">
                <img src="phototrain.png">
                <form class="info" action="./ath_admin.php" method="POST">  
                    <div class="conteneur_accueil">
                        <h2 class="titre_accueil">Rechercher une gare de départ</h2>
                        <input class="input_accueil" type="text" name="depart" id ="depart">  
                    </div>
                    <div class="conteneur_accueil">
                        <h2 class="titre_accueil">Rechercher une gare d'arrivée</h2>
                        <input class="input_accueil" type="text" name="arrivee" id ="arrivee">      
                    </div>
                    <input class ="validation_formulaire_accueil" type="submit" value="Rechercher">
                </form>
                </div>
            <div class="slide">
                <img src="phototrain.png">
                <form class="info" action="./garage.php" method="POST"> 
                    <div class="conteneur_accueil">
                        <h2>Rechercher un nom de garage </h2>   
                        <input class="input_accueil" type="text" name="garage" id ="garage"> 
                    </div>
                    <input class ="validation_formulaire_accueil" type="submit" value="Rechercher">
                </form>
                </div>
            <div class="slide">
                <img src="phototrain.png">
                <form class="info"action="./detail_train.php" method="POST"> 
                    <div class="conteneur_accueil">
                        <h2>Rechercher toutes les informations d'un train</h2>   
                        <input class="input_accueil" type="text" name="detail_train" id ="detail_train">
                    </div>   
                    <input class ="validation_formulaire_accueil" type="submit" value="Rechercher">
                </form>
            </div>
            <div class="slide">
                <img src="phototrain.png">
                <form class="info" action="./liste_reservation.php" method="POST">  
                <div class="conteneur_accueil">
                    <h2>Voir toutes les reservations pour un train donné</h2>  
                    <input class="input_accueil" type="text" name="liste_reservation"  id ="liste_reservation">
                </div>
                    <input class ="validation_formulaire_accueil" type="submit" value="Rechercher">
                </form>
        </div>
        <div class="navigation">
            <div class="btn active">Iténéraire</div>
            <div class="btn">Nom garage</div>
            <div class="btn">N°train</div>
            <div class="btn">Réservation</div>
            
        </div>
    </div>
        
    </main>
    <footer>
    </footer>
    <script>
        var slides=document.querySelectorAll('.slide');
        var btns= document.querySelectorAll('.btn');
        let currentSlide =1;


        var manualNav =function(manual){
            slides.forEach((slide) =>{
                slide.classList.remove('active');

                btns.forEach((btn)=> {
                    btn.classList.remove('active');
                })
            });
            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }
        btns.forEach((btn,i)=> {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide=i;
                console.log(i)
            });
        });


    </script>
</body>
</html>
<!---<section class="test">
        <a class = "lien_garage" href="./garage.php">Regarder un garage</a>
        <a class = "train_detail" href="./detail_train.php">Connaitre le train</a>
        <a class = "train_detail" href="./ath_admin.php">Voir/modifier la liste des trains</a>
        
        </section>
    
    
    src="./jspageacceuil.js"-->
        