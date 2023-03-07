$(document).ready(function(){

    excluir = $("a[name='link_exclusao']");
    voltar = $("div[name='footer_table']");
    showPassword = $('.showPass');
    closePassword = $('.closePass');
    inputPassword = $("input[name='password']");
    console.log(inputPassword);

    console.log(showPassword);

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
        inputPassword.setAttribute("type", "text");
    })

    showPassword.click(function(){
        closePassword.removeClass('hide');
        showPassword.addClass('hide');
        inputPassword.setAttribute("type", "password");

    })



});