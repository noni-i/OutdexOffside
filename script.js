var dayNames = ['E diel', 'E Hene', 'E Marte', 'E Merkure', 'E Enjte', 'E Premte', 'E Shtune'],
    monthNames = ['Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nëntor', 'Dhjetor'];

d = new Date();

const monthHeader = document.getElementById('month-header');

document.getElementById('score-date').innerHTML = toString(getFormattedDate(d));

var currentDate = new Date();

var yesterday = new Date();
yesterday.setDate(yesterday.getDate()-1);
yesterday = getFormattedDate(yesterday);

var tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate()+1);
tomorrow = getFormattedDate(tomorrow);

var today = getFormattedDate(d);

function getFormattedDate(date) {
  var year = date.getFullYear();

  var month = (1 + date.getMonth()).toString();
  month = month.length > 1 ? month : '0' + month;

  var day = date.getDate().toString();
  day = day.length > 1 ? day : '0' + day;
  
  return month + '/' + day + '/' + year;
}

$(function() {
    $("#datepicker").datepicker();


      $("#datepicker").datepicker('setDate', new Date());
    
      console.log(currentDate);
  });

  console.log(d);

  function DateToString(x){
    switch(x) {
      case today:
        return 'Ndeshjet e Sotme'
        break;
      case yesterday:
        return 'Ndeshjet e Djeshme'
        break;
      case tomorrow:
          return 'Ndeshjet e Nesërme'
          break;
      default:
        return 'Ndeshjet'
    }
     
  }

  function toString(d){
    i = d.split('/');
    m = i[0] - 1;
    console.log(i);
    return i[1] + " " + monthNames[m]  +  " " + i[2];
  }

  $( "#datepicker" ).datepicker({
    onSelect: function(date){
      monthHeader.innerHTML = DateToString(date);
      document.getElementById('score-date').innerHTML = toString(date);
      
      var collect = document.getElementsByClassName("match");

      console.log(collect);

      var d = date;

      fetch('scores.json')
      .then(response => response.json())
      .then(data => {
        var games = data;
        console.log(games.hasOwnProperty(d));
        console.log(games["12/29/2022"]['LaLiga'][0])
        if(games.hasOwnProperty(d)){
        document.getElementById('esmatches').innerHTML = "";
        if (!games[d].hasOwnProperty("Premier League")) {
          document.getElementById('plmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[0].style.display = 'none';
        } else{
          if(games[d]['Premier League'] != null && collect.length == 0){
            document.getElementsByClassName('ligat')[0].style.display = 'flex';
            const divPL = document.getElementById("plmatches");
            for (i = 0; i < games[d]['Premier League'].length; i++) {
              const a = document.createElement("p");
              a.innerHTML = games[d]['Premier League'][i];
              a.classList.add("match");
              divPL.appendChild(a);
            }
          } else {
            document.getElementById('plmatches').innerHTML = "";
            if(games[d]['Premier League'] != null && collect.length == 0){
              document.getElementsByClassName('ligat')[0].style.display = 'flex';
              const divPL = document.getElementById("plmatches");
              for (i = 0; i < games[d]['Premier League'].length; i++) {
                const a = document.createElement("p");
                a.innerHTML = games[d]['Premier League'][i];
                a.classList.add("match");
                divPL.appendChild(a);
              }
            }
          }


        }

        if(!games[d].hasOwnProperty("World Cup")){
          document.getElementById('wcmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[1].style.display = 'none';
        } else {
          if(games[d]['World Cup'] != null && collect.length == 0){
            document.getElementsByClassName('ligat')[1].style.display = 'flex';
            const divPL = document.getElementById("wcmatches");
            for (i = 0; i < games[d]['World Cup'].length; i++) {
              const a = document.createElement("p");
              a.innerHTML = games[d]['World Cup'][i];
              a.classList.add("match");
              divPL.appendChild(a);
            }
          } else {
            document.getElementById('wcmatches').innerHTML = "";
            if(games[d]['World Cup'] != null && collect.length == 0){
              document.getElementsByClassName('ligat')[1].style.display = 'flex';
              const divPL = document.getElementById("wcmatches");
              for (i = 0; i < games[d]['World Cup'].length; i++) {
                const a = document.createElement("p");
                a.innerHTML = games[d]['World Cup'][i];
                a.classList.add("match");
                divPL.appendChild(a);
              }
            }
          }
        }

        if(!games[d].hasOwnProperty("LaLiga")){
          document.getElementById('esmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[2].style.display = 'none';
        } else {
          if(games[d]['LaLiga'] != null && collect.length == 0){
            document.getElementsByClassName('ligat')[2].style.display = 'flex';
            const divPL = document.getElementById("esmatches");
            for (i = 0; i < games[d]['LaLiga'].length; i++) {
              const a = document.createElement("p");
              a.innerHTML = games[d]['LaLiga'][i];
              a.classList.add("match");
              divPL.appendChild(a);
            }
          } else {
            document.getElementById('esmatches').innerHTML = "";
            if(games[d]['LaLiga'] != null && collect.length == 0){
              document.getElementsByClassName('ligat')[2].style.display = 'flex';
              const divPL = document.getElementById("esmatches");
              for (i = 0; i < games[d]['LaLiga'].length; i++) {
                const a = document.createElement("p");
                a.innerHTML = games[d]['LaLiga'][i];
                a.classList.add("match");
                divPL.appendChild(a);
              }
            }
          }
        }
        }else{
          document.getElementById('esmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[2].style.display = 'none';
          document.getElementById('wcmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[1].style.display = 'none';
          document.getElementById('plmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[0].style.display = 'none';
          document.getElementById('esmatches').innerHTML = "Nuk u gjet asnjë ndeshje. Zgjedh një datë tjetër";
        }
      });
    }    
  })
   
  function showPswd() {
    var x = document.getElementById("passwordfield");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function ValidateEmail() 
{
  var email = document.getElementById('emailfield').value;
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 if (email.match(regex))
  {
    document.getElementById('emailfield').style.borderColor="gray"
    document.getElementById('strong-email').innerHTML = "Ju lutem shkruani një email adresë valide";
    document.getElementById('strong-email').style.color = "#fff"
    return (true) 
  }
    document.getElementById('emailfield').style.borderColor="#C50E19"
    document.getElementById('strong-email').innerHTML = "Invalid";
    document.getElementById('strong-email').style.color = "#C50E19"
    return (false)
}

function ValidatePassword(){
  var password = document.getElementById('passwordfield').value;
  var regex = /(?=[A-Za-z0-9@#$%^&+!=]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}).*$/;
  if (password.match(regex))
  {
    document.getElementById('passwordfield').style.borderColor="gray"
    document.getElementById('strong-password').innerHTML = "Ju lutem shkruani një email adresë valide";
    document.getElementById('strong-password').style.color = "#fff"
    return (true) 
  }
    document.getElementById('passwordfield').style.borderColor="#C50E19"
    document.getElementById('strong-password').innerHTML = "Invalid";
    document.getElementById('strong-password').style.color = "#C50E19"
    return (false)
}


function unlockButton(){
  var x = (ValidateEmail(document.getElementById('emailfield').value));
  var y = (ValidatePassword(document.getElementById('passwordfield').value)); 
  console.log(document.getElementById('myCheckbox').checked == true);
  if(document.getElementById('myCheckbox').checked == true){
    if(x === true && y === true){
      var button = document.getElementsByClassName('button-signup-final')[0];
      button.className = 'button-signup';
      button.addEventListener('click', function() {
        alert('Krijimi i llogarisë u krye me sukses.');
        document.getElementById('emailfield').value = "";
        document.getElementById('passwordfield').value = "";
        document.getElementById('myCheckbox').checked = false;
        document.getElementsByClassName('button-signup')[3].className = 'button-signup-final';
    },{
        once: true
    });
    }
  }else if(document.getElementById('myCheckbox').checked == false){
    document.getElementsByClassName('button-signup')[3].className = 'button-signup-final';
  }
}  


fetch('scores.json')
      .then(response => response.json())
      .then(data => {
        
        var collect = document.getElementsByClassName("match");

        var games = data;
        var x = getFormattedDate(d);
        if(games.hasOwnProperty(x)){
        document.getElementById('esmatches').innerHTML = "";
        if (!games[x].hasOwnProperty("Premier League")) {
          document.getElementById('plmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[0].style.display = 'none';
        } else{
          if(games[x]['Premier League'] != null && collect.length == 0){
            document.getElementsByClassName('ligat')[0].style.display = 'flex';
            const divPL = document.getElementById("plmatches");
            for (i = 0; i < games[x]['Premier League'].length; i++) {
              const a = document.createElement("p");
              a.innerHTML = games[x]['Premier League'][i];
              a.classList.add("match");
              divPL.appendChild(a);
            }
          } else {
            document.getElementById('plmatches').innerHTML = "";
            if(games[x]['Premier League'] != null && collect.length == 0){
              document.getElementsByClassName('ligat')[0].style.display = 'flex';
              const divPL = document.getElementById("plmatches");
              for (i = 0; i < games[x]['Premier League'].length; i++) {
                const a = document.createElement("p");
                a.innerHTML = games[x]['Premier League'][i];
                a.classList.add("match");
                divPL.appendChild(a);
              }
            }
          }


        }

        if(!games[d].hasOwnProperty("World Cup")){
          document.getElementById('wcmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[1].style.display = 'none';
        } else {
          if(games[x]['World Cup'] != null && collect.length == 0){
            document.getElementsByClassName('ligat')[1].style.display = 'flex';
            const divPL = document.getElementById("wcmatches");
            for (i = 0; i < games[x]['World Cup'].length; i++) {
              const a = document.createElement("p");
              a.innerHTML = games[x]['World Cup'][i];
              a.classList.add("match");
              divPL.appendChild(a);
            }
          } else {
            document.getElementById('wcmatches').innerHTML = "";
            if(games[x]['World Cup'] != null && collect.length == 0){
              document.getElementsByClassName('ligat')[1].style.display = 'flex';
              const divPL = document.getElementById("wcmatches");
              for (i = 0; i < games[x]['World Cup'].length; i++) {
                const a = document.createElement("p");
                a.innerHTML = games[x]['World Cup'][i];
                a.classList.add("match");
                divPL.appendChild(a);
              }
            }
          }
        }

        if(!games[d].hasOwnProperty("LaLiga")){
          document.getElementById('esmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[2].style.display = 'none';
        } else {
          if(games[d]['LaLiga'] != null && collect.length == 0){
            document.getElementsByClassName('ligat')[2].style.display = 'flex';
            const divPL = document.getElementById("esmatches");
            for (i = 0; i < games[x]['LaLiga'].length; i++) {
              const a = document.createElement("p");
              a.innerHTML = games[x]['LaLiga'][i];
              a.classList.add("match");
              divPL.appendChild(a);
            }
          } else {
            document.getElementById('esmatches').innerHTML = "";
            if(games[x]['LaLiga'] != null && collect.length == 0){
              document.getElementsByClassName('ligat')[2].style.display = 'flex';
              const divPL = document.getElementById("esmatches");
              for (i = 0; i < games[x]['LaLiga'].length; i++) {
                const a = document.createElement("p");
                a.innerHTML = games[x]['LaLiga'][i];
                a.classList.add("match");
                divPL.appendChild(a);
              }
            }
          }
        }
        }else{
          document.getElementById('esmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[2].style.display = 'none';
          document.getElementById('wcmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[1].style.display = 'none';
          document.getElementById('plmatches').innerHTML = "";
          document.getElementsByClassName('ligat')[0].style.display = 'none';
          document.getElementById('esmatches').innerHTML = "Nuk u gjet asnjë ndeshje. Zgjedh një datë tjetër";
        }
      });

      