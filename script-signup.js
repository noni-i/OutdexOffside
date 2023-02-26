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