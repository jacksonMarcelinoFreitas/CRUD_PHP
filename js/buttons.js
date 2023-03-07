$(document).ready(function(){

    excluir = $("a[name='link_exclusao']");
    voltar = $("div[name='footer_table']");
    showPassword = $('.showPass');
    closePassword = $('.closePass');
    // inputPassword = $("input[name='password']");
    let inputPassword = document.querySelector('.password');

    // console.log($("input[name='password']").prop('type', 'password'));


    excluir.click(function(){
        id_registro = $(this).attr("id_registro");
        confirm = confirm("Voce deseja excluir este registro?");
        if (confirm) {
            window.location = "delete.php?id=" + id_registro;
        }
    })

    voltar.click(function(){
        window.location = "index.php";
    })

    
    closePassword.click(function(){
        showPassword.removeClass('hide');
        closePassword.addClass('hide');

        if(inputPassword.getAttribute('type') == 'password') {
            inputPassword.setAttribute('type', 'text');
        } else {
            inputPassword.setAttribute('type', 'password');
        }
    })

    showPassword.click(function(){
        closePassword.removeClass('hide');
        showPassword.addClass('hide');

        if(inputPassword.getAttribute('type') == 'text') {
            inputPassword.setAttribute('type', 'password');
        } else {
            inputPassword.setAttribute('type', 'text');
        }

    })
    



});