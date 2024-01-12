<?php

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}
fn_print_r(1);die;
use Tygh\Registry;

function fn_my_products_count_get_product_count_for_category($category_id) {
    // Your logic to get product count for the specified category
    $product_count = fn_get_product_count_for_category($category_id);

    return $product_count;
}

function fn_my_products_count_get_frontend_controller($controller, $mode, $params, $all_params) {
    if ($controller === 'categories' && $mode === 'view') {
        $category_id = $params['category_id'];
        $product_count = fn_my_products_count_get_product_count_for_category($category_id);

        // Pass the product count to the frontend controller
        Registry::set('my_products_count', $product_count);
    }
}
