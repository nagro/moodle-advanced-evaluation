<?php

namespace local_myplugin\event;

defined('MOODLE_INTERNAL') || die();

class my_custom_event extends \core\event\base {
    public function init() {
        $this->data = array(
            'objectid' => $this->objectid,
            'context' => $this->context->id,
            'other' => array('info' => $this->other['info']),
        );
    }
}
