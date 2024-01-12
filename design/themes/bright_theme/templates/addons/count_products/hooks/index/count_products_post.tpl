{foreach from=$categories_list item=category}
    <div class="category-block">
        <h2>{$category.category|fn_translate}</h2>
        {if $category.subcategories}
            <ul>
                {foreach from=$category.subcategories item=subcategory}
                    <li>{$subcategory.category|fn_translate}</li>
                {/foreach}
            </ul>
        {/if}
    </div>
{/foreach}