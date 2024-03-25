const display = document.querySelector('#display');
const numberButtons = document.querySelectorAll('.number');
const operators = document.querySelectorAll('.operator')
const clearButton = document.querySelector('.clear');
const resultButton = document.querySelector('.calculate');

const url = 'server.php';

clearButton.addEventListener('click', () => display.value = '');

numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        display.value =  display.value.concat(button.value)
    })
})

operators.forEach(button => {
    button.addEventListener('click', () => {
        display.value =  display.value.concat(button.value)
    })
})

resultButton.addEventListener('click', () => {
    fetch(url, {
        method: 'POST',
        body: display.value
    }).then(response => {
        if(!response.ok) {
            console.log('Что-то пошло не так');
        }
        return response.text()
    }).then(data => {
        display.value = data;
    }).catch(error => {
        console.error('Пизда: ', error);
    })
})