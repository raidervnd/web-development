async function sendData(event) {

  event.preventDefault();
  const data = {
    name: form.name.value.trim(),
    email: form.email.value.trim().toLowerCase(),
    gender: form.gender.value,
    country: form.country.value,
    message: form.message.value.trim(),
  }  
  const promise = await fetch('saveform.php', {
      method: 'POST',
      body: JSON.stringify(data)
  });  
  if (promise.ok) {
    const response = await promise.json(); 
    const doneForm = document.getElementById('done');

    function removeRedBorder(key) {
      document.getElementById(key).classList.remove('form__feedbackBorder');
    }
    function makeRedBorder(key) {
      document.getElementById(key).classList.add('form__feedbackBorder');
    }  
    function feedback(key) {
      if (response[key]) 
        makeRedBorder(key);
      else
        removeRedBorder(key);
    }
    
    if (response['done']) {
      doneForm.classList.add('form__success');
      removeRedBorder('name');
      removeRedBorder('email');
      removeRedBorder('message');
        
    } else {
      doneForm.classList.remove('form__success');
      feedback('name');
      feedback('email');
      feedback('message');        
    }
  } else 
    alert('Ошибка ' + response.status);
}

function run() {
  const form = document.getElementById('form');
  form.addEventListener('submit', sendData);
}

window.onload = run;
