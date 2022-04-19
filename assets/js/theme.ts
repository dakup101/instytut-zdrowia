import manageAccordions from './manageAccordion'

window.addEventListener('DOMContentLoaded', () => {
    manageAccordions('.prices__table-btn');

    // document.getElementById('logo').addEventListener('click', () => {
    //    import(/* webpackChunkName: "hello" */ './hello').then(
    //        module => {
    //            const print = module.default;
    //            print();
    //        }
    //    );
    // })
});
