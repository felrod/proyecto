let btnChangeBG = document.querySelector('#changeBG');
let body = document.getElementById('body');

if (window.localStorage.getItem('darkTheme')) {
  console.log("hay localStorage");
  btnChangeBG.innerText = 'White Theme';
  body.classList.add(window.localStorage.getItem('darkTheme'));
}

btnChangeBG.addEventListener('click', function (e) {
  e.preventDefault();
  if (window.localStorage.getItem('darkTheme')) {
    window.localStorage.removeItem('darkTheme');
    btnChangeBG.innerText = 'Dark Theme';
    body.classList.remove('dark-theme');
  } else {
      window.localStorage.setItem('darkTheme', 'dark-theme');
      btnChangeBG.innerText = 'Previous Theme';
      body.classList.add('dark-theme');
  }
});
