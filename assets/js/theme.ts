import manageAccordions from './manageAccordion'
import manageMegaMenu from './manageMegaMenu'
import manageSiteOverlay from './manageSiteOverlay'

window.addEventListener('DOMContentLoaded', () => {
    manageAccordions('.prices__table-btn');
    manageMegaMenu();
    manageSiteOverlay();
});
