export default function manageSiteOverlay(){
    const siteOverlay = document.querySelector('.site-overlay');
    let info = document.getElementById('overlayInfo');
    let left, top; 


    siteOverlay.addEventListener('click', e => {
        let overlay = e.currentTarget as HTMLElement;
        if ((e.target as HTMLElement).contains(overlay)){
            for (let el of document.querySelectorAll('.show')){
                el.classList.remove('show');
            }
        }
    })

    siteOverlay.addEventListener('mousemove', e  => {
        left = (e as MouseEvent).clientX;
        top = (e as MouseEvent).clientY;
        info.style.opacity = "1";
        info.style.left = left + 'px';
        info.style.top = top + 'px';
        console.log(left);
        console.log(top)
    })

    siteOverlay.addEventListener('mouseout', e => {
        info.style.opacity="0";
    })


}