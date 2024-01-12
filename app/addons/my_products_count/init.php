<?php

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

fn_register_hooks(
    'get_product_count_for_category',
    'get_frontend_controller'
);