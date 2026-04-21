<h2>Rechercher un site</h2>

<form action="index.php?page=site&action=recherche" method="post">
    <select name="categorie">
        <option value="">-- Choisir une catégorie --</option>
        {foreach $categories as $cat}
            <option value="{$cat.id}">{$cat.libelle}</option>
        {/foreach}
    </select>

    <input type="text" name="motcle" placeholder="Mot-clé (titre ou description)">
    <input type="submit" value="Rechercher">
</form>

{if isset($resultats)}
    <h3>Résultats</h3>
    {if count($resultats) > 0}
        <ul>
            {foreach $resultats as $site}
                <li>
                    <strong>{$site.titre}</strong><br>
                    <a href="{$site.url}" target="_blank">{$site.url}</a><br>
                    {$site.description}
                </li>
            {/foreach}
        </ul>
    {else}
        <p>Aucun résultat trouvé.</p>
    {/if}
{/if}