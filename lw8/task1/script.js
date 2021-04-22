function isPrimeNumber(number) {
  if (typeof number === 'number') {
    console.log(isPrime(number));
  } else if (typeof number === 'object') {
    console.log(isPrimeArray(number));
  } else {
    console.log('Bведено не число!');
  }
  return null;
}

function isPrime(number) {
  if (number === 1) {
    return number + ' непростое число';
  }
  for (let i = 2; i < number; i++) {
    if (number % i === 0) {
      return number + ' непростое число';
    } 
  }
  return number + ' простое число';
}

function isPrimeArray(number) {
  let primeElement;
  if (number.length === 0) {
    return number + 'Введенный массив пуст!';
  } else {
    for (let i = 0; i < number.length; i++) {
      primeElement = true;
      for (let j = 2; j < number[i]; j++) {
        if (number[i] % j === 0) {
          console.log(number[i] + ' непростое число');
          primeElement = false;
          break;      
        }
      } 
      if (number[i] === 1) {
        console.log(number[i] + ' непростое число');
        primeElement = false;
      }
      if (typeof number[i] !== 'number') {
        console.log(number[i] + ' не число!');
        primeElement = false;
      }
      if (primeElement) {
        console.log(number[i] + ' простое число');         
      }        
    } 
  }
  return null;
}