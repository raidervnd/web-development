function isPrimeNumber(number) {
  if (typeof number === 'number') {
    return isPrime(number);
  } else if (typeof number === 'object') {
    return isPrimeArray(number);
  } else {
    return 'Bведено не число!';
  }
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

function isPrimeArray(array) {
  let primeElement;
  if (array.length === 0) {
    return number + 'Введенный массив пуст!';
  } else {
    for (let i = 0; i < array.length; i++) {
      primeElement = true;
      for (let j = 2; j < array[i]; j++) {
        if (array[i] % j === 0) {
          console.log(array[i] + ' непростое число');
          primeElement = false;
          break;      
        }
      } 
      if (array[i] === 1) {
        console.log(array[i] + ' непростое число');
        primeElement = false;
      }
      if (typeof array[i] !== 'number') {
        console.log(array[i] + ' не число!');
        primeElement = false;
      }
      if (primeElement) {
        console.log(array[i] + ' простое число');         
      }        
    } 
  }
  return null;
}