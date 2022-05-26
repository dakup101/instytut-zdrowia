==== Copyrigth ====

This theme is Everywhere Polska's IP 
Developer: Danylo Kupriienko
Contact: daniel@everywhere.pl

==== After Updating WP ===

After updating pls add this lines to admin-ajax.php, so js fetch API works: 

if ( !empty( trim( file_get_contents("php://input" ) ) ) ) {
  $post = trim(file_get_contents("php://input"));
  $_POST = ( array ) json_decode( $post );
    $_REQUEST['action'] = $_POST['action'];
}

ALSO comment it out while working with ACF fields in backend (adding new fields, etc.).
It kinda breaks default AJAX for ACF, will fix it in future, i guess :P