function test(){
    $.ajax({
      url: "get_data_cli.php",
      success : function(result,status){
        console.log("test");
        console.log(JSON.parse(result));
        let NosDatas = JSON.parse(result);
       let monTableau = document.getElementById("resourcesTab3");
       $('#resourcesTab3 > tr').remove();
        for(let value in NosDatas){
          console.log(NosDatas);
          console.log(value);
            let monTr = document.createElement("tr");
            //console.log("la valeur: " + NosDatas[value]);
            
            let monTd = document.createElement("td");
            let idAtm = NosDatas[value].ID_trajet;
            monTd.innerHTML = idAtm;
            
            let nom_gare= NosDatas[value].nom_gare;
            let monTd2 = document.createElement("td");
            monTd2.innerHTML = nom_gare;

            let dest= NosDatas[value].nom_quai;
            let monTd3 = document.createElement("td");
            monTd3.innerHTML = dest;

            let Voie =NosDatas[value].heure_depart;
            let monTd4 = document.createElement("td");
            monTd4.innerHTML = Voie;
          
            let NomTrain =NosDatas[value].nom_train;
            let monTd5 = document.createElement("td");
            monTd5.innerHTML = NomTrain;

            let monTd6 = document.createElement("td");
            let monBouton = document.createElement("button");
            monBouton.name = "Réserver";
           

            monBouton.addEventListener("click",(ev) => {
              console.log("hello")
              modifTrajet(idAtm);
             })

            

             let monText = document.createTextNode("Réserver");
            monTableau.appendChild(monTr);
            monTr.appendChild(monTd);
            monTr.appendChild(monTd2);
            monTr.appendChild(monTd3);
            monTr.appendChild(monTd4);
            monTr.appendChild(monTd5);
            monTr.appendChild(monTd6);
            monTd6.appendChild(monBouton);
            monBouton.appendChild(monText);

          
        
        }
       
        

      },
      error :function(result,status,err){
          console.log("N'apelle pas le fichier getData.php");
      }
    }) 

}

function test2(){
    $.ajax({
      url: "get_data_cli_arrivee.php",
      success : function(result,status){
        let NosDatas = JSON.parse(result);
        let monTableau = document.getElementById("resourcesTab4");
        //console.log(JSON.parse(result));
        $('#resourcesTab4 > tr').remove();
        for(let value in NosDatas){
            let monTr = document.createElement("tr");
           // console.log("la valeur: " + NosDatas[value]);
            
            let monTd = document.createElement("td");
            let idAtm = NosDatas[value].ID_trajet;
            monTd.innerHTML = idAtm;
            
            let nom_gare= NosDatas[value].nom_gare;
            let monTd2 = document.createElement("td");
            monTd2.innerHTML = nom_gare;

            let dest= NosDatas[value].nom_quai;
            let monTd3 = document.createElement("td");
            monTd3.innerHTML = dest;

            let Voie =NosDatas[value].heure_arrivee;
            let monTd4 = document.createElement("td");
            monTd4.innerHTML = Voie;
          
            let NomTrain =NosDatas[value].nom_train;
            let monTd5 = document.createElement("td");
            monTd5.innerHTML = NomTrain;
            

        
            monTableau.appendChild(monTr);
            monTr.appendChild(monTd);
            monTr.appendChild(monTd2);
            monTr.appendChild(monTd3);
            monTr.appendChild(monTd4);
            monTr.appendChild(monTd5);

            
            
        }
        //addEventListener()

      },
      error :function(result,status,err){
          console.log("N'apelle pas le fichier getData.php");
      }
    }) 

}

