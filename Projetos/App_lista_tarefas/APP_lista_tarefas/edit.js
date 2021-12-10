function edit(id, Vtarefa) {

    //estruturando formulário
    let form = document.createElement('form')
    form.action = 'tarefa_controller.php?action=update'
    form.method = 'post'
    form.className= 'row'
     
    //estruturando input
    let input = document.createElement('input')
    input.type = 'text'
    input.name = 'tarefa'
    input.className = 'col-8 form-control'
    input.value = Vtarefa

    let inputID = document.createElement('input')
    inputID.type = 'hidden'
    inputID.name = 'id'
    inputID.value = id

    //estruturando button
    let submit = document.createElement('button')
    submit.type = 'submit'
    submit.className = ' col-3 btn btn-info'
    submit.innerHTML = 'Atualizar'

    form.appendChild(input)
    form.appendChild(inputID)
    form.appendChild(submit)

    let tarefa = document.getElementById('tarefa_'+id)
    
    tarefa.innerHTML=''
    
    tarefa.insertBefore(form, tarefa[0])

}
function exclude(id) {
    location.href='todas_tarefas.php?action=delete&id='+id
}

function toggle(id) {
    location.href='todas_tarefas.php?action=toggle&id='+id;
}