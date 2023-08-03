import readlineSync from 'readline-sync';

const inputField = document.getElementById('input');
const conversionTypeSelect = document.getElementById('conversion-type');
const convertButton = document.getElementById('convert-btn');
const resultParagraph = document.getElementById('result');

convertButton.addEventListener('click', () => {
  const userInput = inputField.value.trim();
  const conversionType = conversionTypeSelect.value;

  if (userInput === '') {
    resultParagraph.textContent = 'Please enter a string.';
    return;
  }

  let convertedString;

  if (conversionType === 'uppercase') {
    convertedString = userInput.toUpperCase();
  } else if (conversionType === 'lowercase') {
    convertedString = userInput.toLowerCase();
  }

  resultParagraph.textContent = 'Converted string: ' + convertedString;
});
