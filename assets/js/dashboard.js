function borrarTarea(id,check=false){
    element = document.querySelector(`#${id}`);
    check = check || confirm("Realmente desea borrar la tarea?");
    if( check ) {
        element
        .parentElement
        .parentElement
        .parentElement
        .parentElement
        .parentElement
        .parentElement.remove();
        console.log(`Tarea ${id} borrada`);
    }
    console.log(element);
}
function completarTarea(id){
    console.log(`Tarea ${id} completada`);
    element = document.querySelector(`#${id}`)
                .parentElement
                .parentElement
                .parentElement
                .parentElement
                .parentElement
                .parentElement;
    
    element.querySelector("input").checked = true // Checks task
    console.log(element);
    document.querySelector("#finished").appendChild(element);
    element.querySelector("i.fa-trash").parentElement.parentElement.remove(); // Deletes trash bin

    return element;
}