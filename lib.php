<?php  
defined('MOODLE_INTERNAL') || die();  

/**  
 * Fonction pour afficher "Bonjour" sur l'écran d'accueil.  
 *  
 * @return void  
 */  
function local_hello_display_message() {  
    // Afficher le message "Bonjour"  
    echo '<h1>' . get_string('greeting', 'local_hello') . '</h1>';  
}  
?>