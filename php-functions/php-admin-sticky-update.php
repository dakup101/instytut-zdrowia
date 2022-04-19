<?php
function sticky_update()
{
    echo '<style>
        #poststuff #post-body.columns-2 #side-sortables { 
            margin-top: 350px; 
        }
        #submitdiv { 
            position: fixed; 
            margin-top: -350px; 
            right: 20px; 
            z-index: 9999; 
            max-width: 278px; 
            width: 100%; 
            -webkit-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1); 
            -moz-box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1); 
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1););
        }
    </style>';
}

add_action('admin_head', 'sticky_update');
