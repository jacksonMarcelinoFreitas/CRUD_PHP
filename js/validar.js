//criar funcoes para validacao

function validacaoInsert(){
    if(document.forms[0].nome.value == ''){
        alert('Por favor digite o nome do cliente!');
        return false;
    }
    if(document.forms[0].sobrenome.value == ''){
        alert('Por favor digite o sobrenome do cliente!');
        return false;
    }
    if(document.forms[0].telefone.value == ''){
        alert('Por favor digite o telefone do cliente!');
        return false;
    }
    if(document.forms[0].endereco.value == ''){
        alert('Por favor digite o endereco do cliente!');
        return false;
    }
    if(document.forms[0].cidade.value == ''){
        alert('Por favor digite o cidade do cliente!');
        return false;
    }

    if(document.getElementsByName('sexo')[0].checked == false && document.getElementsByName('sexo')[1].checked == false){
        alert('Por favor selecione o sexo do cliente!');
        return false;
    }
}

function validacaoUpdate(){
    if(document.forms[0].id.value == undefined){
        alert('Não foi possível obter o ID do cliente!');
        return false;
    }
    if(document.forms[0].nome.value == ''){
        alert('Por favor digite o nome do cliente!');
        return false;
    }
    if(document.forms[0].sobrenome.value == ''){
        alert('Por favor digite o sobrenome do cliente!');
        return false;
    }
    if(document.forms[0].telefone.value == ''){
        alert('Por favor digite o telefone do cliente!');
        return false;
    }
    if(document.forms[0].endereco.value == ''){
        alert('Por favor digite o endereco do cliente!');
        return false;
    }
    if(document.forms[0].cidade.value == ''){
        alert('Por favor digite o cidade do cliente!');
        return false;
    }

    if(document.getElementsByName('sexo')[0].checked == false && document.getElementsByName('sexo')[1].checked == false){
        alert('Por favor selecione o sexo do cliente!');
        return false;
    }
}



function deleteConfirm(){
    confirm("Você tem certeza que deseja excluir este cliente?");
}
