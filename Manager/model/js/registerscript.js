const username = document.getElementById('username');
const password = document.getElementById('password');
const email = document.getElementById('email');
const loc = document.getElementById('location');
const phone = document.getElementById('phone');
const fname = document.getElementById('name');
const myFile = document.getElementById('photo');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
  let messages = [];
  //username val
  if (username.value === '' || username.value == null) {
    messages.push('Username: Required');
  }

  if (
    username.value.length < 2 &&
    ((username.value >= 'A' && username.value <= 'Z') ||
      (username.value >= 'a' && username.value <= 'z'))
  ) {
    messages.push('Username:Contains at least two words');
  }

  if (username.value >= '0' && username.value <= '9') {
    messages.push('Username:Must be starts with letter');
  }
  //username val

  //password val
  if (password.value.length <= 6) {
    messages.push('Password: Must be longer then 6 characters');
  }

  if (password.value.length >= 20) {
    messages.push('Password: Must be less then 20 characters');
  }
  //password val

  //email val
  if (email.value != '') {
    var atposition = email.value.indexOf('@');
    var dotposition = email.value.lastIndexOf('.');
    if (
      atposition < 1 ||
      dotposition < atposition + 2 ||
      dotposition + 2 >= email.length
    ) {
      messages.push('Email: Please enter a valid e-mail address');
    } else {
    }
  } else {
    messages.push('Email: Required');
  }
  //email val

//name val
  if (fname.value === '' || fname.value == null) {
    messages.push('Name: Required');
  }
//name val

//location val
  if (loc.value === '' || loc.value == null) {
    messages.push('Location: Required');
  }
//location val

//Phone val
if (phone.value === '' || phone.value == null) {
    messages.push('Phone: Required');
  }
//Phone val

/*//photo val
if(myFile.value == ""){
    messages.push("Photo: Required");
}
//photo val*/


  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerText = messages.join(',\n ');
  }
});
