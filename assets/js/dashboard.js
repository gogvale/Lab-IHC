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
 function agregarTarea(form){
     console.log(form);
     form = form.querySelectorAll("input");
     title = form[0].value;
     assignee = form[1].value;
     date = new Date();
     time = `${date.getHours()}:${date.getMinutes()}`;
     element = document.createElement("DIV");
     element.innerHTML = 
     `<li class="list-group-item">
        <div class="row align-items-center no-gutters">
            <div class="col mr-2">
                <h6 class="mb-0"><strong>${title}</strong><span>&nbsp;(${assignee})</span></h6><span class="text-xs">${time}</span>
            </div>
            <div class="col-auto">
                <div class="row">
                    <div class="col" style="margin: 0;">
                        <div class="custom-control custom-checkbox" onclick=completarTarea(this.childNodes[0].id) style="padding: 0;"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1"></label></div>
                    </div>
                    <div class="col"><a onclick=borrarTarea(this.parentElement.parentElement.querySelector("input").id) href="#"><i class="fa fa-trash" style="color: var(--red);font-size: 22px;"></i></a></div>
                </div>
            </div>
        </div>
    </li>`;
    element = element.firstChild;
    console.log(title)
    console.log(assignee)
    console.log(element)
    document.getElementById("todo").appendChild(element);
    [...$("#dialog")[0].querySelectorAll("input")].map(e=>e.value = "") // Clean Inputs
    $('#dialog').modal("hide") // Hide Modal
 }