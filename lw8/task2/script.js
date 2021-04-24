let string = prompt('Введите пример в польской записи');
// alert(confirm('Вы ввели' + resultT));
calc(string);
function calc(string) {
  if (typeof string === 'string') {
    const sampleString = /\(*[+\-*/]\s+\-*\d+\s+\-*\d+\)*/;
    let match = string.match(sampleString);
    if (match !== null) {
      match[0] = match[0].replace(/^\(*/, '');
      match[0] = match[0].replace(/\)*$/, '');
      // console.log(match);
      let arr = match[0].split(" ");
      let operator = arr[0];
      let firstTerm = Number(arr[1]);
      let secondTerm = Number(arr[2]);
      let result = 0;
      // console.log('1)', firstTerm, '2)', secondTerm);
      if (operator === '+') {
        result = firstTerm + secondTerm;
      }
      if (operator === '-') {
        result = firstTerm - secondTerm;
      }
      if (operator === '*') {
        result = firstTerm * secondTerm;
      }
      if (operator === '/') {
        result = firstTerm / secondTerm;
      }
      let newString = string.replace(sampleString, result);
      // console.log(newString, ' ,', result);
      if (newString.length === String(result).length) {
        return alert(string + ' = ' + result);
      } else {
        return calc(newString);
      }
    } else {
      return alert('Cовпадений не найдено или строка введена не верно!');
    }
  } 
  //   else {
  //   return alert('Введите строку');
  // }
}