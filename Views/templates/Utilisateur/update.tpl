<p>{$vue.description}</p>

<form action="index.php?page=utilisateur&action=update" method="post">
    <input type="hidden" name="id"  id="id" value="{$vue.utilisateur[0].id}" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="{$vue.utilisateur[0].libelle}" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
