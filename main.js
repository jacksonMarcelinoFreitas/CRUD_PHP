//criar funcoes para validacao

function validacao(){
    if(document.forms[0].nome.value == ''){
        alert('Por favor digite o nome do cliente!');
        return false;
    }
}

// const link = document.getElementsByClassName('link');

// function preventDefault(event){
//     return event.preventDefault();
// }

// const buttonDelete = document.getElementsByClassName('delete_button');

// buttonDelete.addEventListener('click', deleteConfirm());

function deleteConfirm(){
    confirm("Você tem certeza que deseja excluir este cliente?");
}


// $('.elemento').on('click', function(e) {
//     e.preventDefault();
//     alert('Você clicou aqui e nada aconteceu!');
// });

