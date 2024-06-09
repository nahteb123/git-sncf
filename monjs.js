function DataDepart(){
    $.ajax({
      url: "getData.php",
      success : function(result,status){
        let NosDatas = JSON.parse(result);
        console.log(JSON.parse(result));
        const variableJS1 = localStorage.getItem('variableJS1');
        const variableJS2 = localStorage.getItem('variableJS2');
        const trajet = NosDatas.filter(gare => gare.nom_gare_depart === variableJS1 && gare.nom_gare_arrivee === variableJS2);

        console.log(trajet);
       let monTableau = document.getElementById("resourcesTab");
       $('#resourcesTab > tr').remove();
       for(let value in NosDatas){
          let monTr = document.createElement("tr");
          //console.log("la valeur: " + NosDatas[value]);
          let monTd = document.createElement("td");
          let idAtm = trajet[value].ID_trajet;
          monTd.innerHTML = idAtm;
 
          let Date_Depart= trajet[value].date_depart;
          let monTd2 = document.createElement("td");
          monTd2.innerHTML = Date_Depart;
         
          let Date_Arrivee= trajet[value].date_arrivee;
          let monTd3 = document.createElement("td");
          monTd3.innerHTML = Date_Arrivee;
        
          let Heure_depart= trajet[value].heure_depart;
          let monTd4 = document.createElement("td");
          monTd4.innerHTML = Heure_depart;
     
          let Heure_arrivee =trajet[value].heure_arrivee;
          let monTd5 = document.createElement("td");
          monTd5.innerHTML = Heure_arrivee;
        
          let NomTrain =trajet[value].id_train;
          let monTd6 = document.createElement("td");
          monTd6.innerHTML = NomTrain;
          
          let NomGareDepart =trajet[value].nom_gare_depart;
          let monTd7 = document.createElement("td");
          monTd7.innerHTML = NomGareDepart;

          let NomGareArrivee =trajet[value].nom_gare_arrivee;
          let monTd8 = document.createElement("td");
          monTd8.innerHTML = NomGareArrivee;
          
        

          monTableau.appendChild(monTr)
          monTr.appendChild(monTd);
          monTr.appendChild(monTd2);
          monTr.appendChild(monTd3);
          monTr.appendChild(monTd4);
          monTr.appendChild(monTd5);
          monTr.appendChild(monTd6);
          monTr.appendChild(monTd7);
          monTr.appendChild(monTd8);
        }
        //addEventListener()

      },
      error :function(result,status,err){
          console.log("N'apelle pas le fichier getData.php");
      }
    }) 
}

function detail_train(){
  $.ajax({
    url: "getdatatrain.php",
    success : function(result,status){
      let NosDatas = JSON.parse(result);
     console.log(JSON.parse(result));
     const variableJS = localStorage.getItem('variableJS');
     console.log(variableJS);
     const train = NosDatas.filter(train => train.ID_train === variableJS);
     console.log(train);
     let monTableau = document.getElementById("resourcesTab8");
     $('#resourcesTab8> tr').remove();
      for(let value in train){
        
          let monTr = document.createElement("tr");
          console.log("la valeur: " + NosDatas[value]);
          
          let monTd = document.createElement("td");
          let idAtm = train[value].ID_train;
          monTd.innerHTML = idAtm;
          
          let nom_train= train[value].nom_train;
          let monTd2 = document.createElement("td");
          monTd2.innerHTML = nom_train;

          let capacité= train[value].capacité_train;
          let monTd3 = document.createElement("td");
          monTd3.innerHTML = capacité;

          let nombre_reservation =train[value].nombre_réservation;
          let monTd4 = document.createElement("td");
          monTd4.innerHTML = nombre_reservation;

          let nom_station =train[value].nom_station;
          let monTd5 = document.createElement("td");
          monTd5.innerHTML = nom_station;

          let libelle_type_train =train[value].libelle_type_train;
          let monTd6 = document.createElement("td");
          monTd6.innerHTML = libelle_type_train;

        
          
          
          monTableau.appendChild(monTr)
          monTr.appendChild(monTd);
          monTr.appendChild(monTd2);
          monTr.appendChild(monTd3);
          monTr.appendChild(monTd4);
          monTr.appendChild(monTd5);
          monTr.appendChild(monTd6);
          

      }

    },
    error :function(result,status,err){
        console.log("N'apelle pas le fichier getData.php");
    }
  }) 
}


function modifTrajet(idAtm) {
  console.log(idAtm);
  var url = 'http://localhost/projetsncf/delete_traj.php?id=' + idAtm;
  console.log(url);
  window.location.href = url;
}

// http://localhost/projetsncf/modif_traj.php?id=3
// http://localhost/projetsncf/modif_trajet.php?id=1



//


