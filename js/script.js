let form = document.querySelector('form');
let inputs = document.querySelectorAll('.form-input');

// Загрузка сохраненных данных из localStorage
loadFormData();

// Обработчик события отправки формы
form.addEventListener('submit', function(event) {
  event.preventDefault();
  if (validateForm()) {
    saveFormData();
    sendFormData();
  }
});

// Проверка полей формы
function validateForm() {
  for (let i = 0; i < inputs.length; i++) {
    let input = inputs[i];
    if (input.value.trim() === '') {
      alert('Пожалуйста, заполните все обязательные поля');
      return false;
    }
  }
  return true;
}

// Сохранение данных формы в localStorage
function saveFormData() {
  let formData = {};
  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];
    formData[input.name] = input.value;
  }
  localStorage.setItem('formData', JSON.stringify(formData));
}

// Отправка данных формы на почту
function sendFormData() {
  form.action = 'mail.php';
  form.method = 'POST';
  form.submit();
}

// Загрузка данных формы из localStorage
function loadFormData() {
  const savedFormData = localStorage.getItem('formData');
  if (savedFormData) {
    let formData = JSON.parse(savedFormData);
    for (let i = 0; i < inputs.length; i++) {
      const input = inputs[i];
      if (formData[input.name]) {
        input.value = formData[input.name];
      }
    }
  }
}