$(document).ready(function(){

    // $("a[name='link_exclusao']").click(function() {
    //     id_registro = $(this).attr("id_registro");
    //     confirm = confirm("Voce deseja excluir este registro?");
    //     if (confirm) {
    //         window.location = "delete.php?id=" + id_registro;
    //     }
    // });

    excluir = $("a[name='link_exclusao']");

    excluir.click(function(){
        id_registro = $(this).attr("id_registro");
        confirm = confirm("Voce deseja excluir este registro?");
        if (confirm) {
            window.location = "delete.php?id=" + id_registro;
        }
    })


    voltar = $("div[name='footer_table']");

    voltar.click(function(){
        window.location = "index.php";
    })

});