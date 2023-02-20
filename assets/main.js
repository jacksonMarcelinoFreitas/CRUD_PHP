let form = document.getElementById('form')
let deleteButton = document.querySelector('.delete_button');
let updateButton = document.querySelector('.update_button');


deleteButton.addEventListener('click', function(){
    window.alert('Teste')
})

updateButton.addEventListener('click', function(){
    window.alert('Teste')
})

form.addEventListener('submit', e=> {
    // e.preventDefault()
    window.history.go(-1);
    console.log("PreventDefault")
})

