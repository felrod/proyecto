let btnChangeProd = document.querySelector('#changeProducts');
let div = document.getElementById('divnotif');
console.log(document.getElementById("divnotif").innerHTML = "nuevo contenido del div";);

btnChangeProd.addEventListener('click', function(e)) {
  e.preventDefault();
  document.getElementById("divnotif").innerHTML = "nuevo contenido del div";
  btnChangeProd.innerText = '';
}
