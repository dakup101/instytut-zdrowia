import manageAccordions from './manageAccordion'
import manageMegaMenu from './manageMegaMenu'
import manageSiteOverlay from './manageSiteOverlay'
import specialistsAjax from './specialistsAjax'

window.addEventListener('DOMContentLoaded', () => {
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
