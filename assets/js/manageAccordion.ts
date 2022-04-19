export default function manageAccordion(btnClass : string){
    let triggerBtns = document.querySelectorAll(btnClass);
    for (const btn of triggerBtns){
        btn.addEventListener("click", (e)=>{
            e.preventDefault();
            if (e.currentTarget instanceof HTMLElement){
                let content = e.currentTarget.parentNode.querySelector("div[data-tab]")
                e.currentTarget.classList.toggle("active");
                if (content instanceof HTMLElement){
                    if (e.currentTarget.classList.contains('active')){
                        content.style.height=content.scrollHeight.toString()+"px";
                    }
                    else{
                        content.style.height = "0px";
                    }
                }
            }
        })
    }
}