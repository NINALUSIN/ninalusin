$(document).ready(function () {
  console.log('Hello World!');
});

document.querySelector('#javascript-alert-button').addEventListener('click', () => alert('Obvestilo prikazano :)'));

//Character Counter
document.querySelector('#characterCounter').addEventListener('input', characterCounter);

//Sum Calculator
document.querySelector('#sumFirstNumber').addEventListener('input', sumCalculator);
document.querySelector('#sumSecondNumber').addEventListener('input', sumCalculator);

//Show current date

document.querySelector('#javascript-date').innerHTML = new Date();

function characterCounter() {
  document.querySelector('#characterCounterShow').innerHTML =
    'Število znakov: ' + document.querySelector('#characterCounter').value.length;

  document.querySelector('#firstLastCharacter').innerHTML =
    'Prvi znak: ' +
    document.querySelector('#characterCounter').value[0] +
    '<br>' +
    'Zadnji znak: ' +
    document.querySelector('#characterCounter').value[document.querySelector('#characterCounter').value.length - 1];
}

function sumCalculator() {
  let firstNumber = document.querySelector('#sumFirstNumber').value;
  let secondNumber = document.querySelector('#sumSecondNumber').value;

  document.querySelector('#sumResult').value = Number(firstNumber) + Number(secondNumber);
}
