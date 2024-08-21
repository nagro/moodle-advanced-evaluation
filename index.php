<?php

require_once(__DIR__ . '/../../config.php');
$PAGE->set_url(new moodle_url('/local/myplugin/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_myplugin'));
$PAGE->set_heading(get_string('pluginname', 'local_myplugin'));

echo $OUTPUT->header();
echo "Hello World from Mon Plugin!";
echo $OUTPUT->footer();
