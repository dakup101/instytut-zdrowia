import manageAccordions from './manageAccordion'
import manageMegaMenu from './manageMegaMenu'
import manageSiteOverlay from './manageSiteOverlay'

window.addEventListener('DOMContentLoaded', () => {
    manageAccordions('.prices__table-btn');
    manageMegaMenu();
    manageSiteOverlay();
    // document.getElementById('logo').addEventListener('click', () => {
    //    import(/* webpackChunkName: "hello" */ './hello').then(
    //        module => {
    //            const print = module.default;
    //            print();
    //        }
    //    );
    // })
});
