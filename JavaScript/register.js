function registerUser(){

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({
  "username": document.getElementsByName("username")[0].value,
  "email": document.getElementsByName("Email")[0].value,
  "password": document.getElementsByName("psw")[0].value
});

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: raw,
  redirect: 'follow'
};

fetch("https://plusthreeapi.herokuapp.com/users/register", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
}