import manageAccordions from './manageAccordion'
import manageMegaMenu from './manageMegaMenu'
import manageSiteOverlay from './manageSiteOverlay'
import specialistsAjax from './specialistsAjax'
import Swiper, {Navigation} from "swiper";
import 'swiper/css';
import 'swiper/css/navigation'

window.addEventListener('DOMContentLoaded', () => {
    let offerSlider = document.querySelector('.offer-slider');
    if (offerSlider){
        const swiper = new Swiper('.offer-slider', {
            direction: "horizontal",
            loop: true,
            slidesPerView: 2,
            spaceBetween: 75
        })
    }

    manageAccordions('.prices__table-btn');
    manageMegaMenu();
    manageSiteOverlay();
    let specialistMoreBtn = document.querySelectorAll('.specialists__link--more');
    for (let btn of specialistMoreBtn){
        btn.addEventListener('click', e => {
            e.preventDefault();
            let doctor_id = (e.currentTarget as HTMLAnchorElement).dataset.doctor;
            specialistsAjax(doctor_id);
        })
    }
});
