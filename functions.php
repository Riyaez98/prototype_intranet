<?php

include(__DIR__ . '/config/config-cpt.php');
include(__DIR__ . '/config/config-menu.php');

function component($component_name) {

    require_once __DIR__."/components/".$component_name.'.php';

}