document.addEventListener("keyup", e =>{
    if(e.target.matches(".filtro-tarjeta")){
        document.querySelectorAll(".tarjeta").forEach((imagen) =>{
            imagen.textContent.toLocaleLowerCase().includes(e.target.value)
            ?imagen.classList.remove("filter"):tarjeta.classList.add("filter");
        });
        
        if (e.key === Escape){
            e.target.value="";
        }      
    }
})