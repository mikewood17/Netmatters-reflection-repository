// close alert

const closebtn = document.querySelector('.close');
const errorAlertBox = document.querySelector('.alert-error');
const successAlertBox = document.querySelector('.alert-success');

function closeErrorAlert(){
    errorAlertBox.style.display = 'none';
    closebtn.style.display = 'none';
}

function closeSuccessAlert(){
    successAlertBox.style.display = 'none';
    closebtn.style.display = 'none';
}


