{if $favorites|@count > 0}
    <div class="my-favorites-list">
        <h2>Mes produits favoris</h2>
        <ul>
            {foreach from=$favorites item=favorite}
                <li>
                    <div class="product-image">
                        <img src="{$favorite.image}" alt="{$favorite.name|escape:'html':'UTF-8'}">
                    </div>
                    <div class="product-details">
                        <h3 class="product-name"><a href="{$favorite.link}">{$favorite.name|escape:'html':'UTF-8'}</a></h3>
                        <div class="product-price">{$favorite.price|escape:'html':'UTF-8'}</div>
                        <button class="remove-from-favorites-btn" data-id-product="{$favorite.id_product}">Retirer des favoris</button>
                    </div>
                </li>
            {/foreach}
        </ul>
    </div>
{else}
    <p>Vous n'avez aucun produit dans votre liste de favoris.</p>
{/if}
