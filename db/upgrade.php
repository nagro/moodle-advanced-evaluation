<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_local_myplugin_upgrade($oldversion) {
    global $DB;

    if ($oldversion < 2023082100) {
        // Mise à jour à partir d'une version antérieure.
        
        // Exemple : ajout d'une nouvelle colonne à une table.
        $table = new xmldb_table('myplugin_table');
        $field = new xmldb_field('new_column', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'data');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Enregistrer la mise à jour du plugin.
        upgrade_plugin_savepoint(true, 2023082100, 'local', 'myplugin');
    }

    return true;
}
