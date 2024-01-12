{* Файл: design/themes/THEME/templates/addons/my_module/blocks/my_module_block.tpl *}

{assign var="category_id" value="YOUR_CATEGORY_ID"} {* Замените YOUR_CATEGORY_ID на ID вашей категории *}

{assign var="product_count" value=fn_get_product_count($category_id)}

<div class="my-module-block">
    <h4>Количество товаров в категории:</h4>
    <p>{$product_count}</p>
</div>
