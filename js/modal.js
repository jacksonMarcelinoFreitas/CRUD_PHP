$('#meu-modal').on('hidden.bs.modal', function (e) {
    alert('teste');
})

$("#form").click(function(e)){
    e.preventDefault();
    alert("teste");

});



const formData = document.querySelector('form');


function validate(e) {
  e.preventDefault();

  alert("test");
}