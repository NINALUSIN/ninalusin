$(document).ready(function () {
  console.log('Hello World!');
});

document.querySelector('#javascript-alert-button').addEventListener('click', () => alert('Obvestilo prikazano :)'));

document.querySelector('#characterCounter').oninput = function () {
  document.querySelector('#characterCounterShow').innerHTML =
    'Število znakov: ' + document.querySelector('#characterCounter').value.length;
};
