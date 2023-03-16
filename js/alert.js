// close alert

const closebtn = document.querySelectorAll('.close');
var i;

console.log(closebtn);
console.log(closebtn.length);

for (i = 0; i < closebtn.length; i++){
    closebtn[i].addEventListener("click", function(){
        this.parentElement.style.display = 'none';
    });
}

// const errorAlertBox = document.querySelector('.alert-error');
// const successAlertBox = document.querySelector('.alert-success');
// function closeErrorAlert(){
//     errorAlertBox.style.display = 'none';
//     closebtn.style.display = 'none';
// }

// function closeSuccessAlert(){
//     successAlertBox.style.display = 'none';
//     closebtn.style.display = 'none';
// }