function test4(){
  $.ajax({
    url: "getdataincident.php",
    success : function(result,status){
      console.log(result);
      let NosDatas = JSON.parse(result);
     let monTableau = document.getElementById("resourcesTab6");
     $('#resourcesTab6 > tr').remove();
      for(let value in NosDatas){
        console.log(NosDatas);
        console.log(value);
          let monTr = document.createElement("tr");
          //console.log("la valeur: " + NosDatas[value]);
          
          let id_incident = NosDatas[value].ID_incidient;
          let monTd = document.createElement("td");
          monTd.innerHTML = id_incident;
          
          let libelle= NosDatas[value].libelle_incident;
          let monTd2 = document.createElement("td");
          monTd2.innerHTML = libelle;

          let desc= NosDatas[value].description_incident;
          let monTd3 = document.createElement("td");
          monTd3.innerHTML = desc;

          let incident =NosDatas[value].date_incident;
          let monTd4 = document.createElement("td");
          monTd4.innerHTML = incident;
        
          let type_incident =NosDatas[value].ID_type_incident;
          let monTd5 = document.createElement("td");
          monTd5.innerHTML = type_incident;


          

         
          monTableau.appendChild(monTr);
          monTr.appendChild(monTd);
          monTr.appendChild(monTd2);
          monTr.appendChild(monTd3);
          monTr.appendChild(monTd4);
          monTr.appendChild(monTd5);

      }
     
      

    },
    error :function(result,status,err){
        console.log("N'apelle pas le fichier getData.php");
    }
  }) 

}
function test5(){
  $.ajax({
    url: "getdatagarage.php",
    success : function(result,status){
      const variableJS = localStorage.getItem('variableJS');
      let NosDatas = JSON.parse(result);
      console.log(NosDatas);
      const gare = NosDatas.filter(station => station.nom_station === variableJS);
      console.log(gare);
     let monTableau = document.getElementById("resourcesTab7");
     $('#resourcesTab7 > tr').remove();
     for(let value in gare){
      let monTableau = document.getElementById("resourcesTab7");
      let monTr = document.createElement("tr");
      //console.log("la valeur: " + NosDatas[value]);
      
      let monTd = document.createElement("td");
      let idAtm = gare[value].ID_station;
      monTd.innerHTML = idAtm;
      
      let timer= gare[value].nom_station;
      let monTd2 = document.createElement("td");
      monTd2.innerHTML = timer;

  
      monTableau.appendChild(monTr)
      monTr.appendChild(monTd);
      monTr.appendChild(monTd2);
      
      
  }
     
      

    },
    error :function(result,status,err){
        console.log("N'apelle pas le fichier getData.php");
    }
  }) 

}


function test6(){
  $.ajax({
    url: "getreservation.php",
    success : function(result,status){
      let NosDatas = JSON.parse(result);
     let monTableau = document.getElementById("resourcesTab8");
     const variableJSreserv = localStorage.getItem('variableJSreserv');
     const reservation = NosDatas.filter(reserver => reserver.id_train === variableJSreserv);
     $('#resourcesTab8 > tr').remove();
     for(let value in reservation){

      let monTableau = document.getElementById("resourcesTab8");
      let monTr = document.createElement("tr");
      //console.log("la valeur: " + NosDatas[value]);
      
      let id_train = reservation[value].id_train;
      let monTd = document.createElement("td");
      monTd.innerHTML = id_train;
      
      let Id_client= reservation[value].Id_client;
      let monTd2 = document.createElement("td");
      monTd2.innerHTML = Id_client;
      
      let monTd3 = document.createElement("td");
      let monBouton = document.createElement("button");
      monBouton.name = "Supprimer";
     

      monBouton.addEventListener("click",(ev) => {
        deletereservation(id_train, Id_client );
       })

      

       let monText = document.createTextNode("Supprimer");
       monTableau.appendChild(monTr);
       monTr.appendChild(monTd);
       monTr.appendChild(monTd2);
       monTr.appendChild(monTd3);
       monTd3.appendChild(monBouton);
       monBouton.appendChild(monText);

      
  }
     
      

    },
    error :function(result,status,err){
        console.log("N'apelle pas le fichier getData.php");
    }
  }) 

}
function modifTrajet(idAtm) {
  console.log(idAtm);
  var url = 'http://localhost/projetsncf/reserver.php?id=' + idAtm;
  console.log(url);
  window.location.href = url;
}
function deletereservation(id_train, Id_client) {
  var url = 'http://localhost/projetsncf/supprimer_reservation.php?id1=' + id_train+ '&id2=' +Id_client;
  window.location.href = url;
}