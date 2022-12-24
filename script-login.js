  function ValidateEmail() 
{
  var email = document.getElementById('emailfield').value;
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 if (email.match(regex))
  {
    document.getElementById('emailfield').style.borderColor="gray"
    return (true) 
  }
    document.getElementById('emailfield').style.borderColor="#C50E19"
    return (false)
}

function ValidatePassword(){
  var password = document.getElementById('passwordfield').value;
  var regex = /(?=[A-Za-z0-9@#$%^&+!=]+$)^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,}).*$/;
  if (password.match(regex))
  {
    document.getElementById('passwordfield').style.borderColor="gray"
    return (true) 
  }
    document.getElementById('passwordfield').style.borderColor="#C50E19"
    return (false)
}


const button = document.getElementById('bttn');

button.addEventListener('click', () => {
    var x = (ValidateEmail(document.getElementById('emailfield').value));
    var y = (ValidatePassword(document.getElementById('passwordfield').value)); 

    if(x === true && y === true){
        alert("Validimi u krye me sukses.");
    }else{
        alert("Forma nuk u plotsue mirë.")
    }
})
