<?php
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_count_products_get_layout_blocks(&$layout_blocks, $area)
{
    if ($area == 'index') {
        $categories = fn_custom_get_categories(); // Function to get categories
        $products = fn_custom_get_products_from_categories($categories); // Function to get products from categories

        $layout_blocks['count_products_block'] = array(
            'template' => 'addons/count_products/hooks/index/scripts.post.tpl',
            'priority' => 50,
            'data' => array(
                'products' => $products,
            ),
        );
    }
}

function fn_custom_get_categories()
{
    // Function to get the required categories
    // Replace this with your implementation
    $categories = db_get_array("SELECT category_id, category FROM ?:categories WHERE parent_id = 0");
    return $categories;
}

function fn_custom_get_products_from_categories($categories)
{
    // Function to get products from the specified categories
    // Replace this with your implementation
    $products = array();

    foreach ($categories as $category) {
        $category_id = $category['category_id'];
        $products_in_category = fn_get_products(array('category_id' => $category_id));
        $products = array_merge($products, $products_in_category);
    }

    return $products;
}
