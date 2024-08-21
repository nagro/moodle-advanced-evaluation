<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_local_myplugin_uninstall() {
    global $DB;

    // Supprimer les tables spécifiques à ton plugin.
    $DB->delete_records('myplugin_table');

    return true;
}
