let btnExcluir = document.querySelectorAll(".excluir")
let excluirItem = document.querySelector("#excluirCarro")

for(let item of btnExcluir){
    
    item.addEventListener('click',()=>{
       
        excluirItem.value = item.getAttribute("id")
    })
}