$(document).ready(function () {
  console.log('Hello World!');
});

document.querySelector('#javascript-alert-button').addEventListener('click', () => alert('Obvestilo prikazano :)'));

//Character Counter
document.querySelector('#characterCounter').addEventListener('input', stringManipulation);

//Sum Calculator
document.querySelector('#sumFirstNumber').addEventListener('input', calculator);
document.querySelector('#sumSecondNumber').addEventListener('input', calculator);

//Show current date

document.querySelector('#javascript-date').innerHTML = new Date();

function stringManipulation() {
  let string = document.querySelector('#characterCounter').value;
  let stringLength = string.length;
  let firstCharacter = string[0];
  let lastCharacter = string[string.length - 1];

  let upperCaseString = string.toUpperCase();
  let lowerCaseString = string.toLowerCase();

  let halvedString = string.substring(0, string.length / 2);

  document.querySelector('#characterCounterShow').innerHTML = `Število znakov: ${stringLength} `;

  document.querySelector(
    '#firstLastCharacter'
  ).innerHTML = `Prvi znak: ${firstCharacter} <br> Zadnji znak: ${lastCharacter}`;

  document.querySelector('#upperCaseString').innerHTML = `Uppercase: ${upperCaseString} `;
  document.querySelector('#lowerCaseString').innerHTML = `Lowercase: ${lowerCaseString} `;
  document.querySelector('#halveString').innerHTML = `Polovica besedila: ${halvedString} `;
}

function calculator() {
  let firstNumber = document.querySelector('#sumFirstNumber').value;
  let secondNumber = document.querySelector('#sumSecondNumber').value;

  document.querySelector('#sumResult').value = Number(firstNumber) + Number(secondNumber);
  document.querySelector('#difResult').value = Number(firstNumber) - Number(secondNumber);
  document.querySelector('#productResult').value = Number(firstNumber) * Number(secondNumber);
  document.querySelector('#quotientResult').value = Number(firstNumber) / Number(secondNumber);
  document.querySelector('#modResult').value = Number(firstNumber) % Number(secondNumber);
}
