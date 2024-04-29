
function verifLog(){
  const name = document.getElementById('user').value;
  const pw = document.getElementById('password').value;
  if (name == ""){
    alert('enter your name!');
    return false;
  }
  if (pw == ""){
    alert('enter your password!');
    return false;
  }
  return true;
}


function verif(){
  const userName = document.getElementById('user').value;
  const password = document.getElementById('pw').value;
  const passVerif = document.getElementById('pwVerif').value;

  if (userName == ""){
    alert("enter your name!");
    return false;
  }
  if (password == ""){
    alert("enter a password!");
    return false;
  }
  if (passVerif == ""){
    alert("verify your password!");
    return false;
  }
  if (password != passVerif){
    alert("verif your password again");
    return false;
  }
  return true;
}
