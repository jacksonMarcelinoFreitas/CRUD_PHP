$(document).ready(function(){

    excluir = $("a[name='link_exclusao']");
    voltar = $("div[name='footer_table']");

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

});