// close alert

const closebtn = document.querySelectorAll('.close');
var i;

for (i = 0; i < closebtn.length; i++){
    closebtn[i].addEventListener("click", function(){
        this.parentElement.style.display = 'none';
    });
}


