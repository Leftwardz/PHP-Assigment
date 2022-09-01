const form_dvd = document.querySelector('#form_dvd');
const form_book = document.querySelector('#form_book');
const form_furniture = document.querySelector('#form_furniture');
const type_switch = document.querySelector('#productType');

function verify_type () {
    if (type_switch.value == 'DVD'){
        form_dvd.classList.remove('form-hide');
        form_book.classList.add('form-hide');
        form_furniture.classList.add('form-hide');
    }
    if (type_switch.value == 'Book'){
        form_dvd.classList.add('form-hide');
        form_book.classList.remove('form-hide');
        form_furniture.classList.add('form-hide');
    } 
    if (type_switch.value == 'Furniture') {
        form_dvd.classList.add('form-hide');
        form_book.classList.add('form-hide');
        form_furniture.classList.remove('form-hide');
    }
}

type_switch.addEventListener('change', verify_type)

verify_type();
