<?php  
require_once(__DIR__ . '/../../config.php'); // Inclure la configuration de Moodle  
require_login(); // Vérifier que l'utilisateur est connecté  

// Définir le contexte et le titre de la page  
$context = context_system::instance();  
$PAGE->set_context($context);  
$PAGE->set_title(get_string('greeting', 'local_hello'));  
$PAGE->set_heading(get_string('greeting', 'local_hello'));  

// Afficher le message  
echo $OUTPUT->header();  
local_hello_display_message(); // Appeler la fonction pour afficher le message  
echo $OUTPUT->footer();  
?> 