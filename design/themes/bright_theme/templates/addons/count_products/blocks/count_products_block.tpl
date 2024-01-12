<div class="count-products-block">
    {if $products}
        <h2>Featured Products</h2>
        <ul>
            {foreach from=$products item=product}
                <li>{$product.product|fn_get_product_name}</li>
            {/foreach}
        </ul>
    {else}
        <p>No products found.</p>
    {/if}
</div>