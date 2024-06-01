function test3(){
  console.log("test");
  $.ajax({
    url: "getdataiteneraire.php",
    success : function(result,status){
      let NosDatas = JSON.parse(result);
      console.log(JSON.parse(result));
      const variableJS1 = localStorage.getItem('variableJS1');
      const variableJS2 = localStorage.getItem('variableJS2');
      const trajet = NosDatas.filter(avoir => avoir.id_gare_depart === variableJS1);
      let monTableau = document.getElementById("resourcesTab9");
      $('#resourcesTab9 > tr').remove();
     let nbBouton = 0;
      for(let value in trajet){
        let monTr = document.createElement("tr");
          
          let monTd = document.createElement("td");
          let idtrajet = trajet[value].id_trajet;
          monTd.innerHTML = idtrajet;
          let gare_depart= trajet[value].id_gare_depart;
          let monTd2 = document.createElement("td");
          monTd2.innerHTML = gare_depart;
          let gare_arrivee= trajet[value].id_gare_arrivee;
          let monTd3 = document.createElement("td");
          monTd3.innerHTML = gare_arrivee;

          monTableau.appendChild(monTr)
          monTr.appendChild(monTd);
          monTr.appendChild(monTd2);
          monTr.appendChild(monTd3);

        
      }


    },
    error :function(result,status,err){
        console.log("N'apelle pas le fichier getDataarrivee.php");
    }
  }) 
}



function test(){
    $.ajax({
      url: "getData.php",
      success : function(result,status){
        
        let NosDatas = JSON.parse(result);
       console.log(JSON.parse(result));
       let monTableau = document.getElementById("resourcesTab");
       $('#resourcesTab > tr').remove();
       let nbBouton = 0;
       for(let value in NosDatas){
        console.log(NosDatas);
        console.log(value);
          let monTr = document.createElement("tr");
          //console.log("la valeur: " + NosDatas[value]);
          let monTd = document.createElement("td");
          let idAtm = NosDatas[value].ID_trajet;
          monTd.innerHTML = idAtm;
 
          let Date_Depart= NosDatas[value].date_depart;
          let monTd2 = document.createElement("td");
          monTd2.innerHTML = Date_Depart;
         
          let Date_Arrivee= NosDatas[value].date_arrivee;
          let monTd3 = document.createElement("td");
          monTd3.innerHTML = Date_Arrivee;
        
          let Heure_depart= NosDatas[value].heure_depart;
          let monTd4 = document.createElement("td");
          monTd4.innerHTML = Heure_depart;
     
          let Heure_arrivee =NosDatas[value].heure_arrivee;
          let monTd5 = document.createElement("td");
          monTd5.innerHTML = Heure_arrivee;
        
          let NomTrain =NosDatas[value].id_train;
          let monTd6 = document.createElement("td");
          monTd6.innerHTML = NomTrain;
          
          let NomGare =NosDatas[value].nom_gare;
          let monTd7 = document.createElement("td");
          monTd7.innerHTML = NomGare;
        

          monTableau.appendChild(monTr)
          monTr.appendChild(monTd);
          monTr.appendChild(monTd2);
          monTr.appendChild(monTd3);
          monTr.appendChild(monTd4);
          monTr.appendChild(monTd5);
          monTr.appendChild(monTd6);
          monTr.appendChild(monTd7);
        }
        //addEventListener()

      },
      error :function(result,status,err){
          console.log("N'apelle pas le fichier getData.php");
      }
    }) 
}

function test0(){
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

          let id_station =train[value].ID_station;
          let monTd5 = document.createElement("td");
          monTd5.innerHTML = id_station;

          let ID_type_train =train[value].ID_type_train;
          let monTd6 = document.createElement("td");
          monTd6.innerHTML = ID_type_train;

        
          
          
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
function test2(){
  $.ajax({
    url: "getDataarrivee.php",
    success : function(result,status){
      let NosDatas = JSON.parse(result);
      console.log(JSON.parse(result));
      let monTableau = document.getElementById("resourcesTab2");
      $('#resourcesTab2 > tr').remove();
     let nbBouton = 0;
      for(let value in NosDatas){
        let monTr = document.createElement("tr");
          
          let monTd = document.createElement("td");
          let idAtm = NosDatas[value].ID_trajet;
          monTd.innerHTML = idAtm;
          let Date_Depart= NosDatas[value].date_depart;
          let monTd2 = document.createElement("td");
          monTd2.innerHTML = Date_Depart;
          let Date_Arrivee= NosDatas[value].date_arrivee;
          let monTd3 = document.createElement("td");
          monTd3.innerHTML = Date_Arrivee;
          let Heure_depart= NosDatas[value].heure_depart;
          let monTd4 = document.createElement("td");
          monTd4.innerHTML = Heure_depart;
          let Heure_arrivee =NosDatas[value].heure_arrivee;
          let monTd5 = document.createElement("td");
          monTd5.innerHTML = Heure_arrivee;
          let NomTrain =NosDatas[value].id_train;
          let monTd6 = document.createElement("td");
          monTd6.innerHTML = NomTrain;
          let NomGare =NosDatas[value].nom_gare;
          let monTd7 = document.createElement("td");
          monTd7.innerHTML = NomGare;

          monTableau.appendChild(monTr)
          monTr.appendChild(monTd);
          monTr.appendChild(monTd2);
          monTr.appendChild(monTd3);
          monTr.appendChild(monTd4);
          monTr.appendChild(monTd5);
          monTr.appendChild(monTd6);
          monTr.appendChild(monTd7);

        
      }


    },
    error :function(result,status,err){
        console.log("N'apelle pas le fichier getDataarrivee.php");
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


