<?php

include(__DIR__ . '/config/config-cpt.php');
include(__DIR__ . '/config/config-menu.php');
include(__DIR__ . '/config/config-redirect.php');
include(__DIR__ . '/config/config-autofill_form.php');

function component($component_name) {

    require_once __DIR__."/components/".$component_name.'.php';

}