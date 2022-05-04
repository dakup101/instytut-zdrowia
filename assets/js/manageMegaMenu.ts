export default function manageMegaMenu(){
    let menuTriggers = document.querySelectorAll('.main-nav__link.has-children');
    for (let trigger of menuTriggers){
        trigger.addEventListener('click', e => {
            e.preventDefault();
            (e.currentTarget as HTMLAnchorElement).classList.toggle('show');
            document.querySelector('.site-overlay').classList.add('show');
        })
    }

    let megaMenuTriggers = document.querySelectorAll('.mega-menu__link.has-children');
    let megaMenuContents = document.querySelectorAll('.mega-menu__links');
    for (let trigger of megaMenuTriggers){
        trigger.addEventListener('click', e => {
            removeClassesMegaMenu(megaMenuContents, megaMenuTriggers);
            let subMenuId = (e.currentTarget as HTMLElement).dataset;
            let subMenu = document.querySelector("[data-menu='"+subMenuId.menu+"'].mega-menu__links")
            if (subMenu){
                subMenu.classList.add('show');
                (e.currentTarget as HTMLElement).classList.remove('fading');
                (e.currentTarget as HTMLElement).classList.add('active');
            }
            else{
                showDefaultMenu();
            }
            
        })
        
    }

    function removeClassesMegaMenu(whereToRemoveShow, whereToRemoveActive){
        for (let el of whereToRemoveShow){
            if (el.classList.contains('show')) el.classList.add('fading');
            el.classList.remove('show');
            setTimeout(()=>{
                el.classList.remove('fading');
            }, 300)
            
        }
        for (let el of whereToRemoveActive){
            el.classList.remove('active');
        }
    }

    function showDefaultMenu(){
        console.log('Default Menu');
    }
}