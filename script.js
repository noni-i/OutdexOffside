
var dayNames = ['E diel', 'E Hene', 'E Marte', 'E Merkure', 'E Enjte', 'E Premte', 'E Shtune'],
    monthNames = ['Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nëntor', 'Dhjetor'];

d = new Date();

const monthHeader = document.getElementById('month-header');

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

      $('#myform').submit();    
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
  if(document.getElementById('myCheckbox').checked == true){
    if(x === true && y === true){
      var button = document.getElementsByClassName('button-signup-final')[0];
      button.className = 'button-signup';
      button.addEventListener('click', function() {
        //alert('Krijimi i llogarisë u krye me sukses.');
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
