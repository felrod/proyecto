window.onload = function () {

var form = document.querySelector(".user-form");

var field = form.elements;

field = Array.from(field);
field.pop();

const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
const regexNumbers = /^\d+$/;

var fieldUsername = form.username;
var fieldName = form.name;
var fieldEmail = form.email;
var fieldPassword = form.password;
var fieldRepPassword = form.cpassword;
var fieldCountry = form.country;
var finalData = {};

// funciones de campos vacios, e email

function emptyValidate () {
  var error = this.parentElement.querySelector('.invalid-feedback');
  var nombreCampo = this.parentElement.querySelector('label').innerText;
  if (this.value.trim() === '') {
    this.classList.add('is-invalid');
    error.innerText = 'El campo ' + nameField + ' es obligatorio';
  } else {
    error.innerText = '';
      this.classList.remove('is-invalid');
  }
}

function emptyUsernameValidate () {
  var error = this.parentElement.querySelector('.invalid-feedback');
  var nameField = this.parentElement.querySelector('label').innerText;
  if (this.value.trim() === '') {
    this.classList.add('is-invalid');
    error.innerText = 'El campo ' + nameField + ' es obligatorio';
  } else {
    error.innerText = '';
    this.classList.remove('is-invalid');
  }
}

function emptyNameValidate () {
  var error = this.parentElement.querySelector('.invalid-feedback');
  var nameField = this.parentElement.querySelector('label').innerText;
  if (this.value.trim() === '') {
    this.classList.add('is-invalid');
    error.innerText = 'El campo ' + nameField + ' es obligatorio';
  } else {
    error.innerText = '';
    this.classList.remove('is-invalid');
  }
}

function emptyAndEmailValidate () {
  var error = this.parentElement.querySelector('.invalid-feedback');
  var nameField = this.parentElement.querySelector('label').innerText;
  if (this.value.trim() === '') {
    this.classList.add('is-invalid');
    error.innerText = 'El campo ' + nameField + ' es obligatorio';
  } else if (!regexEmail.test(this.value.trim())) {
    error.innerText = 'El formato de email no es valido';
  } else {
    error.innerText = '';
    this.classList.remove('is-invalid');
  }
}

//eventos de javascript:

fieldUsername.addEventListener('blur', emptyUsernameValidate);
fieldName.addEventListener('blur', emptyValidate);
fieldEmail.addEventListener('blur', emptyAndEmailValidate);
fieldCountry.addEventListener('blur', emptyValidate);

fieldPassword.addEventListener('blur', function () {
  var error = this.parentElement.querySelector('.invalid-feedback');
  var nameField = this.parentElement.querySelector('label').innerText;
  if (this.value.trim() === '') {
    this.classList.add('is-invalid');
    error.innerText = 'El campo ' + nombreCampo + ' es obligatorio';
  } else if (this.value.trim().length < 4) {
    error.innerText = 'La contraseña debe tener más de 4 caracteres';
  } else {
    error.innerText = '';
    this.classList.remove('is-invalid');
  }
});

fieldRepPassword.addEventListener('change', function () {
  var error = this.parentElement.querySelector('.invalid-feedback');
  if (this.value.trim() !== campoPassword.value.trim()) {
    this.classList.add('is-invalid');
    error.innerText = 'Las contraseñas no coinciden';
  } else {
    error.innerText = '';
    this.classList.remove('is-invalid');
  }
});

//---

form.addEventListener ('submit', function (e) {
    e.preventDefault();
    if (
      fieldUsername.value.trim() === '' ||
      fieldName.value.trim() === '' ||
      fieldEmail.value.trim() === '' ||
      fieldPassword.value.trim() === '' ||
      fieldRepPassword.value.trim() === '' ||
      fieldCountry.value.trim() === ''
    ) {
      field forEach(function (campo))
    }
})
