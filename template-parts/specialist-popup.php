<?php $footer_contact = get_field('footer__contact', 'options'); ?>

<div class="specialists__popup">
    <div class="specialists__popup--wrapper">
        <div class="specialists__popup--close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <div class="specialists__popup--overlay" id="specialistsSpinner">
            <svg class="spinner" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="399.387px" height="399.387px"
                viewBox="0 0 399.387 399.387" style="enable-background:new 0 0 399.387 399.387;" xml:space="preserve">
                <g>
                    <path
                        d="M340.896,58.488C303.18,20.771,253.033,0,199.694,0C146.353,0,96.207,20.771,58.491,58.488 C20.772,96.206,0,146.354,0,199.693c0,53.342,20.772,103.489,58.491,141.206c37.716,37.717,87.863,58.488,141.203,58.488 c53.337,0,103.486-20.771,141.203-58.488c37.719-37.718,58.49-87.865,58.49-141.206C399.387,146.355,378.615,96.207,340.896,58.488 z M199.694,77.457c67.402,0,122.236,54.835,122.236,122.236s-54.834,122.236-122.236,122.236S77.457,267.094,77.457,199.693 S132.292,77.457,199.694,77.457z M328.061,328.062c-34.289,34.287-79.877,53.17-128.367,53.17 c-48.491,0-94.079-18.883-128.367-53.17c-34.289-34.287-53.173-79.877-53.173-128.37h41.148 c0,77.411,62.979,140.391,140.392,140.391c77.412,0,140.39-62.979,140.39-140.391c0-77.412-62.979-140.391-140.39-140.391 c-4.594,0-9.134,0.229-13.615,0.662v-41.31c4.508-0.332,9.049-0.5,13.615-0.5c48.49,0,94.078,18.883,128.367,53.171 c34.289,34.289,53.172,79.878,53.172,128.368C381.232,248.186,362.35,293.775,328.061,328.062z" />
                </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
            </svg>
        </div>
        <div class="row gx-5">
            <div class="col-4">
                <div class="specialists__popup--img">
                    <img id="specialistImg" src="" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="specialists__popup--content">
                    <div class="specialists__popup--name" id="specialistName"></div>
                    <div class="specialists__popup--desc" id="specialistDesc">
                        <p>asdasdasd</p>
                        <p>bsdasdasdasda</p>
                    </div>
                    <a href="/zarezerwuj-termin" class="footer__contact-btn">
                        <img src="<?php echo $footer_contact['btn_icon'];?>" alt="" class="footer__contact-btn--img">
                        <span class="footer__contact-btn--text">umów się na wizytę</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>